<?php
/* @var $this RequestsController */
/* @var $model Requests */
/* @var $form TbActiveForm */
?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'summ',
        'initialFee',
        'type.type',
        'age',
    ),
))?>
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'                     => 'requests-form',
    'enableAjaxValidation'   => TRUE,
    'type'                   => 'horizontal',
    'enableClientValidation' => FALSE,
    'inlineErrors'           => TRUE,
)); ?>
    <p class="note">Поля, омеченные <span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model, 'birthday_place', array('size' => 60, 'maxlength' => 250)); ?>

    <?php echo $form->textFieldRow($model, 'citizenship', array('size' => 60, 'maxlength' => 250)); ?>

    <?php echo $form->textFieldRow($model, 'passport_seria'); ?>

    <?php echo $form->textFieldRow($model, 'passport_number'); ?>

    <div class='control-group'>
        <?php echo $form->labelEx($model, 'passport_issue', array('class' => 'control-label')); ?>
        <div class='controls'>
            <?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'     => $model,
            'attribute' => 'passport_issue',
            'value'     => '',
            'language'  => 'ru',
            'options'   => array(
                'showAnim'        => 'fold',
                'dateFormat'      => 'dd.mm.yy',
                'changeMonth'     => 'true',
                'changeYear'      => 'true',
                'showButtonPanel' => 'true',
                'maxDate'         => '+0',
                'yearRange'       => '-50:+0',
            ),
        ), TRUE); ?>
            <?php echo $form->error($model, 'passport_issue')?>
        </div>
    </div>
    <?php echo $form->textFieldRow($model, 'passport_issued', array('size' => 60, 'maxlength' => 255)); ?>

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
    <div class='row buttons'>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'label'      => 'Добавить клиента',
        'type'       => 'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'       => 'large', // null, 'large', 'small' or 'mini'
    )); ?>
    </div>

    <?php $this->endWidget(); ?>

