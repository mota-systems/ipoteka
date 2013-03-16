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

    /**
     * Displays a particular model.
     *
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        Yii::app()->user->setFlash('success', 'Ваша заявка добавлена в систему. Спасибо.');

        $model = Requests::model()->findByPk($id, array(
            'with' => array(
                'decisions' => array(
                    'scopes' => array(
                        'organization' => Yii::app()->user->organization_id,
                    ),
                ),
            )
        ));
        if ($model->decisions)
            $this->availableToConsider = FALSE;
        $this->render('view', array(
            'model' => $model,
        ));
    }

    public function actionConsider($id)
    {
        $model = Requests::model()->findByPk($id, array(
            'with' => array(
                'decisions' => array(
                    'scopes' => array(
                        'organization' => Yii::app()->user->organization_id,
                    ),
                ),
            )
        ));
        if (is_null($model))
            throw new HttpException('Такой заявки не существует', 404);
        $consider = $model->decisions;
        if ($consider) {
            if (!Yii::app()->user->checkAccess('overrideConsiderRequest'))
                throw new HttpException('Решение по этой заявки уже вынесено. Для изменения решения обратитесь к управляющему.', 403);
            $consider = Decision::model()->findByPk(array('request_id' => $id, 'organization_id' => Yii::app()->user->organization_id));
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
                $message = "Вы одобрили заявку №$model->id. Клиент - $model->fullName";
            else
                $message = "Вы отклонили заявку №$model->id. Клиент - $model->fullName";
            Yii::app()->user->setFlash('success', $message);
        } else {
            Yii::app()->user->setFlash('error', CHtml::errorSummary($consider));
        }
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
        if ($filter->min_summ > $data['summ']) {
            $result = FALSE;
            $message = "Минимальная сумма $filter->min_summ";
        }
        if ($filter->max_summ < $data['summ']) {
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
        $model = $this->loadModel($id, 'continueCreate');
        if ($model->status != Requests::STATUS_DRAFT AND !Yii::app()->user->checkAccess('editRequest')) {
            throw new CHttpException(403, 'Эта заявка уже находится на рассмотрении. Её больше нельзя редактировать.', 400);
        }

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Requests'])) {
            $model->attributes = $_POST['Requests'];
            $model->status = Requests::STATUS_NEW;
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Ваша заявка добавлена в систему. Спасибо.');
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
            $model->attributes = $_GET['Requests'];

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
    public function loadModel($id, $scenario = '')
    {
        if (!Yii::app()->user->checkAccess('viewRequest'))
            throw new CHttpException(400, 'Нет прав для выполнения данного дествия');
        if ($scenario) {
            $model = Requests::model()->with('commentCount', 'author', 'files')->findByPk($id);
        } else {
            $model = Requests::model()->findByPk($id);
        }
        if ($model === NULL)
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