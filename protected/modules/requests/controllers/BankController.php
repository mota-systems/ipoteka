<?php

class BankController extends DefaultController
{

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + consider, comment', // we only allow deletion via POST request
//            'ajaxOnly + consider',
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'roles' => array('bankManager'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'comment' => array(
                'class'    => 'requests.components.actions.CommentAction',
                'scenario' => 'agent',
            ),
            'statistics'   => 'requests.components.actions.StatisticsAction',
        );
    }

    public function actionConsider($id)
    {
        $model = $this->loadModel($id);
        $consider = $model->organizationDecision;
        if ($consider) {
            if (!Yii::app()->user->checkAccess('overrideConsiderRequest') AND $model->status_id != Requests::STATUS_PENDING) {
                Yii::app()->user->setFlash('error', 'Решение по этой заявки уже вынесено. Для изменения решения обратитесь к управляющему.');
                $this->redirect(array('view', 'id'=>$id));
            }
            $status = $_POST['status'];
            if (!intval($status) OR !in_array($status, array(Requests::STATUS_PENDING, Requests::STATUS_REFUSE, Requests::STATUS_RETRIEVE, Requests::STATUS_APPROVE, Requests::STATUS_DEAL))) {
                Yii::app()->user->setFlash('error', 'Ошибка, обратитесь к управляющему.');
                $this->redirect(array('view', 'id'=>$id));
            }
            $consider->author_id = Yii::app()->user->id;
            $consider->reason = $_POST['reason'];
            $consider->consider($status);
            if ($consider->save())
                switch ($consider->status_id) {
                    case Requests::STATUS_APPROVE:
                        Yii::app()->user->setFlash('success', "Вы одобрили заявку №$model->id. Клиент - $model->fullName");
                        break;
                    case Requests::STATUS_REFUSE:
                        Yii::app()->user->setFlash('warning', "Вы отклонили заявку №$model->id. Клиент - $model->fullName");
                        break;
                    case Requests::STATUS_DEAL:
                        Yii::app()->user->setFlash('success', "Вы совершили сделку по заявке №$model->id. Клиент - $model->fullName");
                        break;
                    case Requests::STATUS_PENDING:
                        Yii::app()->user->setFlash('success', "Вы поставили на рассмотрение заявку №$model->id. Клиент - $model->fullName");
                        break;
                    default:
                        Yii::app()->user->setFlash('success', 'Вы изменили решение по заявке. Спасибо.');
                        break;
                }
            else
                Yii::app()->user->setFlash('error', 'Ошибка, обратитесь к управляющему.');
        } else {
            $consider = new Decision;
            $consider->request_id = $id;
            $consider->organization_id = Yii::app()->user->organization_id;
            $consider->status_id = $_POST['status'];
            $consider->reason = $_POST['reason'];
            $consider->author_id = Yii::app()->user->id;
            if ($consider->save()) {
                switch ($consider->status_id) {
                    case Requests::STATUS_APPROVE:
                        Yii::app()->user->setFlash('success', "Вы одобрили заявку №$model->id. Клиент - $model->fullName");
                        break;
                    case Requests::STATUS_REFUSE:
                        Yii::app()->user->setFlash('warning', "Вы отклонили заявку №$model->id. Клиент - $model->fullName");
                        break;
                    default:
                        Yii::app()->user->setFlash('info', "Вы поставили на рассмотрение заявку №$model->id. Клиент - $model->fullName");
                        break;
                }
            } else {
                Yii::app()->user->setFlash('error', 'Ошибка, обратитесь к управляющему.');
            }
        }
        $this->redirect(array('view', 'id'=>$id));
    }


    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     *
     * @param integer $id the ID of the model to be loaded
     *
     * @return Requests the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Requests::model()->with(array(
            'commentCount',
            'comments',
            'comments.author',
            'comments.files',
//            'organizationDecision',
            'author',
            'files',
//            'statusHistoryOrganization.author',
//            'statusHistory.author',
            'author',
            'type',
           /* 'decisions' => array(
                'scopes' => array(
                    'organization' => Yii::app()->user->organization_id,
                ),
            ),*/
        ))->findByPk($id);
        if (is_null($model))
            throw new CHttpException(404, 'Такой заявки не существует.');
        $model->filtration();
        return $model;
    }


}