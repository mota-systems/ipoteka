<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Requests','url'=>array('index')),
	array('label'=>'Create Requests','url'=>array('create')),
	array('label'=>'Update Requests','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Requests','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requests','url'=>array('admin')),
);
?>

<h1>View Requests #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'objectTypeId',
		'surname',
		'patronymic',
		'name',
		'summ',
		'objectCost',
		'initialFee',
		'sex',
		'birthday',
		'birthday_place',
		'home_phone',
		'mobile_phone',
		'citizenship',
		'passport_seria',
		'passport_number',
		'passport_issue',
		'passport_issued',
		'registration_index',
		'registration_country',
		'registration_area',
		'registration_edge',
		'registration_setllement',
		'registration_city',
		'registration_street',
		'registration_house',
		'registration_housing',
		'registration_apartment',
		'registration_period',
		'live_index',
		'live_country',
		'live_area',
		'live_edge',
		'live_city',
		'live_settlement',
		'live_house',
		'live_housing',
		'live_apartment',
		'live_period',
		'live_status',
		'education',
		'marital_status',
		'marital_dependency',
		'martial_children',
		'marital_surname',
		'marital_name',
		'marital_patronymic',
		'marital_sex',
		'marital_birthday',
		'marital_passport_seria',
		'marital_passport_number',
		'marital_passport_issue',
		'marital_passport_issued',
		'marital_work_phone',
		'marital_mobile_phone',
		'marital_workplace',
		'marital_work_post',
		'contact_surname',
		'contact_name',
		'contact_patronymic',
		'contact_home_phone',
		'employe_inn',
		'employe_ogrn',
		'employe_fullname',
		'workplace_index',
		'workplace_area',
		'workplace_country',
		'workplace_edge',
		'workplace_city',
		'workplace_setllement',
		'workplace_housing',
		'workplace_office',
		'workplace_holding',
		'workplace_type_commercial',
		'workplace_type_goverment',
		'workplace_type_foreign',
		'workplace_legal_form',
		'workplace_employers',
		'workplace_age',
		'workplace_phone',
		'workplace_phone_addition',
		'workplace_fax',
		'workplace_site',
		'branch_production',
		'branch_goverment',
		'branch_service',
		'branch_industry',
		'branch_other',
		'career_status',
		'career_activity_character',
		'career_experience_start',
		'career_experience_current_start',
		'career_experience_direction_start',
		'career_post',
		'career_character',
		'career_email',
		'earings_main_summ',
		'earings_currency',
		'earings_payment',
		'earings_alimony',
		'earings_regular_1_source',
		'earings_regular_1_summ',
		'earings_regular_1_currency',
		'earings_regular_2_source',
		'earings_regular_2_summ',
		'earings_regular_2_currency',
		'earings_regular_3_source',
		'earings_regular_3_summ',
		'earings_regular_3_currency',
		'realestate_type_cottege',
		'realestate_type_condo',
		'realestate_type_plot',
		'realestate_plot_get',
		'realestate_plot_address',
		'realestate_plot_occupancy',
		'realestate_plot_square',
		'realestate_condo_get',
		'realestate_condo_address',
		'realestate_condo_occupancy',
		'realestate_condo_square',
		'realestate_cottege_get',
		'realestate_cottege_address',
		'realestate_cottege_occupancy',
		'realestate_cottege_square',
		'realestate_type_other',
		'realestate_other_name',
		'realestate_other_get',
		'realestate_other_address',
		'realestate_other_occupancy',
		'realestate_other_square',
		'cars_number',
		'cars_model',
		'cars_purchase_date',
		'cars_year',
		'cars_registration_number',
		'cars_get',
		'credit_1',
		'credit_2',
		'credit_3',
		'credit_1_creditor',
		'credit_2_creditor',
		'credit_3_creditor',
		'credit_1_summ',
		'credit_2_summ',
		'credit_3_summ',
		'credit_1_currency',
		'credit_2_currency',
		'credit_3_currency',
		'credit_1_type',
		'credit_2_type',
		'credit_3_type',
		'credit_1_receipt_date',
		'credit_2_receipt_date',
		'credit_3_receipt_date',
		'credit_1_month_summ',
		'credit_2_month_summ',
		'credit_3_month_summ',
		'credit_1_expired',
		'credit_2_expired',
		'credit_3_expired',
		'card_1',
		'card_1_payment_system',
		'card_1_type',
		'card_1_limit',
		'card_1_currency',
		'card_2',
		'card_2_payment_system',
		'card_2_type',
		'card_2_limit',
		'card_2_currency',
		'card_3',
		'card_3_payment_system',
		'card_3_type',
		'card_3_limit',
		'card_3_currency',
		'offourwork_availability',
		'offourwork_employe_inn',
		'offourwork_employe_ogrn',
		'offourwork_employe_fullname',
		'offourwork_workplace_index',
		'offourwork_workplace_area',
		'offourwork_workplace_country',
		'offourwork_workplace_edge',
		'offourwork_workplace_city',
		'offourwork_workplace_setllement',
		'offourwork_workplace_housing',
		'offourwork_workplace_office',
		'offourwork_workplace_holding',
		'offourwork_workplace_type_commercial',
		'offourwork_workplace_type_goverment',
		'offourwork_workplace_type_foreign',
		'offourwork_workplace_legal_form',
		'offourwork_workplace_employers',
		'offourwork_workplace_age',
		'offourwork_workplace_phone',
		'offourwork_workplace_phone_addition',
		'offourwork_workplace_fax',
		'offourwork_workplace_site',
		'offourwork_branch_production',
		'offourwork_branch_goverment',
		'offourwork_branch_service',
		'offourwork_branch_industry',
		'offourwork_branch_other',
		'offourwork_career_status',
		'offourwork_career_activity_character',
		'offourwork_career_experience_start',
		'offourwork_career_experience_current_start',
		'offourwork_career_experience_direction_start',
		'offourwork_career_post',
		'offourwork_career_character',
		'offourwork_career_email',
		'lastwork_fullname',
		'lastwork_post',
		'lastwork_experience',
		'lastwork_pause',
		'initialfee_source',
		'initialfee_source_other',
		'initialfee_trade_in',
		'initialfee_trade_in_address',
		'initialfee_trade_in_cost',
		'initialfee_trade_in_cost_currency',
		'acquired_realestate_type',
		'acquired_realestate_type_other',
		'acquired_realestate_market',
		'acquired_realestate_construction',
		'acquired_realestate_goal',
		'acquired_realestate_address',
		'acquired_realestate_region',
		'acquired_realestate_summ_square',
		'acquired_realestate_live_square',
		'acquired_realestate_cost',
		'acquired_realestate_cost_currency',
		'created_by_user_id',
		'date_created',
		'status',
	),
)); ?>
