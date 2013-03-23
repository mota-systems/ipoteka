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
            'ajaxOnly + consider',
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
        );
    }

    public function actionConsider($id)
    {
        $model = $this->loadModel($id);
        $consider = $model->organizationDecision;
        if ($consider) {
            if (!Yii::app()->user->checkAccess('overrideConsiderRequest')) {
                Yii::app()->user->setFlash('error', 'Решение по этой заявки уже вынесено. Для изменения решения обратитесь к управляющему.');
                Yii::app()->end(200);
            }
            $status = $_POST['status'];
            if (!intval($status) OR !in_array($status, array(Requests::STATUS_PENDING, Requests::STATUS_REFUSE, Requests::STATUS_RETRIEVE, Requests::STATUS_APPROVE))) {
                Yii::app()->user->setFlash('error', 'Ошибка, обратитесь к управляющему.');
                Yii::app()->end(200);
            }
            $decision = Decision::model()->request($id)->organization(Yii::app()->user->organization_id)->find();
            $decision->consider($status);
            if ($decision->save())
                Yii::app()->user->setFlash('success', 'Вы изменили решение по заявке. Спасибо.');
            else
                Yii::app()->user->setFlash('error', CHtml::errorSummary($decision));

            Yii::app()->end(200);
//            $consider->author_id = Yii::app()->user->id;
        } else {
            $consider = new Decision;
            $consider->request_id = $id;
            $consider->organization_id = Yii::app()->user->organization_id;
            $consider->status_id = $_POST['status'];
//            $consider->author_id = Yii::app()->user->id;
        }
        //TODO: Обернуть в транзакию принятие решения по заявке
        if ($consider->save()) {
            if ($model->status_id != Requests::STATUS_PENDING) {
                $model->status_id = Requests::STATUS_PENDING;
                $model->save(FALSE, array('status_id'));
            }
            if ($consider->status_id == Requests::STATUS_APPROVE)
                Yii::app()->user->setFlash('success', "Вы одобрили заявку №$model->id. Клиент - $model->fullName");
            elseif ($consider->status_id == Requests::STATUS_REFUSE)
                Yii::app()->user->setFlash('warning', "Вы отклонили заявку №$model->id. Клиент - $model->fullName");
            else
                Yii::app()->user->setFlash('info', "Вы поставили на рассмотрение заявку №$model->id. Клиент - $model->fullName");
        } else {
            Yii::app()->user->setFlash('error', 'Пиздец.');
        }
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
        // TODO: Фильтрация заявок через фильтры банка.
        $model = Requests::model()->with(array(
            'commentCount',
            'author',
            'files',
            'decisions' => array(
                'scopes' => array(
                    'organization' => Yii::app()->user->organization_id,
                ),
            ),
        ))->findByPk($id);
        if ($model === NULL)
            throw new CHttpException(404, 'Такой заявки не существует.');
        return $model;
    }


}