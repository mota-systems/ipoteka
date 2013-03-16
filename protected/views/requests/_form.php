<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'requests-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'objectTypeId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'surname',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'patronymic',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'objectCost',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'initialFee',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sex',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'birthday',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'birthday_place',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'home_phone',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'mobile_phone',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'citizenship',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'passport_seria',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'passport_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'passport_issue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'passport_issued',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_index',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'registration_country',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_area',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_edge',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_setllement',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_city',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_street',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_house',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_housing',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_apartment',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'registration_period',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'live_index',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'live_country',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_area',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_edge',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_city',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_settlement',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_house',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_housing',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_apartment',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_period',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'live_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'education',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_dependency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'martial_children',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_surname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'marital_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'marital_patronymic',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'marital_sex',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_birthday',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_passport_seria',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_passport_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_passport_issue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_passport_issued',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'marital_work_phone',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'marital_mobile_phone',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'marital_workplace',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'marital_work_post',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'contact_surname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'contact_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'contact_patronymic',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'contact_home_phone',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'employe_inn',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'employe_ogrn',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'employe_fullname',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_index',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_area',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_country',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_edge',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_city',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_setllement',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_housing',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_office',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_holding',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_type_commercial',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_type_goverment',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_type_foreign',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_legal_form',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_employers',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_age',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'workplace_phone',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_phone_addition',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_fax',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'workplace_site',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'branch_production',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'branch_goverment',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'branch_service',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'branch_industry',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'branch_other',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'career_status',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'career_activity_character',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'career_experience_start',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'career_experience_current_start',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'career_experience_direction_start',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'career_post',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'career_character',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'career_email',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_main_summ',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_currency',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_payment',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_alimony',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_1_source',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_1_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_1_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_2_source',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_2_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_2_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_3_source',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_3_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'earings_regular_3_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_type_cottege',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_type_condo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_type_plot',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_plot_get',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_plot_address',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'realestate_plot_occupancy',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_plot_square',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_condo_get',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_condo_address',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'realestate_condo_occupancy',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_condo_square',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_cottege_get',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_cottege_address',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'realestate_cottege_occupancy',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_cottege_square',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_type_other',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_other_name',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'realestate_other_get',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_other_address',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'realestate_other_occupancy',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'realestate_other_square',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cars_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cars_model',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'cars_purchase_date',array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'cars_year',array('class'=>'span5','maxlength'=>4)); ?>

	<?php echo $form->textFieldRow($model,'cars_registration_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cars_get',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_3',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_1_creditor',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'credit_2_creditor',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'credit_3_creditor',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'credit_1_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_2_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_3_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_1_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_2_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_3_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_1_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_2_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_3_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_1_receipt_date',array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'credit_2_receipt_date',array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'credit_3_receipt_date',array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'credit_1_month_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_2_month_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_3_month_summ',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_1_expired',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_2_expired',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'credit_3_expired',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_1_payment_system',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_1_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_1_limit',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_1_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_2_payment_system',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_2_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_2_limit',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_2_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_3',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_3_payment_system',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_3_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_3_limit',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'card_3_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_availability',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_employe_inn',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_employe_ogrn',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_employe_fullname',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_index',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_area',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_country',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_edge',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_city',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_setllement',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_housing',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_office',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_holding',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_type_commercial',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_type_goverment',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_type_foreign',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_legal_form',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_employers',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_age',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_phone',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_phone_addition',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_fax',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_workplace_site',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_branch_production',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_branch_goverment',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_branch_service',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_branch_industry',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_branch_other',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_status',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_activity_character',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_experience_start',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_experience_current_start',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_experience_direction_start',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_post',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_character',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'offourwork_career_email',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'lastwork_fullname',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'lastwork_post',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'lastwork_experience',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'lastwork_pause',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'initialfee_source',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'initialfee_source_other',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'initialfee_trade_in',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'initialfee_trade_in_address',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'initialfee_trade_in_cost',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'initialfee_trade_in_cost_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_type_other',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_market',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_construction',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_goal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_address',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_region',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_summ_square',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_live_square',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_cost',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'acquired_realestate_cost_currency',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
