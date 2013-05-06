<?php

class UsersController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '/layouts/column2';
    public $defaultAction = 'admin';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete, rolesForOrganization', // we only allow deletion via POST request
            'ajaxOnly +rolesForOrganization',
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
                'actions' => array('view'),
                'users'   => array('@'),
            ),
            array('allow',
                'actions'    => array('rolesForOrganization'),
                'expression' => 'Yii::app()->user->isAdmin()',
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'delete', 'admin'),
                'roles'   => array(Users::ROLE_ADMIN, Users::ROLE_BANK_ADMIN, Users::ROLE_AGENT_ADMIN),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionRolesForOrganization()
    {
        $organizationId = (int)$_POST['Users']['organization_id'];

        if (!$organizationId) {
            echo CJSON::encode(array(
                'no' => TRUE
            ));
            Yii::app()->end();
        }
        $organization = Organizations::model()->findByPk($organizationId);
        if (is_null($organization))
            Yii::app()->end(404);
        $roles = $this->getRoles($organization->type);
        $options = '';
        foreach ($roles as $id => $role) {
            $options .= CHtml::tag('option', array('value' => $id), $role, TRUE);
        }
        echo CJSON::encode(array(
            'roles' => $options
        ));
        Yii::app()->end();
    }

    public function getRoles($organizationType = NULL)
    {
        switch ($organizationType ? $organizationType : Yii::app()->user->organizationType) {
            case Organizations::TYPE_ADMIN:
                $roles = CHtml::listData(Roles::model()->findAllByAttributes(array('organizationType' => Organizations::TYPE_ADMIN)), 'id', 'title');
                break;
            case Organizations::TYPE_AGENT:
                $roles = CHtml::listData(Roles::model()->findAllByAttributes(array('organizationType' => Organizations::TYPE_AGENT)), 'id', 'title');
                break;
            case Organizations::TYPE_BANK:
                $roles = CHtml::listData(Roles::model()->findAllByAttributes(array('organizationType' => Organizations::TYPE_BANK)), 'id', 'title');
                break;
            default:
                $roles = array();
        }
        return $roles;
    }

    /**
     * Displays a particular model.
     *
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Users('register');

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Пользователь {$model->phio} успешно добавлен.");
                $this->redirect(array('view', 'id' => $model->id));
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
        $oldPassword = $model->password;
        $model->password = '';

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            if (empty($model->password)) {
                $model->password = $oldPassword;
                $model->password_changed = FALSE;
            } else {
                $model->password_changed = TRUE;
            }
            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Пользователь {$model->phio} успешно отредактирован.");
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
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
        if ($model->id == Yii::app()->user->id)
            throw new CHttpException(403, 'Невозможно удалить свою учетную запись');
        $model->delete();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }


    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = Users::model()->with('organization');
        $model->scenario = 'search';
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Users']))
            $model->attributes = $_GET['Users'];

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
     * @return Users the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Users::model()->with('organization', 'roles')->findByPk($id);
        if ($model === NULL)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     *
     * @param Users $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
