<?
/* @var $this RequestsController */
/* @var $model Requests */
/* @var $form TbActiveForm */
?>


<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'requests-form',
    'enableAjaxValidation' => TRUE,
    'type' => 'horizontal',
    'enableClientValidation' => FALSE,
    'inlineErrors' => TRUE,
    'clientOptions' => array(
        'validateOnChange' => TRUE,
        'validateOnSubmit' => TRUE,
        'validateOnType' => FALSE,
        'afterValidateAttribute' => 'js:function(form,attribute,data,hasError){first_request(form,attribute, data, hasError)}'
    )
        ));
?>

<div class='pull-left request-form'>
    <h3>Новая заявка</h3>
    <p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model, 'surname', array('size' => 60, 'maxlength' => 100)); ?>

    <?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 100)); ?>

    <?php echo $form->textFieldRow($model, 'patronymic', array('size' => 60, 'maxlength' => 100)); ?>

    <?php echo $form->dropDownListRow($model, 'sex', array(0 => 'Выберите пол', Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина'), array('options' => array('0' => array('disabled' => TRUE)))); ?>

    <?php echo $form->textFieldRow($model, 'objectCost', array('size' => 60, 'maxlength' => 100)) ?>
    <!--<?php echo $form->textFieldRow($model, 'initialFee') ?>-->


    <div class="control-group">
        <label class="control-label required" for="Requests_summ">П/взнос</label>
            <div class="controls">
                <div class="input-append">
                    <input name="Requests[initialFee]" id="Requests_initialFee" type="text"/>
                    <span class="add-on text-center request-percent">%</span>
                </div>
                <span class="help-inline error" id="Requests_initialFee_em_" style="display: none"/>
            </div>
    </div>

    <div class="control-group no-validation">
        <label class="control-label" for="Requests_summ">Сумма ипотеки</label>

        <div class="controls">

            <span class="uneditable-input request-summ"></span>
            <span class="help-inline error" id="Requests_summ_em_"></span>
        </div>
    </div>


    <?php echo $form->dropDownListRow($model, 'objectTypeId', ObjectType::getAllInArray(), array('prompt' => 'Выберите тип объекта:')) ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label')); ?>
        <div class='controls'>
            <?php
            echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'birthday',
                'language' => 'ru',
                'options' => array(
                    'showAnim' => 'slide',
                    'dateFormat' => 'dd.mm.yy',
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                    'showButtonPanel' => 'true',
                    'defaultDate' => '-18y',
                    'maxDate' => '-18y',
                    'yearRange' => '-100:-17'
                ),
                    ), TRUE);
            ?>
            <?php echo $form->error($model, 'birthday'); ?>
        </div>
    </div>

    <div class="control-group no-validation">
        <label class="control-label">История данных</label>

        <div class="controls request-data-history">
            <a class='btn btn-small disabled' href='#'><i class='icon icon-arrow-left'></i></a>
            <a class='btn btn-small disabled' href='#'><i class='icon icon-arrow-right'></i></a>
            <a class='btn btn-small disabled trashnya' href='#'><i class='icon icon-trash'></i></a>
            <div class='clearfix'></div>
            <span></span>
        </div>
    </div>

    <div class="control-group no-validation">

        <div class="controls">
            <?
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'ajaxSubmit',
                'url' => array('checkFilters'),
                'icon' => 'icon-share-alt',
                'label' => 'Сделать запрос',
                'type' => '',
                //'size'        => 'large',
                'disabled' => TRUE,
                'htmlOptions' => array(/* 'style' => 'display:none', */
                    'id' => 'sendRequest',
                    'return' => TRUE),
                'ajaxOptions' => array(
                    'update' => '#result'
                ),
            ));
            ?>
        </div>
    </div>
</div>

<div class='pull-left' id='result'></div>
<div class='clearfix'></div>

<?php $this->endWidget(); ?>
