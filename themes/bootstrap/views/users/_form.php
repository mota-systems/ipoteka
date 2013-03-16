<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form TbActiveForm */
?>


<?php $form = $this->beginWidget('TbActiveForm', array(
    'id'                   => 'users-form',
    'enableAjaxValidation' => TRUE,
    'type'                 => 'horizontal',
    'inlineErrors'         => TRUE,
    'clientOptions'        => array(
        'validateOnChange' => TRUE,
        'validateOnSubmit' => TRUE,
//        'afterValidateAttribute' => 'js:function(form, attribute, data, hasError) {
////               var password = $("#users-form input#Users_password").parent();
////               var password_repeat = $("#users-form input#Users_password_repeat").parent();
////               if(password_repeat.hasClass("success"))
////                       passw
////               if(form_success) {
////                     $(\'#sendRequest\').show();
////                     $(\'#result\').show();
////               }
////               if(hasError) {
////                     $(\'#sendRequest\').hide();
////                     $(\'#result\').empty();
////               }
//        }',
    )
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->dropDownListRow($model, 'organization_id', Organizations::get_all_in_array()); ?>

<?php echo $form->textFieldRow($model, 'username', array('size' => 60, 'maxlength' => 100)); ?>

<?php echo $form->passwordFieldRow($model, 'password', array('size' => 60, 'maxlength' => 100)); ?>
<!--		--><?php //echo $form->passwordFieldRow($model,'password_repeat',array('size'=>60,'maxlength'=>100)); ?>

<?php echo $form->textFieldRow($model, 'phio', array('size' => 60, 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'work_phone', array('size' => 50, 'maxlength' => 50)); ?>

<div class='control-group'>
    <?php echo $form->labelEx($model, 'mobile_phone', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php $this->widget('CMaskedTextField', array(
        'model'       => $model,
        'attribute'   => 'mobile_phone',
        'mask'        => '+7-(999)-999-99-99',
        'placeholder' => '*',
    ));
        ?>
        <?php echo $form->error($model, 'mobile_phone')?>
    </div>
</div>

<?php echo $form->dropDownListRow($model, 'roleId', Roles::getRolesInArray()); ?>

<div class="controls">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'submit',
    'type'=>'primary',
    'label' => $model->isNewRecord ? 'Создать' : 'Сохранить'
)) ?>
</div>

<?php $this->endWidget(); ?>

