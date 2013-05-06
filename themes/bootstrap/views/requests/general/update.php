<?php
/* @var $this RequestsController */
/* @var $model Requests */

/* $this->breadcrumbs=array(
  'Заявки'=>array('index'),
  $model->name=>array('view','id'=>$model->id),
  'Добавить клиента',
  ); */

/* $this->menu=array(
  array('label'=>'List Requests', 'url'=>array('index')),
  array('label'=>'Create Requests', 'url'=>array('create')),
  array('label'=>'View Requests', 'url'=>array('view', 'id'=>$model->id)),
  array('label'=>'Manage Requests', 'url'=>array('admin')),
  );
 */
?>

    <h2><?= $model->fullName ?></h2>
<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'summ',
        array(
            'name'  => 'initialFee',
            'value' => "$model->initialFee (" . number_format($model->initialFee / $model->summ * 100, 2, ',', ' ') . "%)",
        ),

        'type.type',
        'age',
    ),
))
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'                     => 'requests-form',
    'enableAjaxValidation'   => TRUE,
    'type'                   => 'horizontal',
    'enableClientValidation' => FALSE,
    'inlineErrors'           => TRUE,
));
?>
<?php echo $this->renderPartial('/general/update/page' . $page, array('model' => $model, 'form' => $form)); ?>
    <div class='control-group'>
        <div class='controls'>
            <?php
            $settings = array(
                'icon'       => 'arrow-right white',
                'buttonType' => 'submit',
                'label'      => 'Продолжить',
                'type'       => 'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            );
            if ($page == 6)
                $settings['htmlOptions'] = array('name' => 'submitUpdate');
            if ($page != 1)
                $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Назад',
                    'type'       => 'primary',
                    'icon'       => 'arrow-left white',
                    'url'=>'/requests/'.Yii::app()->getModule('requests')->defaultController.'/update/id/'.$model->id.'/page/'.($page-1)
                ));
            $this->widget('bootstrap.widgets.TbButton', $settings);
            ?>
        </div>
    </div>
<? $this->endWidget(); ?>