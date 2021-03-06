<?php

class DefaultController extends BaseController
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $documentsModel;
    public $availableToConsider = TRUE;

    public function actionFile($id)
    {
        $this->disableProfilers();
        $model = CommentsFiles::model()->with('comment')->findByPk($id);
        $request = $this->loadModel($model->comment->request_id);
        $file = Yii::getPathOfAlias($model->savePath) . DIRECTORY_SEPARATOR . $model->file;
        if (ob_get_level()) {
            ob_end_clean();
        }
        Yii::app()->request->sendFile($model->name, file_get_contents($file));
    }

    public function setDocumentsModel($documentsModel)
    {
        $this->documentsModel = $documentsModel;
    }

    public function getDocumentsModel()
    {
        return $this->documentsModel;
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

        $this->render('/general/index', array(
            'model' => $model,
        ));
        /*$dataProvider=new CActiveDataProvider('Requests');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));*/
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
     * Performs the AJAX validation.
     *
     * @param Requests $model the model to be validated
     */
    public function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'requests-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}