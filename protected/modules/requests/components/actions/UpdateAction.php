<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 23.03.13
 * Time: 16:33
 * All rights are reserved
 */

class UpdateAction extends CAction
{

    public function run($id, $page=1)
    {
        $model = $this->controller->loadModel($id);
        $model->scenario = 'continueCreate.page' . $page;
        if ($model->status_id != Requests::STATUS_DRAFT AND !Yii::app()->user->checkAccess('editRequest')) {
            throw new CHttpException(403, 'Эта заявка уже находится на рассмотрении. У вас нет прав для редактирования этой заявки. Обратитесь к администрации.', 400);
        }
        // Uncomment the following line if AJAX validation is needed
        $this->controller->performAjaxValidation($model);

        if (isset($_POST['Requests'])) {
            $model->attributes = $_POST['Requests'];
            if (isset($_POST['submitCreate'])) {
                $model->status_id = Requests::STATUS_NEW;
                if ($model->save())
                    $this->controller->redirect(array('view', 'id' => $model->id));
            } else {
                if($model->save())
                    $this->controller->redirect(array('update', 'id'=>$model->id, 'page'=>++$page));
            }


        }
        $this->controller->render('/general/update', array(
            'model' => $model,
            'page'=>$page
        ));
    }
}