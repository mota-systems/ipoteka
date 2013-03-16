<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 20:19
 * All rights are reserved
 */ ?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode(Organizations::getNameByType($data->file)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

</div>