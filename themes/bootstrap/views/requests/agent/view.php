<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
    "Заявка №$model->id",
);
$this->documentsModel = $model;
$this->widget('bootstrap.widgets.TbAlert', array(
    'block'  => FALSE, // display a larger alert block?
    'fade'   => FALSE, // use transitions?
    'alerts' => array( // configurations per alert type
        'success' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'error'   => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'warning' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'info'    => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
    ),
));
?>

<h1><?php echo $model->fullName; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'summ',
        'initialFee',
        'type.type',
        'age'
    ),
));
Yii::app()->clientScript->registerScript('search', "
$('.full-button').click(function(){
$('.internal-view').toggle();
return false;
});
");?>
<? if (!empty($model->comment)) { ?>
    <h3>Важная информация:</h3>
    <p><?= $model->comment ?></p>
<? } ?>
<? $this->widget('bootstrap.widgets.TbButton', array(
    'icon'        => 'folder-open',
    'type'        => 'info',
    'label'       => 'Полная заявка',
    'url'         => '#',
    'htmlOptions' => array(
        'class' => 'full-button',
    ),
));?>

<div class="internal-view" style="display:none">
    <? echo $this->renderPartial('/general/_internalView', array('model' => $model), TRUE) ?>
</div>

<div id='considers'>
    <?php echo $this->renderPartial('/general/history/_history', array('model' => $model), TRUE) ?>
</div>

<div id='comments'>
    <? $this->renderPartial('/general/comments/index', array('model'=>$model));?>

</div>
