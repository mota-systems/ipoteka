<?php

class OrganizationsController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $defaultAction = 'admin';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
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
                'expression' => 'Yii::app()->user->checkAccess("adminOrganization")',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }


    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Organizations;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Organizations'])) {
            $model->attributes = $_POST['Organizations'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Организация  {$model->name} успешно создана.");
                Yii::app()->cache->delete(Organizations::ALL_IN_ARRAY_CACHE);
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Organizations'])) {
            $model->attributes = $_POST['Organizations'];
            if ($model->save()) {
                Yii::app()->cache->delete(Organizations::ALL_IN_ARRAY_CACHE);
                Yii::app()->user->setFlash('success', "Организация {$model->name} успешно отредактирована.");
                $this->redirect(array('admin'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $this->render('view', array('model' => $model));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     *
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $model = $this->loadModel($id);
        $name = $model->name;
        $model->delete();
        Yii::app()->cache->delete(Organizations::ALL_IN_ARRAY_CACHE);
        Yii::app()->user->setFlash('success', "Организация $name успешно удалена.");
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }


    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Organizations('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Organizations']))
            $model->attributes = $_GET['Organizations'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     *
     * @param integer $id the ID of the model to be loaded
     *
     * @return Organizations the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Organizations::model()->findByPk($id);
        if ($model === NULL)
            throw new CHttpException(404, 'Такой организации не существует.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     *
     * @param Organizations $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'organizations-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
