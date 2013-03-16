<?php
/* @var $this RequestsController */
/* @var $data Requests */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
    <?php echo CHtml::encode($data->surname); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('patronymic')); ?>:</b>
    <?php echo CHtml::encode($data->patronymic); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
    <?php echo CHtml::encode(Requests::getNameByType($data->sex)); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
    <?php echo CHtml::encode($data->birthday); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('birthday_place')); ?>:</b>
    <?php echo CHtml::encode($data->birthday_place); ?>
    <br/>

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('citizenship')); ?>:</b>
	<?php echo CHtml::encode($data->citizenship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_seria')); ?>:</b>
	<?php echo CHtml::encode($data->passport_seria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_number')); ?>:</b>
	<?php echo CHtml::encode($data->passport_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_issue')); ?>:</b>
	<?php echo CHtml::encode($data->passport_issue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_issued')); ?>:</b>
	<?php echo CHtml::encode($data->passport_issued); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->created_by_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	*/ ?>

</div>