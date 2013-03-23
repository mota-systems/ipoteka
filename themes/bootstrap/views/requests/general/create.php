<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs=array(
	'Заявки'=>array('index'),
	'Новая заявка',
);
    ?>


<?php echo $this->renderPartial('/general/_newForm', array('model'=>$model)); ?>