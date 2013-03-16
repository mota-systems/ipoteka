<?php
/* @var $this CommentsController */
/* @var $dataProvider CActiveDataProvider */
/* @var $form TbActiveForm */

/*$this->breadcrumbs=array(
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comments', 'url'=>array('create')),
	array('label'=>'Manage Comments', 'url'=>array('admin')),
);
*/
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView'     => Yii::app()->theme->viewPath . '/comments/_view',
    'emptyText'    => 'Нет комментариев.'
));?>
<? if (Yii::app()->user->hasFlash('commentSendOk')) {
    echo Yii::app()->user->getFlash('commentSendOk');
}?>
<div class="form">

    <?php $form = $this->beginWidget('TbActiveForm', array(
    'id'                   => 'comments-form',
    'enableAjaxValidation' => FALSE,
    )); ?>

    <?php echo $form->hiddenField($model, 'recipient_id', array('value' => $recipient_id));?>

    <?php echo $form->textFieldRow($model, 'comment', array('size' => 60, 'maxlength' => 500)); ?>
    <div class="control-group">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type'       => 'small',
        'label'      => 'Оставить комментарий',
        'url'        => '/comments/add',
    )); ?>
    </div>
    <?php $this->endWidget(); ?>

</div><!-- form -->
