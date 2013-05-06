<?php
/* @var $this CommentsController */
/* @var $dataProvider CActiveDataProvider */
/* @var $form TbActiveForm */

/* $this->breadcrumbs=array(
  'Comments',
  );

  $this->menu=array(
  array('label'=>'Create Comments', 'url'=>array('create')),
  array('label'=>'Manage Comments', 'url'=>array('admin')),
  );
 */
?>
<div class='comments'>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'template' => '{items} {pager}',
        'itemView' => '/general/comments/_view',
        'emptyText' => 'Нет комментариев.',
        'pager'=>array(
            'header'=>'',
            'cssFile'=>false,
            'firstPageLabel'=>'<<',
            'lastPageLabel'=>'>>',
            'prevPageLabel'=>'<',
            'nextPageLabel'=>'>',
    )
    ));
    ?>
    <div class="form">

        <?php
        $form = $this->beginWidget('TbActiveForm', array(
            'id' => 'comments-form',
            'enableAjaxValidation' => FALSE,
            'action' => '/requests/' . Yii::app()->getModule('requests')->defaultController . '/comment/id/' . $request_id,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
        ?>

        <?php echo $form->hiddenField($model, 'recipient_id', array('value' => $recipient_id)); ?>

        <?php echo $form->textArea($model, 'comment', array('size' => 60, 'maxlength' => 500)); ?>
        <div class='clearfix'></div>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'pencil white',
            'label' => 'Написать',
//            'url'        => '/requests/bank/comment/id/' . $request_id,
        ));
        ?>
        <a class='newfile-trigger' href='#'><i class='icon icon-folder-open'></i> Прикрепить файл</a>
        <span class='newfile-filename-text'></span>

        <?php
        $this->widget('CMultiFileUpload', array(
            'model' => $model,
            'max' => 5,
            'attribute' => 'formFiles',
            'accept' => 'doc|png|jpg|jpeg|gif|xls|pdf|txt|docx|xlsx',
            'htmlOptions' => array(
                'class' => 'newfile-input'
            ),
            /* 'options'   => array(
              'onFileSelect'    => 'function(e, v, m){ alert("onFileSelect - "+v) }',
              'afterFileSelect' => 'function(e, v, m){ alert("afterFileSelect - "+v) }',
              'onFileAppend'    => 'function(e, v, m){ alert("onFileAppend - "+v) }',
              'afterFileAppend' => 'function(e, v, m){ alert("afterFileAppend - "+v) }',
              'onFileRemove'    => 'function(e, v, m){ alert("onFileRemove - "+v) }',
              'afterFileRemove' => 'function(e, v, m){ alert("afterFileRemove - "+v) }',
              ), */
        ));
        ?>
        <?php $this->endWidget(); ?>
    </div>
    <!-- form -->
</div>