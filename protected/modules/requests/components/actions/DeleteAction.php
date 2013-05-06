<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 23.03.13
 * Time: 16:33
 * All rights are reserved
 */

class DeleteAction extends CAction
{

    public function run($id)
    {
        if(!Yii::app()->user->checkAccess('deleteRequest'))
            throw new CHttpException(403, 'У вас нет прав для удаления заявки.');
        $model=$this->controller->loadModel($id);
        foreach($model->statusHistory as $one){
            $one->delete();
        }
        foreach($model->comments as $one){
            $one->delete();
        }
        foreach($model->decisions as $one){
            $one->delete();
        }
        foreach($model->files as $one){
            $one->delete();
        }
        $model->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->controller->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }
}