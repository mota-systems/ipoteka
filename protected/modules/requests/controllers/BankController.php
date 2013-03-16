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
            'postOnly + consider', // we only allow deletion via POST request
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

    /**
     * Displays a particular model.
     *
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {

        $model = $this->loadModel($id);
        if ($model->organizationDecision AND !Yii::app()->user->checkAccess('overrideConsider'))
            $this->availableToConsider = FALSE;
        $this->render('view', array(
            'model' => $model,
        ));
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
            $consider = Decision::model()->findByAttributes(array('request_id' => $id, 'organization_id' => Yii::app()->user->organization_id));
            $consider->status_id = $_POST['status'];
            $consider->author_id = Yii::app()->user->id;
        } else {
            $consider = new Decision;
            $consider->request_id = $id;
            $consider->organization_id = Yii::app()->user->organization_id;
            $consider->status_id = $_POST['status'];
            $consider->author_id = Yii::app()->user->id;
        }
        if ($consider->save()) {
            if ($consider->status_id == Requests::STATUS_APPROVE)
                Yii::app()->user->setFlash('success', "Вы одобрили заявку №$model->id. Клиент - $model->fullName");
            else
                Yii::app()->user->setFlash('warning',"Вы отклонили заявку №$model->id. Клиент - $model->fullName");
        } else {
            Yii::app()->user->setFlash('error', CHtml::errorSummary($consider));
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
        $model = Requests::model()->with('commentCount', 'author', 'files', 'comments')->findByPk($id);
        if ($model === NULL)
            throw new CHttpException(404, 'Такой заявки не существует.');
        return $model;
    }


}