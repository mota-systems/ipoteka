<?php
/* @var $this CommentsController */
/* @var $data Comments */
?>

<div class="view">

    <?
    $formatter = new CDateFormatter('ru_ru');
    $dateCreated = $formatter->formatDateTime($data->date_created, 'long', 'short');
    ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->created_by_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($dateCreated); ?>
	<br />

</div>