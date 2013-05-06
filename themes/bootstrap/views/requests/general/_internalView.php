<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 05.04.13
 * Time: 17:12
 * All rights are reserved
 */
/**
 * @var $model Requests
 */
?>
<?
$this->widget('bootstrap.widgets.TbTabs', array(
    'type'      => 'tabs',
    'tabs'      => array(
        array(
            'label'   => 'Персональные данные заявителя',
            'content' => CHtml::tag('h4', array(), 'Идентификационная информация') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'birthday_place',
                        'citizenship',
                        'passport_seria',
                        'passport_number',
                        array(
                            'name' => 'passport_issue',
                            'type' => 'russianDate',
                        ),
                        'passport_issued'
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Адрес постоянной регистрации') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'registration_index',
                        'registration_country',
                        'registration_area',
                        'registration_edge',
                        'registration_settlement',
                        'registration_city',
                        'registration_street',
                        'registration_house',
                        'registration_housing',
                        'registration_apartment',
                        array(
                            'name' => 'registration_period',
                            'type' => 'vocabulary',
                        ),

                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Адрес фактического проживания') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'live_index',
                        'live_country',
                        'live_area',
                        'live_edge',
                        'live_city',
                        'live_settlement',
                        'live_street',
                        'live_house',
                        'live_housing',
                        'live_apartment',
                        array(
                            'name' => 'live_period',
                            'type' => 'vocabulary',
                        ),
                        array(
                            'name' => 'live_status',
                            'type' => 'vocabulary',
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Образование') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'education',
                            'type' => 'vocabulary',
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Контактная информация') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'home_phone',
                        'mobile_phone',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Семейное положение') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'marital_status',
                            'type' => 'vocabulary',
                        ),
                        'marital_dependency',
                        'martial_children',
                        'contact_surname',
                        'contact_name',
                        'contact_patronymic',
                        'contact_home_phone',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Данные супруги / супруга') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'marital_surname',
                        'marital_name',
                        'marital_patronymic',
                        array(
                            'name' => 'marital_sex',
                            'type' => 'sex',
                        ),
                        array(
                            'name' => 'marital_birthday',
                            'type' => 'russianDate',
                        ),
                        'marital_passport_seria',
                        'marital_passport_number',
                        array(
                            'name' => 'marital_passport_issue',
                            'type' => 'russianDate',
                        ),
                        'marital_passport_issued',
                        'marital_work_phone',
                        'marital_mobile_phone',
                        'marital_workplace',
                        'marital_work_post',
                    ),
                ), TRUE)
        ),
        array(
            'label'   => 'Информация о работодателе',
            'content' => CHtml::tag('h4', array(), 'Идентификатор работодателя') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'employe_inn',
                        'employe_ogrn',
                        'employe_fullname',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Фактический адрес места работы') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'workplace_index',
                        'workplace_area',
                        'workplace_country',
                        'workplace_edge',
                        'workplace_city',
                        'workplace_setllement',
                        'workplace_housing',
                        'workplace_office',
                        'workplace_holding',
                        array(
                            'name' => 'workplace_type_commercial',
                            'type' => 'yesNo',
                        ),
                        array(
                            'name' => 'workplace_type_goverment',
                            'type' => 'yesNo',
                        ),
                        array(
                            'name' => 'workplace_type_foreign',
                            'type' => 'yesNo',
                        ),
                        array(
                            'name' => 'workplace_legal_form',
                            'type' => 'vocabulary',
                        ),
                        'workplace_employers',
                        'workplace_age',
                        'workplace_phone',
                        'workplace_phone_addition',
                        'workplace_fax',
                        'workplace_site',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Отраслевая принадлежность') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'branch_production',
                            'type' => 'list',
                        ),
                        array(
                            'name' => 'branch_goverment',
                            'type' => 'list',
                        ),
                        array(
                            'name' => 'branch_service',
                            'type' => 'list',
                        ),
                        array(
                            'name' => 'branch_industry',
                            'type' => 'list',
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Должность и род деятельности') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'career_status',
                            'type' => 'list'
                        ),
                        array(
                            'name' => 'career_activity_character',
                            'type' => 'list'
                        ),
                        'career_experience_start',
                        'career_experience_current_start',
                        'career_experience_direction_start',
                        'career_post',
                        array(
                            'name' => 'career_character',
                            'type' => 'vocabulary'
                        ),
                        'career_email'
                    ),
                ), TRUE)

        ),
        array(
            'label'   => 'Информация о доходах / расходах',
            'content' =>
            CHtml::tag('h4', array(), 'Информация о доходах / расходах') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'earings_main_summ',
                        array(
                            'name' => 'earings_currency',
                            'type' => 'vocabulary'
                        ),
                        'earings_payment',
                        'earings_alimony',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Источник дохода 1') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'earings_regular_1_source',
                        'earings_regular_1_summ',
                        array(
                            'name' => 'earings_regular_1_currency',
                            'type' => 'vocabulary'
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Источник дохода 2') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'earings_regular_2_source',
                        'earings_regular_2_summ',
                        'earings_regular_2_currency',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Источник дохода 3') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'earings_regular_3_source',
                        'earings_regular_3_summ',
                        'earings_regular_3_currency',
                    ),
                ), TRUE),
        ),
        array(
            'label'   => 'Информация о собственности',
            'content' =>
            CHtml::tag('h4', array(), 'Недвижимое имущество') .
                CHtml::tag('h5', array(), $model->getAttributeLabel('realestate_type_cottege')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'realestate_type_cottege',
                            'type' => 'yesNo'
                        ),
                        array(
                            'name' => 'realestate_cottege_get',
                            'type' => 'vocabulary'
                        ),
                        'realestate_cottege_address',
                        'realestate_cottege_occupancy',
                        'realestate_cottege_square',
                    ),
                ), TRUE) .
                CHtml::tag('h5', array(), $model->getAttributeLabel('realestate_type_condo')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'realestate_type_condo',
                            'type' => 'yesNo'
                        ),
                        array(
                            'name' => 'realestate_condo_get',
                            'type' => 'vocabulary'
                        ),
                        'realestate_condo_address',
                        'realestate_condo_occupancy',
                        'realestate_condo_square',
                    ),
                ), TRUE) .
                CHtml::tag('h5', array(), $model->getAttributeLabel('realestate_type_plot')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'realestate_type_plot',
                            'type' => 'yesNo'
                        ),
                        array(
                            'name' => 'realestate_plot_get',
                            'type' => 'vocabulary'
                        ),
                        'realestate_plot_address',
                        'realestate_plot_occupancy',
                        'realestate_plot_square',
                    ),
                ), TRUE) .
                CHtml::tag('h5', array(), $model->getAttributeLabel('realestate_type_other')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'realestate_type_other',
                            'type' => 'yesNo'
                        ),
                        'realestate_other_name',
                        array(
                            'name' => 'realestate_other_get',
                            'type' => 'vocabulary'
                        ),
                        'realestate_other_address',
                        'realestate_other_occupancy',
                        'realestate_other_square',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Автомобили') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'cars_number',
                        'cars_model',
                        'cars_purchase_date',
                        'cars_year',
                        'cars_registration_number',
                        array(
                            'name' => 'cars_get',
                            'type' => 'vocabulary'
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Информация о текущих долговых обязательствах') .
                CHtml::tag('h5', array(), $model->getAttributeLabel('credit_1')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'credit_1',
                            'type' => 'yesNo'
                        ),
                        'credit_1_creditor',
                        'credit_1_summ',
                        array(
                            'name' => 'credit_1_currency',
                            'type' => 'vocabulary'
                        ),
                        array(
                            'name' => 'credit_1_type',
                            'type' => 'vocabulary'
                        ),
                        'credit_1_receipt_date',
                        'credit_1_month_summ',
                        array(
                            'name' => 'credit_1_expired',
                            'type' => 'yesNo'
                        ),
                    ),
                ), TRUE)
                . CHtml::tag('h5', array(), $model->getAttributeLabel('credit_2')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'credit_2',
                            'type' => 'yesNo'
                        ),
                        'credit_2_creditor',
                        'credit_2_summ',
                        array(
                            'name' => 'credit_2_currency',
                            'type' => 'vocabulary'
                        ),
                        array(
                            'name' => 'credit_2_type',
                            'type' => 'vocabulary'
                        ),
                        'credit_2_receipt_date',
                        'credit_2_month_summ',
                        array(
                            'name' => 'credit_2_expired',
                            'type' => 'yesNo'
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h5', array(), $model->getAttributeLabel('credit_3')) .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'credit_3',
                            'type' => 'yesNo'
                        ),
                        'credit_3_creditor',
                        'credit_3_summ',
                        array(
                            'name' => 'credit_3_currency',
                            'type' => 'vocabulary'
                        ),
                        array(
                            'name' => 'credit_3_type',
                            'type' => 'vocabulary'
                        ),
                        'credit_3_receipt_date',
                        'credit_3_month_summ',
                        array(
                            'name' => 'credit_3_expired',
                            'type' => 'yesNo'
                        ),
                    ),
                ), TRUE),
        ),
        array(
            'label'   => 'Работа по-совместительству',
            'content' => CHtml::tag('h4', array(), 'Идентификатор работодателя') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'offourwork_availability',
                            'type' => 'yesNo',
                        ),
                        'offourwork_employe_inn',
                        'offourwork_employe_ogrn',
                        'offourwork_employe_fullname',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Фактический адрес места работы') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'offourwork_workplace_index',
                        'offourwork_workplace_area',
                        'offourwork_workplace_country',
                        'offourwork_workplace_edge',
                        'offourwork_workplace_city',
                        'offourwork_workplace_setllement',
                        'offourwork_workplace_housing',
                        'offourwork_workplace_office',
                        'offourwork_workplace_holding',
                        array(
                            'name' => 'offourwork_workplace_type_commercial',
                            'type' => 'yesNo',
                        ),
                        array(
                            'name' => 'offourwork_workplace_type_goverment',
                            'type' => 'yesNo',
                        ),
                        array(
                            'name' => 'offourwork_workplace_type_foreign',
                            'type' => 'yesNo',
                        ),
                        array(
                            'name' => 'offourwork_workplace_legal_form',
                            'type' => 'vocabulary',
                        ),
                        'offourwork_workplace_employers',
                        'offourwork_workplace_age',
                        'offourwork_workplace_phone',
                        'offourwork_workplace_phone_addition',
                        'offourwork_workplace_fax',
                        'offourwork_workplace_site',
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Отраслевая принадлежность') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'offourwork_branch_production',
                            'type' => 'list',
                        ),
                        array(
                            'name' => 'offourwork_branch_goverment',
                            'type' => 'list',
                        ),
                        array(
                            'name' => 'offourwork_branch_service',
                            'type' => 'list',
                        ),
                        array(
                            'name' => 'offourwork_branch_industry',
                            'type' => 'list',
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Должность и род деятельности') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'offourwork_career_status',
                            'type' => 'list'
                        ),
                        array(
                            'name' => 'offourwork_career_activity_character',
                            'type' => 'list'
                        ),
                        'offourwork_career_experience_start',
                        'offourwork_career_post',
                        array(
                            'name' => 'offourwork_career_character',
                            'type' => 'vocabulary'
                        ),
                        'offourwork_career_email'
                    ),
                ), TRUE)
                .
                CHtml::tag('h4', array(), 'Предыдущее место работы') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'lastwork_fullname',
                        'lastwork_post',
                        'lastwork_experience',
                        'lastwork_pause',
                    ),
                ), TRUE)
        ),
        array(
            'label'   => 'Условия ипотеки',
            'content' =>
            CHtml::tag('h4', array(), 'Первоначальный взнос') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        'initialfee_summ',
                        array(
                            'name' => 'initialfee_source',
                            'type' => 'list'
                        ),
                        'initialfee_source_other',
                        array(
                            'name' => 'initialfee_trade_in',
                            'type' => 'yesNo'
                        ),
                        'initialfee_trade_in_address',
                        'initialfee_trade_in_cost',
                        array(
                            'name' => 'initialfee_trade_in_cost_currency',
                            'type' => 'vocabulary'
                        ),
                    ),
                ), TRUE) .
                CHtml::tag('h4', array(), 'Сведения о приобретаемом / закладываемом объекте недвижимости') .
                $this->widget('bootstrap.widgets.TbDetailView', array(
                    'data'       => $model,
                    'attributes' => array(
                        array(
                            'name' => 'acquired_realestate_goal',
                            'type' => 'vocabulary'
                        ),
                        array(
                            'name' => 'acquired_realestate_type',
                            'type' => 'vocabulary'
                        ),
                        'acquired_realestate_type_other',
                        array(
                            'name' => 'acquired_realestate_market',
                            'type' => 'vocabulary'
                        ),
                        array(
                            'name' => 'acquired_realestate_construction',
                            'type' => 'vocabulary'
                        ),
                        'acquired_realestate_address',
                        'acquired_realestate_region',
                        'acquired_realestate_summ_square',
                        'acquired_realestate_live_square',
                        'acquired_realestate_cost',
                        array(
                            'name' => 'acquired_realestate_cost_currency',
                            'type' => 'vocabulary'
                        ),
                    ),
                ), TRUE)
        ),

    ),
    'type'      => 'pills',
// additional javascript options for the tabs plugin
));?>
