<h3>Персональные данные заявителя</h3>
<h4>Идентификационная информация</h4>

<?php echo $form->textFieldRow($model, 'birthday_place', array('class' => 'span5', 'maxlength' => 250)); ?>

<?php echo $form->textFieldRow($model, 'citizenship', array('class' => 'span5', 'maxlength' => 250)); ?>

<?php echo $form->textFieldRow($model, 'passport_seria', array('class' => 'span5', 'maxlength' => 6)); ?>

<?php echo $form->textFieldRow($model, 'passport_number', array('class' => 'span5', 'maxlength' => 6)); ?>

<div class="control-group">
    <?php echo $form->labelEx($model, 'passport_issue', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php
        echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'     => $model,
            'attribute' => 'passport_issue',
            'language'  => 'ru',
            'options'   => array(
                'showAnim'        => 'slide',
                'dateFormat'      => 'dd.mm.yy',
                'changeMonth'     => 'true',
                'changeYear'      => 'true',
                'showButtonPanel' => 'true',
                'defaultDate'     => '-18y',
                'maxDate'         => '-18y',
                'yearRange'       => '-100:-17'
            ),
        ), TRUE);
        ?>
        <?php echo $form->error($model, 'passport_issue'); ?>
    </div>
</div>

<?php echo $form->textFieldRow($model, 'passport_issued', array('class' => 'span5', 'maxlength' => 255)); ?>

<h4>Адрес постоянной регистрации</h4>

<?php echo $form->textFieldRow($model, 'registration_index', array('class' => 'span5', 'maxlength' => 6)); ?>

<?php echo $form->textFieldRow($model, 'registration_country', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_area', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_edge', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_setllement', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_city', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_street', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_house', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_housing', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'registration_apartment', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->dropDownListRow($model, 'registration_period', CHtml::listData(Vocabulary::model()->category('registration')->column('period')->findAll(), 'id', 'title'), array('class' => 'span5')); ?>

<h4>Адрес фактического проживания</h4>

<?php echo $form->textFieldRow($model, 'live_index', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'live_country', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_area', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_edge', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_city', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_settlement', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_house', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_housing', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'live_apartment', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->dropDownListRow($model, 'live_period', CHtml::listData(Vocabulary::model()->category('registration')->column('period')->findAll(), 'id', 'title'), array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->dropDownListRow($model, 'live_status', CHtml::listData(Vocabulary::model()->category('live')->column('status')->findAll(), 'id', 'title'), array('class' => 'span5')); ?>

<h4>Образование</h4>

<?php echo $form->dropDownListRow($model, 'education', CHtml::listData(Vocabulary::model()->category('education')->findAll(), 'id', 'title'), array('class' => 'span5')); ?>

<h4>Контактная информация</h4>

<?php echo $form->textFieldRow($model, 'home_phone', array('class' => 'span5', 'maxlength' => 50)); ?>
<div class="control-group">
    <?php echo $form->labelEx($model, 'mobile_phone', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php
        $this->widget('CMaskedTextField', array(
            'model'       => $model,
            'attribute'   => 'mobile_phone',
            'mask'        => '+7-(999)-999-99-99',
            'placeholder' => '*',
        ));
        ?>
        <?php echo $form->error($model, 'mobile_phone'); ?>
    </div>
</div>

<h4>Семейное положение</h4>

<?php echo $form->dropDownListRow($model, 'marital_status', CHtml::listData(Vocabulary::model()->category('marital')->column('status')->findAll(), 'id', 'title'), array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'marital_dependency', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'martial_children', array('class' => 'span5')); ?>

<h4>Дополнительное контактное лицо</h4>

<?php echo $form->textFieldRow($model, 'contact_surname', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'contact_name', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'contact_patronymic', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'contact_home_phone', array('class' => 'span5', 'maxlength' => 50)); ?>

<h4>Данные супруги / супруга</h4>
<?
//@form TbActiveForm;
?>

<?php echo $form->textFieldRow($model, 'marital_surname', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'marital_name', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'marital_patronymic', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->radioButtonListRow($model, 'marital_sex', array(Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина'), array('class' => 'span5')); ?>

<div class="control-group">
    <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php
        echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'     => $model,
            'attribute' => 'marital_birthday',
            'language'  => 'ru',
            'options'   => array(
                'showAnim'        => 'slide',
                'dateFormat'      => 'dd.mm.yy',
                'changeMonth'     => 'true',
                'changeYear'      => 'true',
                'showButtonPanel' => 'true',
                'defaultDate'     => '-18y',
                'maxDate'         => '-18y',
                'yearRange'       => '-100:-17'
            ),
        ), TRUE);
        ?>
        <?php echo $form->error($model, 'marital_birthday'); ?>
    </div>
</div>

<?php echo $form->textFieldRow($model, 'marital_passport_seria', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'marital_passport_number', array('class' => 'span5')); ?>
<div class="control-group">
    <?php echo $form->labelEx($model, 'marital_passport_issue', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php
        echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'     => $model,
            'attribute' => 'marital_passport_issue',
            'language'  => 'ru',
            'options'   => array(
                'showAnim'        => 'slide',
                'dateFormat'      => 'dd.mm.yy',
                'changeMonth'     => 'true',
                'changeYear'      => 'true',
                'showButtonPanel' => 'true',
                'defaultDate'     => '-18y',
                'maxDate'         => '-18y',
                'yearRange'       => '-100:-17'
            ),
        ), TRUE);
        ?>
        <?php echo $form->error($model, 'marital_passport_issue'); ?>
    </div>
</div>

<?php echo $form->textFieldRow($model, 'marital_passport_issued', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'marital_work_phone', array('class' => 'span5', 'maxlength' => 20)); ?>
<div class="control-group">
    <?php echo $form->labelEx($model, 'marital_mobile_phone', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php
        $this->widget('CMaskedTextField', array(
            'model'       => $model,
            'attribute'   => 'marital_mobile_phone',
            'mask'        => '+7-(999)-999-99-99',
            'placeholder' => '*',
        ));
        ?>
        <?php echo $form->error($model, 'marital_mobile_phone'); ?>
    </div>
</div>
<?php echo $form->textFieldRow($model, 'marital_workplace', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'marital_work_post', array('class' => 'span5', 'maxlength' => 50)); ?>