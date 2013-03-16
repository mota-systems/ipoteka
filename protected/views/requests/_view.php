<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objectTypeId')); ?>:</b>
	<?php echo CHtml::encode($data->objectTypeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patronymic')); ?>:</b>
	<?php echo CHtml::encode($data->patronymic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('summ')); ?>:</b>
	<?php echo CHtml::encode($data->summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objectCost')); ?>:</b>
	<?php echo CHtml::encode($data->objectCost); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('initialFee')); ?>:</b>
	<?php echo CHtml::encode($data->initialFee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
	<?php echo CHtml::encode($data->birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday_place')); ?>:</b>
	<?php echo CHtml::encode($data->birthday_place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_phone')); ?>:</b>
	<?php echo CHtml::encode($data->home_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_phone')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citizenship')); ?>:</b>
	<?php echo CHtml::encode($data->citizenship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_seria')); ?>:</b>
	<?php echo CHtml::encode($data->passport_seria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_number')); ?>:</b>
	<?php echo CHtml::encode($data->passport_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_issue')); ?>:</b>
	<?php echo CHtml::encode($data->passport_issue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_issued')); ?>:</b>
	<?php echo CHtml::encode($data->passport_issued); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_index')); ?>:</b>
	<?php echo CHtml::encode($data->registration_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_country')); ?>:</b>
	<?php echo CHtml::encode($data->registration_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_area')); ?>:</b>
	<?php echo CHtml::encode($data->registration_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_edge')); ?>:</b>
	<?php echo CHtml::encode($data->registration_edge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_setllement')); ?>:</b>
	<?php echo CHtml::encode($data->registration_setllement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_city')); ?>:</b>
	<?php echo CHtml::encode($data->registration_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_street')); ?>:</b>
	<?php echo CHtml::encode($data->registration_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_house')); ?>:</b>
	<?php echo CHtml::encode($data->registration_house); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_housing')); ?>:</b>
	<?php echo CHtml::encode($data->registration_housing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_apartment')); ?>:</b>
	<?php echo CHtml::encode($data->registration_apartment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_period')); ?>:</b>
	<?php echo CHtml::encode($data->registration_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_index')); ?>:</b>
	<?php echo CHtml::encode($data->live_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_country')); ?>:</b>
	<?php echo CHtml::encode($data->live_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_area')); ?>:</b>
	<?php echo CHtml::encode($data->live_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_edge')); ?>:</b>
	<?php echo CHtml::encode($data->live_edge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_city')); ?>:</b>
	<?php echo CHtml::encode($data->live_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_settlement')); ?>:</b>
	<?php echo CHtml::encode($data->live_settlement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_house')); ?>:</b>
	<?php echo CHtml::encode($data->live_house); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_housing')); ?>:</b>
	<?php echo CHtml::encode($data->live_housing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_apartment')); ?>:</b>
	<?php echo CHtml::encode($data->live_apartment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_period')); ?>:</b>
	<?php echo CHtml::encode($data->live_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live_status')); ?>:</b>
	<?php echo CHtml::encode($data->live_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education')); ?>:</b>
	<?php echo CHtml::encode($data->education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->marital_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_dependency')); ?>:</b>
	<?php echo CHtml::encode($data->marital_dependency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('martial_children')); ?>:</b>
	<?php echo CHtml::encode($data->martial_children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_surname')); ?>:</b>
	<?php echo CHtml::encode($data->marital_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_name')); ?>:</b>
	<?php echo CHtml::encode($data->marital_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_patronymic')); ?>:</b>
	<?php echo CHtml::encode($data->marital_patronymic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_sex')); ?>:</b>
	<?php echo CHtml::encode($data->marital_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_birthday')); ?>:</b>
	<?php echo CHtml::encode($data->marital_birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_passport_seria')); ?>:</b>
	<?php echo CHtml::encode($data->marital_passport_seria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_passport_number')); ?>:</b>
	<?php echo CHtml::encode($data->marital_passport_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_passport_issue')); ?>:</b>
	<?php echo CHtml::encode($data->marital_passport_issue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_passport_issued')); ?>:</b>
	<?php echo CHtml::encode($data->marital_passport_issued); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_work_phone')); ?>:</b>
	<?php echo CHtml::encode($data->marital_work_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_mobile_phone')); ?>:</b>
	<?php echo CHtml::encode($data->marital_mobile_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_workplace')); ?>:</b>
	<?php echo CHtml::encode($data->marital_workplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_work_post')); ?>:</b>
	<?php echo CHtml::encode($data->marital_work_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_surname')); ?>:</b>
	<?php echo CHtml::encode($data->contact_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_patronymic')); ?>:</b>
	<?php echo CHtml::encode($data->contact_patronymic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_home_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_home_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employe_inn')); ?>:</b>
	<?php echo CHtml::encode($data->employe_inn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employe_ogrn')); ?>:</b>
	<?php echo CHtml::encode($data->employe_ogrn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employe_fullname')); ?>:</b>
	<?php echo CHtml::encode($data->employe_fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_index')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_area')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_country')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_edge')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_edge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_city')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_setllement')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_setllement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_housing')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_housing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_office')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_holding')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_holding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_type_commercial')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_type_commercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_type_goverment')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_type_goverment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_type_foreign')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_type_foreign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_legal_form')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_legal_form); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_employers')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_employers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_age')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_phone')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_phone_addition')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_phone_addition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_fax')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_site')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_production')); ?>:</b>
	<?php echo CHtml::encode($data->branch_production); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_goverment')); ?>:</b>
	<?php echo CHtml::encode($data->branch_goverment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_service')); ?>:</b>
	<?php echo CHtml::encode($data->branch_service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_industry')); ?>:</b>
	<?php echo CHtml::encode($data->branch_industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_other')); ?>:</b>
	<?php echo CHtml::encode($data->branch_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_status')); ?>:</b>
	<?php echo CHtml::encode($data->career_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_activity_character')); ?>:</b>
	<?php echo CHtml::encode($data->career_activity_character); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_experience_start')); ?>:</b>
	<?php echo CHtml::encode($data->career_experience_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_experience_current_start')); ?>:</b>
	<?php echo CHtml::encode($data->career_experience_current_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_experience_direction_start')); ?>:</b>
	<?php echo CHtml::encode($data->career_experience_direction_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_post')); ?>:</b>
	<?php echo CHtml::encode($data->career_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_character')); ?>:</b>
	<?php echo CHtml::encode($data->career_character); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career_email')); ?>:</b>
	<?php echo CHtml::encode($data->career_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_main_summ')); ?>:</b>
	<?php echo CHtml::encode($data->earings_main_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_currency')); ?>:</b>
	<?php echo CHtml::encode($data->earings_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_payment')); ?>:</b>
	<?php echo CHtml::encode($data->earings_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_alimony')); ?>:</b>
	<?php echo CHtml::encode($data->earings_alimony); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_1_source')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_1_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_1_summ')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_1_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_1_currency')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_1_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_2_source')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_2_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_2_summ')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_2_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_2_currency')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_2_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_3_source')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_3_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_3_summ')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_3_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earings_regular_3_currency')); ?>:</b>
	<?php echo CHtml::encode($data->earings_regular_3_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_type_cottege')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_type_cottege); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_type_condo')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_type_condo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_type_plot')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_type_plot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_plot_get')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_plot_get); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_plot_address')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_plot_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_plot_occupancy')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_plot_occupancy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_plot_square')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_plot_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_condo_get')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_condo_get); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_condo_address')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_condo_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_condo_occupancy')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_condo_occupancy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_condo_square')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_condo_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_cottege_get')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_cottege_get); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_cottege_address')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_cottege_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_cottege_occupancy')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_cottege_occupancy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_cottege_square')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_cottege_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_type_other')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_type_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_other_name')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_other_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_other_get')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_other_get); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_other_address')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_other_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_other_occupancy')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_other_occupancy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realestate_other_square')); ?>:</b>
	<?php echo CHtml::encode($data->realestate_other_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cars_number')); ?>:</b>
	<?php echo CHtml::encode($data->cars_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cars_model')); ?>:</b>
	<?php echo CHtml::encode($data->cars_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cars_purchase_date')); ?>:</b>
	<?php echo CHtml::encode($data->cars_purchase_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cars_year')); ?>:</b>
	<?php echo CHtml::encode($data->cars_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cars_registration_number')); ?>:</b>
	<?php echo CHtml::encode($data->cars_registration_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cars_get')); ?>:</b>
	<?php echo CHtml::encode($data->cars_get); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_creditor')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_creditor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_creditor')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_creditor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_creditor')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_creditor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_summ')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_summ')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_summ')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_currency')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_currency')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_currency')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_type')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_type')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_type')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_receipt_date')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_receipt_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_receipt_date')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_receipt_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_receipt_date')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_receipt_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_month_summ')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_month_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_month_summ')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_month_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_month_summ')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_month_summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_1_expired')); ?>:</b>
	<?php echo CHtml::encode($data->credit_1_expired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_2_expired')); ?>:</b>
	<?php echo CHtml::encode($data->credit_2_expired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_3_expired')); ?>:</b>
	<?php echo CHtml::encode($data->credit_3_expired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_1')); ?>:</b>
	<?php echo CHtml::encode($data->card_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_1_payment_system')); ?>:</b>
	<?php echo CHtml::encode($data->card_1_payment_system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_1_type')); ?>:</b>
	<?php echo CHtml::encode($data->card_1_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_1_limit')); ?>:</b>
	<?php echo CHtml::encode($data->card_1_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_1_currency')); ?>:</b>
	<?php echo CHtml::encode($data->card_1_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_2')); ?>:</b>
	<?php echo CHtml::encode($data->card_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_2_payment_system')); ?>:</b>
	<?php echo CHtml::encode($data->card_2_payment_system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_2_type')); ?>:</b>
	<?php echo CHtml::encode($data->card_2_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_2_limit')); ?>:</b>
	<?php echo CHtml::encode($data->card_2_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_2_currency')); ?>:</b>
	<?php echo CHtml::encode($data->card_2_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_3')); ?>:</b>
	<?php echo CHtml::encode($data->card_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_3_payment_system')); ?>:</b>
	<?php echo CHtml::encode($data->card_3_payment_system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_3_type')); ?>:</b>
	<?php echo CHtml::encode($data->card_3_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_3_limit')); ?>:</b>
	<?php echo CHtml::encode($data->card_3_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_3_currency')); ?>:</b>
	<?php echo CHtml::encode($data->card_3_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_availability')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_availability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_employe_inn')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_employe_inn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_employe_ogrn')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_employe_ogrn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_employe_fullname')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_employe_fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_index')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_area')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_country')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_edge')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_edge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_city')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_setllement')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_setllement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_housing')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_housing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_office')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_holding')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_holding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_type_commercial')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_type_commercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_type_goverment')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_type_goverment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_type_foreign')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_type_foreign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_legal_form')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_legal_form); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_employers')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_employers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_age')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_phone')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_phone_addition')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_phone_addition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_fax')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_workplace_site')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_workplace_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_branch_production')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_branch_production); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_branch_goverment')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_branch_goverment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_branch_service')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_branch_service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_branch_industry')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_branch_industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_branch_other')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_branch_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_status')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_activity_character')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_activity_character); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_experience_start')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_experience_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_experience_current_start')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_experience_current_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_experience_direction_start')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_experience_direction_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_post')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_character')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_character); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offourwork_career_email')); ?>:</b>
	<?php echo CHtml::encode($data->offourwork_career_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastwork_fullname')); ?>:</b>
	<?php echo CHtml::encode($data->lastwork_fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastwork_post')); ?>:</b>
	<?php echo CHtml::encode($data->lastwork_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastwork_experience')); ?>:</b>
	<?php echo CHtml::encode($data->lastwork_experience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastwork_pause')); ?>:</b>
	<?php echo CHtml::encode($data->lastwork_pause); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialfee_source')); ?>:</b>
	<?php echo CHtml::encode($data->initialfee_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialfee_source_other')); ?>:</b>
	<?php echo CHtml::encode($data->initialfee_source_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialfee_trade_in')); ?>:</b>
	<?php echo CHtml::encode($data->initialfee_trade_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialfee_trade_in_address')); ?>:</b>
	<?php echo CHtml::encode($data->initialfee_trade_in_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialfee_trade_in_cost')); ?>:</b>
	<?php echo CHtml::encode($data->initialfee_trade_in_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initialfee_trade_in_cost_currency')); ?>:</b>
	<?php echo CHtml::encode($data->initialfee_trade_in_cost_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_type')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_type_other')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_type_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_market')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_market); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_construction')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_construction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_goal')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_goal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_address')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_region')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_summ_square')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_summ_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_live_square')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_live_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_cost')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acquired_realestate_cost_currency')); ?>:</b>
	<?php echo CHtml::encode($data->acquired_realestate_cost_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->created_by_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>