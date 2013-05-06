<?php

class FiltersController extends BaseController
{

    public $layout = '/layouts/column2';

    public function init()
    {
        $this->defaultAction = Yii::app()->user->isAdmin() ? 'admin' : 'index';
        Yii::app()->getModule('requests');
    }

    public function filters()
    {
        return array(
            'accessControl',
            'postOnly +delete, availableForOrganization',
            'ajaxOnly +availableForOrganization',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'expression' => "Yii::app()->user->isAdmin()",
            ),
            array('allow',
                'actions'    => array('create', 'update', 'index', 'delete'),
                'expression' => "Yii::app()->user->checkAccess('editFilter')",
            ),
            array('deny',
                'users' => array('*'),
            )
        );
    }

    public function actionAvailableForOrganization()
    {
        $organizationId = (int)$_POST['Filters']['organization_id'];
        $oldFilter = FALSE;
        if (isset($_POST['Filters']['id'])) {
            if (intval($id = $_POST['Filters']['id']))
                $oldFilter = Filters::model()->findByPk($id);
        }
        if (!$organizationId) {
            echo CJSON::encode(array(
                'no' => TRUE
            ));
            Yii::app()->end();
        }

        $exists = CHtml::listData(Filters::model()->findAll('organization_id=:org_id',
            array(':org_id' => $organizationId)), 'objectTypeId', 'objectType.type');
        $data = array_diff_key(ObjectType::getAllInArray(), $exists);
        if ($oldFilter) {
            if ($oldFilter->organization_id == $organizationId)
                $data[$oldFilter->objectTypeId] = $oldFilter->objectType->type;

        }
        $availableObjects = '';

        foreach ($data as $value => $name) {
            $availableObjects .= CHtml::tag('option', array('value' => $value), CHtml::encode($name), TRUE);
        }

        echo CJSON::encode(array(
            'availableObjects' => $availableObjects
        ));
        Yii::app()->end();
    }

    public function getAvailableObjects()
    {
        Yii::app()->getModule('requests');
        $exists = CHtml::listData(Filters::model()->findAllByAttributes(array('organization_id' => Yii::app()->user->organization_id)), 'objectTypeId', 'objectType.type');
        return array_diff(ObjectType::getAllInArray(), $exists);
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
        $scenario = Yii::app()->user->isAdmin() ? 'admin' : 'insert';
        $model = new Filters($scenario);
        $model->unsetAttributes();
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Filters'])) {
            $model->attributes = $_POST['Filters'];
            if (!Yii::app()->user->isAdmin())
                $model->organization_id = Yii::app()->user->organization_id;
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Фильтр успешно создан.');
                $this->redirect(array($this->defaultAction));
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
        $model->scenario = Yii::app()->user->isAdmin() ? 'admin' : 'insert';
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Filters'])) {
            $model->attributes = $_POST['Filters'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Фильтр успешно отредактирован.');
                $this->redirect(array($this->defaultAction));
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
        $this->loadModel($id)->delete();
            Yii::app()->user->setFlash('success', 'Фильтр успешно удален');

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(Yii::app()->request->isAjaxRequest){
            Yii::app()->end();
        }
        if (!isset($_GET['ajax'])) {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        if (Yii::app()->user->organizationType == Organizations::TYPE_BANK) {
            $criteria = array(
                'criteria' => array(
                    'condition' => 'organization_id=' . Yii::app()->user->organization_id
                ),
            );
        } else {
            $criteria = array();
        }
        $dataProvider = new CActiveDataProvider('Filters', $criteria);
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Filters('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Filters']))
            $model->attributes = $_GET['Filters'];

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
     * @return Filters the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Filters::model()->with('objectType')->findByPk($id);
        if ($model === NULL)
            throw new CHttpException(404, 'Такой страницы не существует.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     *
     * @param Filters $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'filters-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
