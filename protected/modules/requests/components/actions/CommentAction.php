<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 23.03.13
 * Time: 16:33
 * All rights are reserved
 */

class CommentAction extends CAction
{

    public $scenario;

    public function run($id)
    {
        if (!isset($_POST['Comments'])) {
            throw new CHttpException(400, 'Ошибка комментирования.');
        }
        $model = $this->controller->loadModel($id);
        $comment = new Comments($this->scenario);
        $comment->attributes = $_POST['Comments'];
        $comment->request_id = $id;
        if ($comment->save()) {
            Yii::app()->user->setFlash('success', 'Ваш комментарий добавлен');
        } else
//            Yii::app()->user->setFlash('error', CHtml::errorSummary($comment));
            Yii::app()->user->setFlash('error', 'Ошибка создания комментария. Попробуйте позже.');
        $this->controller->redirect(array('/requests/' . Yii::app()->getModule('requests')->defaultController . '/view', 'id' => $id));

    }

}