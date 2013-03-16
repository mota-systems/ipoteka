<?php
/* @var $this FiltersController */
/* @var $data Filters */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_id')); ?>:</b>
	<?php echo CHtml::encode($data->organization_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fee')); ?>:</b>
	<?php echo CHtml::encode($data->fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interest_rate')); ?>:</b>
	<?php echo CHtml::encode($data->interest_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_period')); ?>:</b>
	<?php echo CHtml::encode($data->min_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_period')); ?>:</b>
	<?php echo CHtml::encode($data->max_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_borrower_age')); ?>:</b>
	<?php echo CHtml::encode($data->min_borrower_age); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('max_borrower_age')); ?>:</b>
	<?php echo CHtml::encode($data->max_borrower_age); ?>
	<br />

	*/ ?>

</div>