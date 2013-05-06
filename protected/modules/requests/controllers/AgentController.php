<?php

class AgentController extends DefaultController
{

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
            'ajaxOnly +checkFilters, upload',
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
                'roles' => array('agentManager'),
            ),
            array('deny',
                'users' => array('*')
            )
        );
    }

    public function actions()
    {
        return array(
            'update'       => 'requests.components.actions.UpdateAction',
            'delete'       => 'requests.components.actions.DeleteAction',
            'create'       => 'requests.components.actions.CreateAction',
            'checkfilters' => 'requests.components.actions.CheckFiltersAction',
            'comment'      => array(
                'class'=>'requests.components.actions.CommentAction',
                'scenario'=>'agent',
            ),
            'statistics'   => 'requests.components.actions.StatisticsAction',
        );
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
            'author',
            'files',
            'decisions'
        ))->findByPk($id);
        //TODO: Просмотр только своей заявки. Или завяки своей организации.
//        if (!Yii::app()->user->checkAccess('viewOwnRequest', array('author'=>$model->author->id)))
//            throw new CHttpException(400, 'Нет прав для выполнения данного дествия');
        if ($model === NULL)
            throw new CHttpException(404, 'Такой заявки не существует.');
//        echo var_dump(Organizations::model()->agent(Yii::app()->user->organization_id)->find());
//        echo var_dump(Yii::app()->user->organization_id);
//        Yii::app()->end();
        if (!in_array($model->created_by_user_id, CHtml::listData(Organizations::model()->agent(Yii::app()->user->organization_id)->find()->users, 'id', 'id')))
            throw new CHttpException(403, 'Данная заявка добавлена другим контрагентом. У вас нет прав для ее просмотра.');
        if (Yii::app()->user->roleId == Users::ROLE_AGENT_MANAGER AND $model->author_id != Yii::app()->user->id)
            throw new CHttpException(403, 'Данная заявка добавлена другим сотрудником вашей организации. У вас нет прав для ее просмотра.');

        return $model;
    }

}