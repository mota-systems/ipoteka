<?php

class AdminController extends DefaultController
{

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete, consider', // we only allow deletion via POST request
            'ajaxOnly + checkFilters, upload, consider',
        );
    }

    public function actions()
    {
        return array(
            'update'       => 'requests.components.actions.UpdateAction',
            'delete'       => 'requests.components.actions.DeleteAction',
            'create'       => 'requests.components.actions.CreateAction',
            'checkfilters' => 'requests.components.actions.CheckFiltersAction',
            'statistics'   => 'requests.components.actions.StatisticsAction',
            'comment'      => array(
                'class'    => 'requests.components.actions.CommentAction',
                'scenario' => 'agent',
            ),
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
                'roles' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
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
        $model = Requests::model()->with('decisions', 'commentCount', 'comments', 'author', 'files')->findByPk($id);
        if (is_null($model))
            throw new CHttpException(404, 'Такой заявки не существует.');
        return $model;
    }


}