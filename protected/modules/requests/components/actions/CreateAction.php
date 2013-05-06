<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 23.03.13
 * Time: 16:33
 * All rights are reserved
 */

class CreateAction extends CAction
{

    public function run()
    {
        $model = new Requests('firstCreate');
        // Uncomment the following line if AJAX validation is needed
        $this->controller->performAjaxValidation($model);

        if (isset($_POST['Requests'])) {
            $model->attributes = $_POST['Requests'];
            if ($model->save()) {
                $this->controller->redirect(array('update', 'id' => $model->id));
            }
        }

        $this->controller->render('/general/create', array(
            'model' => $model,
        ));
    }

}