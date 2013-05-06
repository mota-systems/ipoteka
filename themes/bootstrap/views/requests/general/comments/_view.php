
<?php
/* @var $this CommentsController */
/* @var $data Comments */
?>
<div class='comment-each'>
    <?
    $formatter = new CDateFormatter('ru_ru');
    $dateCreated = $formatter->formatDateTime($data->date_created, 'long', 'short');
    ?>
    <strong><?php echo CHtml::encode($data->author->phio); ?></strong>
    <span class='comment-date'><?php echo CHtml::encode($dateCreated); ?></span>
    <br/>
    <?php echo CHtml::encode($data->comment); ?>
    <br/>
    <!--<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>-->
    <div class='clearfix'></div>
    <? if ($data->files) { ?>
        <div class='comment-files'>
            <span>Прикреплённые файлы</span><br/>
            <? foreach ($data->files as $file) { ?>
                <i class='icon icon-file'></i><a href='/requests/<?=Yii::app()->getModule('requests')->defaultController?>/file/id/<?=$file->id?>'> <?=$file->name?></a><br/>
            <? } ?>
        </div>
    <? } ?>
</div>