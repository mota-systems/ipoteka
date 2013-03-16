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


    public function actionUpload()
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = FALSE;
        $this->renderPartial('uploadDocument', NULL, FALSE, TRUE);
    }


    public function actionCheckFilters()
    {
        $data = $_POST['Requests'];
        $organizations = Organizations::model()->banks()->with(array(
            'filters' => array(
                'scopes' => array(
                    'objectTypeId' => 1
                )
            )))->findAll();
        $results = array();
        foreach ($organizations as $bank) {
            $filters = $bank->filters;
            if (!count($filters)) {
                $results[$bank->name] = 'Не дает займы по выбранному типу объекта';
            } else {
                foreach ($filters as $filter) {
                    $results[$bank->name] = $this->checkIt($filter, $data);
                }
            }
        }
        $this->renderPartial('filtersResponse', array('filters' => $results));
    }

    private function checkIt($filter, $data)
    {
        if (is_null($filter))
            return 'Не дает займы по выбранному типу объекта';
        $result = TRUE;
        if ($filter->min_summ > $data['objectCost']) {
            $result = FALSE;
            $message = "Минимальная сумма $filter->min_summ";
        }
        if ($filter->max_summ < $data['objectCost']) {
            $result = FALSE;
            $message = "Максимальная сумма $filter->max_summ";
        }
        return $result ? $result : $message;
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Requests('firstCreate');
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Requests'])) {
            $model->attributes = $_POST['Requests'];
            if ($model->save()) {
                $this->redirect(array('update', 'id' => $model->id));
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
     *
     * @throws CHttpException
     * @return void
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $model->scenario = 'continueCreate';
        if ($model->status != Requests::STATUS_DRAFT AND Yii::app()->user->checkAccess('editRequest')) {
            throw new CHttpException(403, 'Эта заявка уже находится на рассмотрении. У вас нет прав для редактирования этой заявки. Обратитесь к администрации.', 400);
        }

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Requests'])) {
            $model->attributes = $_POST['Requests'];
            $model->status = Requests::STATUS_NEW;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $model = new Requests('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Requests']))
//            $model->attributes = $_GET['Requests'];
            $model->setAttributes($_GET['Requests'], FALSE);

        $this->render('index', array(
            'model' => $model,
        ));
        /*$dataProvider=new CActiveDataProvider('Requests');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));*/
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


    /**
     * Performs the AJAX validation.
     *
     * @param Requests $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'requests-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}