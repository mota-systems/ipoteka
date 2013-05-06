<?php

/**
 * This is the model class for table "requests".
 *
 * The followings are the available columns in table 'requests':
 * @property integer              $id
 * @property integer              $objectTypeId
 * @property string               $surname
 * @property string               $patronymic
 * @property string               $name
 * @property integer              $summ
 * @property integer              $objectCost
 * @property integer              $initialFee
 * @property integer              $sex
 * @property string               $birthday
 * @property string               $birthday_place
 * @property string               $home_phone
 * @property string               $mobile_phone
 * @property string               $citizenship
 * @property integer              $passport_seria
 * @property integer              $passport_number
 * @property string               $passport_issue
 * @property string               $passport_issued
 * @property integer              $registration_index
 * @property string               $registration_country
 * @property string               $registration_area
 * @property string               $registration_edge
 * @property string               $registration_setllement
 * @property string               $registration_city
 * @property string               $registration_street
 * @property string               $registration_house
 * @property string               $registration_housing
 * @property string               $registration_apartment
 * @property integer              $registration_period
 * @property integer              $live_index
 * @property string               $live_country
 * @property string               $live_area
 * @property string               $live_edge
 * @property string               $live_city
 * @property string               $live_street
 * @property string               $live_settlement
 * @property string               $live_house
 * @property string               $live_housing
 * @property string               $live_apartment
 * @property string               $live_period
 * @property integer              $live_status
 * @property integer              $education
 * @property integer              $marital_status
 * @property integer              $marital_dependency
 * @property integer              $martial_children
 * @property string               $marital_surname
 * @property string               $marital_name
 * @property string               $marital_patronymic
 * @property integer              $marital_sex
 * @property string               $marital_birthday
 * @property integer              $marital_passport_seria
 * @property integer              $marital_passport_number
 * @property string               $marital_passport_issue
 * @property string               $marital_passport_issued
 * @property string               $marital_work_phone
 * @property string               $marital_mobile_phone
 * @property string               $marital_workplace
 * @property string               $marital_work_post
 * @property string               $contact_surname
 * @property string               $contact_name
 * @property string               $contact_patronymic
 * @property string               $contact_home_phone
 * @property integer              $employe_inn
 * @property integer              $employe_ogrn
 * @property string               $employe_fullname
 * @property integer              $workplace_index
 * @property string               $workplace_area
 * @property string               $workplace_country
 * @property string               $workplace_edge
 * @property string               $workplace_city
 * @property string               $workplace_setllement
 * @property string               $workplace_street
 * @property string               $workplace_housing
 * @property string               $workplace_office
 * @property integer              $workplace_holding
 * @property integer              $workplace_type_commercial
 * @property integer              $workplace_type_goverment
 * @property integer              $workplace_type_foreign
 * @property string               $workplace_legal_form
 * @property integer              $workplace_employers
 * @property integer              $workplace_age
 * @property string               $workplace_phone
 * @property string               $workplace_phone_addition
 * @property string               $workplace_fax
 * @property string               $workplace_site
 * @property string               $branch_production
 * @property string               $branch_goverment
 * @property string               $branch_service
 * @property string               $branch_industry
 * @property string               $branch_other
 * @property string               $career_status
 * @property string               $career_activity_character
 * @property string               $career_experience_start
 * @property string               $career_experience_current_start
 * @property string               $career_experience_direction_start
 * @property string               $career_post
 * @property integer              $career_character
 * @property string               $career_email
 * @property string               $earings_main_summ
 * @property string               $earings_currency
 * @property string               $earings_payment
 * @property string               $earings_alimony
 * @property string               $earings_regular_1_source
 * @property integer              $earings_regular_1_summ
 * @property integer              $earings_regular_1_currency
 * @property string               $earings_regular_2_source
 * @property integer              $earings_regular_2_summ
 * @property integer              $earings_regular_2_currency
 * @property string               $earings_regular_3_source
 * @property integer              $earings_regular_3_summ
 * @property integer              $earings_regular_3_currency
 * @property integer              $realestate_type_cottege
 * @property integer              $realestate_type_condo
 * @property integer              $realestate_type_plot
 * @property integer              $realestate_plot_get
 * @property string               $realestate_plot_address
 * @property integer              $realestate_plot_occupancy
 * @property integer              $realestate_plot_square
 * @property integer              $realestate_condo_get
 * @property string               $realestate_condo_address
 * @property integer              $realestate_condo_occupancy
 * @property integer              $realestate_condo_square
 * @property integer              $realestate_cottege_get
 * @property string               $realestate_cottege_address
 * @property integer              $realestate_cottege_occupancy
 * @property integer              $realestate_cottege_square
 * @property integer              $realestate_type_other
 * @property string               $realestate_other_name
 * @property integer              $realestate_other_get
 * @property string               $realestate_other_address
 * @property integer              $realestate_other_occupancy
 * @property integer              $realestate_other_square
 * @property integer              $cars_number
 * @property string               $cars_model
 * @property string               $cars_purchase_date
 * @property string               $cars_year
 * @property integer              $cars_registration_number
 * @property integer              $cars_get
 * @property integer              $credit_1
 * @property integer              $credit_2
 * @property integer              $credit_3
 * @property string               $credit_1_creditor
 * @property string               $credit_2_creditor
 * @property string               $credit_3_creditor
 * @property integer              $credit_1_summ
 * @property integer              $credit_2_summ
 * @property integer              $credit_3_summ
 * @property integer              $credit_1_currency
 * @property integer              $credit_2_currency
 * @property integer              $credit_3_currency
 * @property integer              $credit_1_type
 * @property integer              $credit_2_type
 * @property integer              $credit_3_type
 * @property string               $credit_1_receipt_date
 * @property string               $credit_2_receipt_date
 * @property string               $credit_3_receipt_date
 * @property integer              $credit_1_month_summ
 * @property integer              $credit_2_month_summ
 * @property integer              $credit_3_month_summ
 * @property integer              $credit_1_expired
 * @property integer              $credit_2_expired
 * @property integer              $credit_3_expired
 * @property integer              $card_1
 * @property integer              $card_1_payment_system
 * @property integer              $card_1_type
 * @property integer              $card_1_limit
 * @property integer              $card_1_currency
 * @property integer              $card_2
 * @property integer              $card_2_payment_system
 * @property integer              $card_2_type
 * @property integer              $card_2_limit
 * @property integer              $card_2_currency
 * @property integer              $card_3
 * @property integer              $card_3_payment_system
 * @property integer              $card_3_type
 * @property integer              $card_3_limit
 * @property integer              $card_3_currency
 * @property integer              $offourwork_availability
 * @property integer              $offourwork_employe_inn
 * @property integer              $offourwork_employe_ogrn
 * @property string               $offourwork_employe_fullname
 * @property integer              $offourwork_workplace_index
 * @property string               $offourwork_workplace_area
 * @property string               $offourwork_workplace_country
 * @property string               $offourwork_workplace_edge
 * @property string               $offourwork_workplace_city
 * @property string               $offourwork_workplace_street
 * @property string               $offourwork_workplace_setllement
 * @property string               $offourwork_workplace_housing
 * @property string               $offourwork_workplace_office
 * @property integer              $offourwork_workplace_holding
 * @property integer              $offourwork_workplace_type_commercial
 * @property integer              $offourwork_workplace_type_goverment
 * @property integer              $offourwork_workplace_type_foreign
 * @property string               $offourwork_workplace_legal_form
 * @property integer              $offourwork_workplace_employers
 * @property integer              $offourwork_workplace_age
 * @property string               $offourwork_workplace_phone
 * @property string               $offourwork_workplace_phone_addition
 * @property string               $offourwork_workplace_fax
 * @property string               $offourwork_workplace_site
 * @property string               $offourwork_branch_production
 * @property string               $offourwork_branch_goverment
 * @property string               $offourwork_branch_service
 * @property string               $offourwork_branch_industry
 * @property string               $offourwork_branch_other
 * @property string               $offourwork_career_status
 * @property string               $offourwork_career_activity_character
 * @property string               $offourwork_career_experience_start
 * @property string               $offourwork_career_experience_current_start
 * @property string               $offourwork_career_experience_direction_start
 * @property string               $offourwork_career_post
 * @property integer              $offourwork_career_character
 * @property string               $offourwork_career_email
 * @property string               $lastwork_fullname
 * @property string               $lastwork_post
 * @property string               $lastwork_experience
 * @property string               $lastwork_pause
 * @property string               $initialfee_summ
 * @property string               $initialfee_source
 * @property string               $initialfee_source_other
 * @property integer              $initialfee_trade_in
 * @property string               $initialfee_trade_in_address
 * @property string               $initialfee_trade_in_cost
 * @property integer              $initialfee_trade_in_cost_currency
 * @property integer              $acquired_realestate_type
 * @property string               $acquired_realestate_type_other
 * @property integer              $acquired_realestate_market
 * @property integer              $acquired_realestate_construction
 * @property integer              $acquired_realestate_goal
 * @property string               $acquired_realestate_address
 * @property string               $acquired_realestate_region
 * @property integer              $acquired_realestate_summ_square
 * @property integer              $acquired_realestate_live_square
 * @property integer              $acquired_realestate_cost
 * @property integer              $acquired_realestate_cost_currency
 * @property integer              $comment
 * @property integer              $created_by_user_id
 * @property integer              $created_by_organization_id
 * @property string               $date_created
 * @property integer              $status
 *
 * The followings are the available model relations:
 * @property Comments[]           $comments
 * @property Decisions[]          $decisions
 * @property Files[]              $files
 * @property ObjectType           $objectType
 * @property Status               $status0
 * @property Users                $createdByUser
 * @property OrganizationDecision $organizationDecisions
 *
 */
class   Requests extends CActiveRecord
{
    //--Client Sex--//
    const SEX_MAN = 1;
    const SEX_WOMEN = 2;

    //--Request status--//
    const STATUS_DRAFT = 1;
    const STATUS_NEW = 2;
    const STATUS_PENDING = 3;
    const STATUS_APPROVE = 4;
    const STATUS_REFUSE = 5;
    const STATUS_RETRIEVE = 6;
    const STATUS_DEAL = 7;

    //--Date Search Types--//
    const DATE_TYPE_TODAY = 1;
    const DATE_TYPE_YESTERDAY = 2;
    const DATE_TYPE_WEEK = 3;
    const DATE_TYPE_MONTH = 4;
    const DATE_TYPE_QUARTER = 5;
    const DATE_TYPE_INTERVAL = 6;

    public $filter;
    public $summary;
    public $date_from;
    public $date_to;
    public $date_type;

    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className active record class name.
     *
     * @return Requests the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function status()
    {

        $status = array(self::STATUS_NEW => 'Новая заявка', self::STATUS_PENDING => 'На рассмотрении', self::STATUS_DEAL => 'Сделка проведена');
        if (Yii::app()->user->organizationType != Organizations::TYPE_BANK)
            $status[self::STATUS_DRAFT] = 'Черновик';
        return $status;
    }

    public function onBeforeSave($event)
    {
        if ($this->isNewRecord)
            $this->fullName = "$this->surname $this->name $this->patronymic";
        parent::onBeforeSave($event);
    }


    public function onBeforeValidate($event)
    {
        if ($this->scenario == 'filter') {
            //TODO: фильтр по процентам, и срокам ипотеки
            $rules[] = array('filter', 'required', 'message' => 'Не дает займы по выбранному типу объекта', 'on' => 'filter');
            $rules[] = array('summ', 'compare', 'compareValue' => $this->filter->min_summ, 'operator' => '>=', 'on' => 'filter', 'message' => "Минимальная сумма ипотеки -- {$this->filter->min_summ} ");
            $rules[] = array('summ', 'compare', 'compareValue' => $this->filter->min_summ, 'operator' => '>=', 'on' => 'filter', 'message' => "Минимальная сумма ипотеки -- {$this->filter->min_summ} ");
            $rules[] = array('summ', 'compare', 'compareValue' => $this->filter->max_summ, 'operator' => '<=', 'on' => 'filter', 'message' => "Максимальная сумма ипотеки -- {$this->filter->max_summ} ");
            $rules[] = array('age', 'compare', 'compareValue' => $this->filter->min_borrower_age, 'operator' => '>=', 'on' => 'filter', 'message' => "Минимальный возраст заемщика -- {$this->filter->min_borrower_age} " . Yii::t('ipoteka', 'год|года|лет|год', $this->filter->min_borrower_age));
            $rules[] = array('age', 'compare', 'compareValue' => $this->filter->max_borrower_age, 'operator' => '<=', 'on' => 'filter', 'message' => "Максимальный возраст заемщика -- {$this->filter->max_borrower_age} " . Yii::t('ipoteka', 'год|года|лет|год', $this->filter->min_borrower_age));
            $validators = $this->validatorList;
            foreach ($rules as $rule) {
                $validators->add(CValidator::createValidator($rule[1], $this, $rule[0], array_slice($rule, 2)));
            }
        }
        if (in_array($this->scenario, array('firstCreate', 'filter'))) {
            $this->summ = $this->objectCost - $this->initialFee;
            $dateFormatter = new DateTime($this->birthday);
            $this->age = $dateFormatter->diff(new DateTime)->y;
        }
        parent::onBeforeValidate($event);
    }



    public function filtration()
    {
        $this->scenario = 'filter';
        $this->filter = Filters::model()->organization(Yii::app()->user->organization_id)->objectTypeId($this->objectTypeId)->find();
        if (is_null($this->filter))
            return $this;
        if ($this->validate())
            return $this;
        else
            throw new CHttpException(403, 'Выбранная вами заявка не проходит фильтры вашего банка. Ваш банк такие заявки не рассматривает.');
//            throw new CHttpException(403, CHtml::errorSummary($this));

    }


    public function behaviors()
    {
        return array(
            'AutoTimestampBehavior'   => array(
                'class'           => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'date_created',
                'updateAttribute' => NULL,
            ),
            'AutoAuthorBehavior'      => array(
                'class'                 => 'application.components.behaviors.AuthorBehavior',
                'authorAttribute'       => 'created_by_user_id',
                'organizationAttribute' => 'created_by_organization_id',
            ),
            'AutoDateTimeFormatter'   => array(
                'class'     => 'application.components.behaviors.DateTimeFormatterBehavior',
                'attribute' => array(
                    array('birthday', 'on' => 'firstCreate, filter'),
                    array('passport_issue, marital_passport_issue, marital_birthday', 'on' => 'continueCreate.page1'),
                )
            ),
            'AutoUpperCase'           => array(
                'class'     => 'application.components.behaviors.UpperCaseBehavior',
                'attribute' => array('name', 'surname', 'patronymic')
            ),
            'ArrayToStringConversion' => array(
                'class'     => 'application.components.behaviors.ArrayToStringConversionBehavior',
                'delimiter' => ',',
                'attribute' => 'branch_production, branch_goverment, branch_service, branch_industry,
                                career_status, career_activity_character, offourwork_branch_production,
                                offourwork_branch_goverment, offourwork_branch_service, offourwork_branch_industry,
                                offourwork_career_status, offourwork_career_activity_character, initialfee_source',
            ),
        );
    }


    public static function getNameByType($sex)
    {
        $sex = intval($sex);
        $types = array(
            self::SEX_MAN   => 'Мужчина',
            self::SEX_WOMEN => 'Женщина',
        );
        return array_key_exists($sex, $types) ? $types[$sex] : 'Неизвестно';
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'requests';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            /*----firstCreate---*/
            array('surname, name, patronymic, initialFee, objectCost, objectTypeId, birthday', 'required', 'on' => 'firstCreate'),
            array('surname, name, patronymic, initialFee, objectCost, objectTypeId, birthday', 'filter', 'filter' => 'trim', 'on' => 'firstCreate'),
            array('surname, name, patronymic, summ, initialFee, objectTypeId, birthday', 'unsafe', 'on' => 'continueCreate'),
            array('birthday', 'date', 'format' => 'yyyy-MM-dd', 'allowEmpty' => FALSE, 'on' => 'firstCreate, filter'),
            array('birthday', 'DateDiffValidator', 'min' => 18, 'max' => 100, 'minDiffItem' => 'y', 'maxDiffItem' => 'y', 'tooMax' => 'Максимальный возраст заемщика {value} лет', 'tooMin' => 'Минимальный возраст заемщика {value} лет', 'on' => 'firstCreate'),
            array('objectCost', 'compare', 'compareAttribute' => 'initialFee', 'operator' => '>', 'allowEmpty' => FALSE, 'message' => '{attribute} должна быть больше первоначального взноса', 'on' => 'firstCreate, filter'),
            array('initialFee', 'compare', 'compareAttribute' => 'objectCost', 'allowEmpty' => FALSE, 'operator' => '<', 'message' => 'Первоначальный взнос должен быть меньше стоимости объекта', 'on' => 'firstCreate, filter'),
            array('sex', 'in', 'allowEmpty' => FALSE, 'range' => array(self::SEX_MAN, self::SEX_WOMEN), 'message' => 'Пожалуйста, выберите пол', 'on' => 'firstCreate'),
            array('objectTypeId', 'in', 'allowEmpty' => FALSE, 'range' => array_keys(ObjectType::getAllInArray()), 'message' => 'Пожалуйста, выберите тип недвижимости', 'on' => 'firstCreate, filter'),
            array('surname, patronymic, name', 'length', 'max' => 100, 'min' => 2, 'on' => 'firstCreate'),
            array('surname, patronymic, name', 'AlphaValidator', 'allowDash' => TRUE, 'on' => 'firstCreate'),
            array('summ', 'default', 'value' => $this->objectCost - $this->initialFee, 'on' => 'firstCreate, filter'),
            array('sex, passport_seria, passport_number, objectTypeId, initialFee, summ, objectCost', 'numerical', 'integerOnly' => TRUE),

            /*---page1---*/
            array('passport_issue', 'DateDiffValidator', 'min' => 0, 'max' => 50, 'minDiffItem' => 'd', 'maxDiffItem' => 'y', 'tooMax' => 'Паспорт не может быть выдан больше {value} лет назад', 'on' => 'continueCreate.page1'),
            array('passport_issue, marital_birthday, marital_passport_issue', 'date', 'format' => 'yyyy-MM-dd', 'on' => 'continueCreate.page1'),
            array('birthday_place, mobile_phone, citizenship', 'length', 'max' => 250, 'on' => 'continueCreate.page1'),
            array('passport_seria, passport_number, birthday_place, citizenship, passport_issued, passport_issue, mobile_phone', 'required', 'on' => 'continueCreate.page1'),
            array('education, passport_seria, passport_number, registration_index, registration_period, live_index, live_status, marital_status, marital_dependency, martial_children, marital_sex, marital_passport_seria, marital_passport_number', 'numerical', 'integerOnly' => TRUE, 'on' => 'continueCreate.page1'),
            array('home_phone, live_country, registration_country, live_area, registration_area, registration_edge, live_edge, registration_city, live_city, registration_settlement,  live_settlement,registration_house, live_house, registration_housing, live_housing, registration_apartment, registration_street, live_street, live_apartment, live_period, marital_surname, marital_name, marital_patronymic, marital_passport_issued, marital_work_post, marital_mobile_phone, marital_workplace, marital_work_phone, contact_surname, contact_name, contact_patronymic, contact_home_phone', 'length', 'max' => 50, 'on' => 'continueCreate.page1'),

            /*---page2---*/
            array('branch_other', 'length', 'max' => 250, 'on' => 'continueCreate.page2'),
            array('branch_production, employe_fullname, branch_service, branch_goverment, branch_industry, workplace_area, workplace_country, workplace_holding, workplace_edge, workplace_city, workplace_street, workplace_setllement, workplace_housing, workplace_office, workplace_legal_form, workplace_phone, workplace_phone_addition, workplace_fax, workplace_site, career_status, career_activity_character, career_experience_start, career_experience_current_start, career_experience_direction_start, career_post, career_email', 'length', 'max' => 200, 'on' => 'continueCreate.page2'),
            array('employe_inn, employe_ogrn, workplace_index, workplace_type_commercial, workplace_type_goverment, workplace_type_foreign, workplace_employers, workplace_age, career_character', 'numerical', 'integerOnly' => TRUE, 'on' => 'continnueCreate.page2', 'on' => 'continueCreate.page2'),

            /*---page3---*/
            array('earings_main_summ, earings_currency, earings_payment, earings_alimony, earings_regular_1_source, earings_regular_2_source, earings_regular_3_source, cars_model', 'length', 'max' => 200, 'on' => 'continueCreate.page3'),
            array('cars_purchase_date', 'length', 'max' => 7, 'on' => 'continueCreate.page3'),
            array('cars_registration_number,', 'length', 'max' => 10, 'on' => 'continueCreate.page3'),
            array('realestate_plot_address, realestate_condo_address, realestate_cottege_address, realestate_other_name, realestate_other_address', 'length', 'max' => 250, 'on' => 'continueCreate.page3'),
            array('earings_regular_1_summ, earings_regular_1_currency, earings_regular_2_summ, earings_regular_2_currency, earings_regular_3_summ, earings_regular_3_currency, realestate_type_cottege, realestate_type_condo, realestate_type_plot, realestate_plot_get, realestate_plot_occupancy, realestate_plot_square, realestate_condo_get, realestate_condo_occupancy, realestate_condo_square, realestate_cottege_get, realestate_cottege_occupancy, realestate_cottege_square, realestate_type_other, realestate_other_get, realestate_other_occupancy, realestate_other_square, cars_number, cars_get', 'numerical', 'integerOnly' => TRUE, 'on' => 'continueCreate.page3'),
            array('cars_year', 'length', 'max' => 4, 'on' => 'continueCreate.page3'),
            array('cars_year', 'date', 'format' => 'yyyy', 'on' => 'continueCreate.page3'),

            /*---page4---*/
            array('credit_1_creditor, credit_2_creditor, credit_3_creditor', 'length', 'max' => 250, 'on' => 'continueCreate.page4'),
            array('credit_1, credit_2, credit_3, credit_1_summ, credit_2_summ, credit_3_summ, credit_1_currency, credit_2_currency, credit_3_currency, credit_1_type, credit_2_type, credit_3_type, credit_1_month_summ, credit_2_month_summ, credit_3_month_summ, credit_1_expired, credit_2_expired, credit_3_expired, card_1, card_1_payment_system, card_1_type, card_1_limit, card_1_currency, card_2, card_2_payment_system, card_2_type, card_2_limit, card_2_currency, card_3, card_3_payment_system, card_3_type, card_3_limit, card_3_currency', 'numerical', 'integerOnly' => TRUE, 'on' => 'continueCreate.page4'),
            array('credit_1_receipt_date, credit_2_receipt_date, credit_3_receipt_date', 'length', 'max' => 7, 'on' => 'continueCreate.page4'),

            /*---page5---*/
            array('offourwork_availability, offourwork_employe_inn, offourwork_employe_ogrn, offourwork_workplace_index, offourwork_workplace_type_commercial, offourwork_workplace_type_goverment, offourwork_workplace_type_foreign, offourwork_workplace_employers, offourwork_workplace_age, offourwork_career_character', 'numerical', 'integerOnly' => TRUE, 'on' => 'continueCreate.page5'),
            array('offourwork_employe_fullname, offourwork_workplace_area, offourwork_workplace_country, offourwork_workplace_edge, offourwork_workplace_city, offourwork_workplace_holding, offourwork_workplace_street, offourwork_workplace_setllement, offourwork_workplace_housing, offourwork_workplace_office, offourwork_workplace_legal_form, offourwork_workplace_phone, offourwork_workplace_phone_addition, offourwork_workplace_fax, offourwork_workplace_site, offourwork_branch_production, offourwork_branch_goverment, offourwork_branch_service, offourwork_branch_industry, offourwork_career_status, offourwork_career_activity_character, offourwork_career_experience_start, offourwork_career_post, offourwork_career_email', 'length', 'max' => 200, 'on' => 'continueCreate.page5'),

            /*---page6---*/
            array('acquired_realestate_type_other, acquired_realestate_address, acquired_realestate_region', 'length', 'max' => 250, 'on' => 'continueCreate.page6'),
            array('comment', 'length', 'max' => 1000, 'on' => 'continueCreate.page6'),
            array('initialfee_summ, initialfee_trade_in, initialfee_trade_in_cost_currency, acquired_realestate_type, acquired_realestate_market, acquired_realestate_construction, acquired_realestate_goal, acquired_realestate_summ_square, acquired_realestate_live_square, acquired_realestate_cost, acquired_realestate_cost_currency, created_by_user_id', 'numerical', 'integerOnly' => TRUE, 'on' => 'continueCreate.page6'),
            array('lastwork_fullname, lastwork_post, lastwork_experience, lastwork_pause, initialfee_source, initialfee_source_other, initialfee_trade_in_address, initialfee_trade_in_cost', 'length', 'max' => 200, 'on' => 'continueCreate.page6'),

            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date_type, date_from, date_to, fullName, surname, mobile_phone, patronymic, name, sex, birthday, birthday_place, citizenship, passport_seria, passport_number, passport_issue, passport_issued, created_by_user_id, date_created, status_id', 'safe', 'on' => 'search'),
        );
    }

    private function filterFormatDate($value)
    {
        if (CDateTimeParser::parse($value, 'yyyy-MM-dd'))
            return $value;
        $parser = CDateTimeParser::parse($value, 'dd.MM.yyyy');
        if ($parser === FALSE)
            return $value;
        return date('Y-m-d', $parser);
    }


    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            //---Other---//
            'organizationDecision'      => array(self::HAS_ONE, 'Decision', 'request_id', 'condition' => 'organizationDecision.organization_id=' . Yii::app()->user->organization_id),
            'decisions'                 => array(self::HAS_MANY, 'Decision', 'request_id'),
            'comments'                  => array(self::HAS_MANY, 'Comments', 'request_id', 'order' => 'comments.date_created DESC'),
            'files'                     => array(self::HAS_MANY, 'Files', 'request_id'),
            'author'                    => array(self::BELONGS_TO, 'Users', 'created_by_user_id'),
            'commentCount'              => array(self::STAT, 'Comments', 'request_id'),
            'type'                      => array(self::BELONGS_TO, 'ObjectType', 'objectTypeId'),
            'status'                    => array(self::BELONGS_TO, 'Status', 'status_id'),
            'statusHistory'             => array(self::HAS_MANY, 'StatusHistory', 'request_id', 'order' => 'statusHistory.date_created ASC'),
            'statusHistoryOrganization' => array(self::HAS_MANY, 'StatusHistory', 'request_id', 'order' => 'statusHistoryOrganization.date_created ASC', 'condition' => 'statusHistoryOrganization.organization_id=' . Yii::app()->user->organization_id),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'                                   => 'Номер заявки',
            'surname'                              => 'Фамилия',
            'patronymic'                           => 'Отчество',
            'name'                                 => 'Имя',
            'sex'                                  => 'Пол',
            'summ'                                 => 'Сумма ипотеки',
            'objectCost'                           => 'Стоимость объекта',
            'birthday'                             => 'Дата рождения',
            'birthday_place'                       => 'Место рождения',
            'citizenship'                          => 'Гражданство',
            'passport_seria'                       => 'Серия паспорта',
            'passport_number'                      => 'Номер паспорта',
            'passport_issue'                       => 'Дата выдачи паспорта',
            'passport_issued'                      => 'Орган, выдавший паспорт',
            'mobile_phone'                         => 'Мобильный телефон',
            'home_phone'                           => 'Домашний телефон',
            'date_created'                         => 'Дата создания заявки',
            'created_by_user_id'                   => 'Создано пользователем',
            'objectTypeId'                         => 'Тип объекта',
            'initialFee'                           => 'П/взнос',
            'status'                               => 'Статус заявки',
            'age'                                  => 'Возраст',
            'fullName'                             => 'ФИО',
            'registration_index'                   => 'Индекс',
            'registration_country'                 => 'Страна',
            'registration_area'                    => 'Область',
            'registration_edge'                    => 'Район',
            'registration_settlement'              => 'Населенный пункт',
            'registration_city'                    => 'Город',
            'registration_street'                  => 'Улица',
            'registration_house'                   => 'Дом',
            'registration_housing'                 => 'Строение, корпус',
            'registration_apartment'               => 'Квартира',
            'registration_period'                  => 'Срок постоянной регистрации',
            'live_index'                           => 'Индекс',
            'live_country'                         => 'Страна',
            'live_area'                            => 'Область',
            'live_edge'                            => 'Район',
            'live_city'                            => 'Город',
            'live_settlement'                      => 'Населенный пункт',
            'live_street'                          => 'Улица',
            'live_house'                           => 'Дом',
            'live_housing'                         => 'Строение, корпус',
            'live_apartment'                       => 'Квартира',
            'live_period'                          => 'Срок проживания по фактическому адресу',
            'live_status'                          => 'Статус недвижимости по месту проживания',
            'education'                            => 'Образование',
            'marital_status'                       => 'Семейный статус',
            'marital_dependency'                   => 'Число лиц на иждивении',
            'martial_children'                     => 'из них детей',
            'marital_surname'                      => 'Фамилия',
            'marital_name'                         => 'Имя',
            'marital_patronymic'                   => 'Отчество',
            'marital_sex'                          => 'Пол',
            'marital_birthday'                     => 'Дата рождения',
            'marital_birthplace'                   => 'Место рождения',
            'marital_passport_seria'               => 'Серия',
            'marital_passport_number'              => 'Номер',
            'marital_passport_issue'               => 'Дата выдачи',
            'marital_passport_issued'              => 'Кем выдан',
            'marital_work_phone'                   => 'Служебный телефон',
            'marital_mobile_phone'                 => 'Мобильный телефон',
            'marital_workplace'                    => 'Место работы',
            'marital_work_post'                    => 'Должность',
            'contact_surname'                      => 'Фамилия',
            'contact_name'                         => 'Имя',
            'contact_patronymic'                   => 'Отчество',
            'contact_home_phone'                   => 'Стационарный телефон по адресу фактического проживания',
            'employe_inn'                          => 'ИНН',
            'employe_ogrn'                         => 'ОГРН',
            'employe_fullname'                     => 'Полное название компании-работодателя',
            'workplace_index'                      => 'Индекс',
            'workplace_area'                       => 'Область',
            'workplace_country'                    => 'Страна',
            'workplace_edge'                       => 'Район',
            'workplace_city'                       => 'Город',
            'workplace_street'                     => 'Улица',
            'workplace_setllement'                 => 'Населенный пункт',
            'workplace_housing'                    => 'Строение, корпус',
            'workplace_office'                     => 'Офис',
            'workplace_holding'                    => 'Принадлежность к холдингу (группе компаний)',
            'workplace_type_commercial'            => 'Коммерческая',
            'workplace_type_goverment'             => 'С участием государства',
            'workplace_type_foreign'               => 'С участием иностранного капитала',
            'workplace_legal_form'                 => 'Организационно-правовая форма компании',
            'workplace_employers'                  => 'Количство сотрудников в компании-работодателе',
            'workplace_age'                        => 'Сколько лет компании работодателю',
            'workplace_phone'                      => 'Контактный телефон',
            'workplace_phone_addition'             => 'доб.',
            'workplace_fax'                        => 'Факс',
            'workplace_site'                       => 'Сайт',
            'branch_production'                    => 'Производство',
            'branch_goverment'                     => 'Государственная служба',
            'branch_service'                       => 'Услуги',
            'branch_industry'                      => 'Добыча полезных ископаемых',
            'branch_other'                         => 'Прочее',
            'career_status'                        => 'Социальный статус',
            'career_activity_character'            => 'Характер вашей деятельности',
            'career_experience_start'              => 'Начало общего трудового стажа',
            'career_experience_current_start'      => 'Начало работы на текущем месте',
            'career_experience_direction_start'    => 'Начало деятельности в данном направлении/сфере',
            'career_post'                          => 'Должность',
            'career_character'                     => 'Характер должности',
            'career_email'                         => 'Служебный e-mail',
            'earings_main_summ'                    => 'Сумма среднемесячного дохода по основному месту работы',
            'earings_currency'                     => 'Валюта',
            'earings_payment'                      => 'Порядок выплаты',
            'earings_alimony'                      => 'Сумма ежемесячных расходов на алиментные платежи',
            'earings_regular_1_source'             => 'Источник',
            'earings_regular_1_summ'               => 'Сумма',
            'earings_regular_1_currency'           => 'Валюта',
            'earings_regular_2_source'             => 'Источник',
            'earings_regular_2_summ'               => 'Сумма',
            'earings_regular_2_currency'           => 'Валюта',
            'earings_regular_3_source'             => 'Источник',
            'earings_regular_3_summ'               => 'Сумма',
            'earings_regular_3_currency'           => 'Валюта',
            'realestate_type_cottege'              => 'Индивидуальный дом (коттедж, дача)',
            'realestate_type_condo'                => 'Квартира в многоквартирном доме',
            'realestate_type_plot'                 => 'Земельный участок без строений',
            'realestate_plot_get'                  => 'Способ получения',
            'realestate_plot_address'              => 'Адрес',
            'realestate_plot_occupancy'            => 'Время владения(лет)',
            'realestate_plot_square'               => 'Общая площадь',
            'realestate_condo_get'                 => 'Способ получения',
            'realestate_condo_address'             => 'Адрес',
            'realestate_condo_occupancy'           => 'Время владения(лет)',
            'realestate_condo_square'              => 'Общая площадь',
            'realestate_cottege_get'               => 'Способ получения',
            'realestate_cottege_address'           => 'Адрес',
            'realestate_cottege_occupancy'         => 'Время владения(лет)',
            'realestate_cottege_square'            => 'Общая площадь',
            'realestate_type_other'                => 'Иное',
            'realestate_other_name'                => 'Иное(название)',
            'realestate_other_get'                 => 'Способ получения',
            'realestate_other_address'             => 'Адрес',
            'realestate_other_occupancy'           => 'Время владения(лет)',
            'realestate_other_square'              => 'Общая площадь',
            'cars_number'                          => 'Количество автомашин в собственности',
            'cars_model'                           => 'Марка и модель',
            'cars_purchase_date'                   => 'Дата приобретения последней автомашины',
            'cars_year'                            => 'Год выпуска',
            'cars_registration_number'             => 'Гос. регистрационный номер',
            'cars_get'                             => 'Способ получения',
            'credit_1'                             => 'Кредит 1',
            'credit_2'                             => 'Кредит 2',
            'credit_3'                             => 'Кредит 3',
            'credit_1_creditor'                    => 'Банк-Кредитор',
            'credit_2_creditor'                    => 'Банк-Кредитор',
            'credit_3_creditor'                    => 'Банк-Кредитор',
            'credit_1_summ'                        => 'Сумма кредита',
            'credit_2_summ'                        => 'Сумма кредита',
            'credit_3_summ'                        => 'Сумма кредита',
            'credit_1_currency'                    => 'Валюта кредита',
            'credit_2_currency'                    => 'Валюта кредита',
            'credit_3_currency'                    => 'Валюта кредита',
            'credit_1_type'                        => 'Тип кредита',
            'credit_2_type'                        => 'Тип кредита',
            'credit_3_type'                        => 'Тип кредита',
            'credit_1_receipt_date'                => 'Дата получения',
            'credit_2_receipt_date'                => 'Дата получения',
            'credit_3_receipt_date'                => 'Дата получения',
            'credit_1_month_summ'                  => 'Сумма ежемесячного платежа по кредиту',
            'credit_2_month_summ'                  => 'Сумма ежемесячного платежа по кредиту',
            'credit_3_month_summ'                  => 'Сумма ежемесячного платежа по кредиту',
            'credit_1_expired'                     => 'Наличие просрочек платежей сыше 30 дней',
            'credit_2_expired'                     => 'Наличие просрочек платежей сыше 30 дней',
            'credit_3_expired'                     => 'Наличие просрочек платежей сыше 30 дней',
            'card_1'                               => 'Карта 1',
            'card_1_payment_system'                => 'Платежная система',
            'card_1_type'                          => 'Тип',
            'card_1_limit'                         => 'Кредитный лимит',
            'card_1_currency'                      => 'Валюта кредитного лимита',
            'card_2'                               => 'Карта 2',
            'card_2_payment_system'                => 'Платежная система',
            'card_2_type'                          => 'Тип',
            'card_2_limit'                         => 'Кредитный лимит',
            'card_2_currency'                      => 'Валюта кредитного лимита',
            'card_3'                               => 'Карта 3',
            'card_3_payment_system'                => 'Платежная система',
            'card_3_type'                          => 'Тип',
            'card_3_limit'                         => 'Кредитный лимит',
            'card_3_currency'                      => 'Валюта кредитного лимита',
            'offourwork_availability'              => 'Работа по совместительству',
            'offourwork_employe_inn'               => 'ИНН',
            'offourwork_employe_ogrn'              => 'ОГРН',
            'offourwork_employe_fullname'          => 'Полное название компании-работодателя',
            'offourwork_workplace_index'           => 'Индекс',
            'offourwork_workplace_area'            => 'Область',
            'offourwork_workplace_country'         => 'Страна',
            'offourwork_workplace_edge'            => 'Район',
            'offourwork_workplace_city'            => 'Город',
            'offourwork_workplace_setllement'      => 'Населенный пункт',
            'offourwork_workplace_street'          => 'Улица',
            'offourwork_workplace_housing'         => 'Строение, корпус',
            'offourwork_workplace_office'          => 'Офис',
            'offourwork_workplace_holding'         => 'Принадлежность к холиднгу (группе компаний)',
            'offourwork_workplace_type_commercial' => 'Коммерческая',
            'offourwork_workplace_type_goverment'  => 'С участием государства',
            'offourwork_workplace_type_foreign'    => 'С участием иностранного капитала',
            'offourwork_workplace_legal_form'      => 'Организационно-правовая форма компании',
            'offourwork_workplace_employers'       => 'Количество сотрудников в компании-работодателе',
            'offourwork_workplace_age'             => 'Сколько лет компании-работодателю',
            'offourwork_workplace_phone'           => 'Контактный телефон',
            'offourwork_workplace_phone_addition'  => 'доб.',
            'offourwork_workplace_fax'             => 'Факс',
            'offourwork_workplace_site'            => 'Сайт',
            'offourwork_branch_production'         => 'Производство',
            'offourwork_branch_goverment'          => 'Государственная служба',
            'offourwork_branch_service'            => 'Услуги',
            'offourwork_branch_industry'           => 'Добыча полезных ископаемых',
            'offourwork_branch_other'              => 'Прочее',
            'offourwork_career_status'             => 'Социальный статус',
            'offourwork_career_activity_character' => 'Характер вашей деятельности',
            'offourwork_career_experience_start'   => 'Начало работы на текущем месте',
            'offourwork_career_post'               => 'Должность',
            'offourwork_career_character'          => 'Характер должности',
            'offourwork_career_email'              => 'Служебный e-mail',
            'lastwork_fullname'                    => 'Полное название компании-работодателя',
            'lastwork_post'                        => 'Должность',
            'lastwork_experience'                  => 'Непрерывный стаж работы',
            'lastwork_pause'                       => 'Если прирывался, укажите причину',
            'initialfee_source'                    => 'Источник первоначального взноса',
            'initialfee_summ'                      => 'Сумма первоначального взноса',
            'initialfee_source_other'              => 'Прочее',
            'initialfee_trade_in'                  => 'Встречная продажа квартиры, находящейся в собственности',
            'initialfee_trade_in_address'          => 'Адрес продоваемой квартиры',
            'initialfee_trade_in_cost'             => 'Стоимость продаваемой квартиры',
            'initialfee_trade_in_cost_currency'    => 'Валюта',
            'acquired_realestate_type'             => 'Тип объекта недвижимости',
            'acquired_realestate_type_other'       => 'Иное',
            'acquired_realestate_market'           => 'Рынок',
            'acquired_realestate_construction'     => 'Постройка',
            'acquired_realestate_goal'             => 'Цель приобретения',
            'acquired_realestate_address'          => 'Адрес приобретаемой/закладываемой недвижимости',
            'acquired_realestate_region'           => 'Регион',
            'acquired_realestate_summ_square'      => 'Общая площадь',
            'acquired_realestate_live_square'      => 'Жилая площадь',
            'acquired_realestate_cost'             => 'Стоимость приобретаемого/закладываемого объекта',
            'acquired_realestate_cost_currency'    => 'Валюта',
            'comment'                              => 'Комментарий агента',
            'status_id'                            => 'Статус заявки'
        );
    }

    public function counter()
    {
        $criteria = new CDbCriteria;
        $criteria->select = FALSE;
        switch (Yii::app()->user->organizationType) {
            case Organizations::TYPE_ADMIN:
                if ($this->status_id) {
                    $criteria->with[] = 'decisions';
                    $criteria->select = 'decisions.status_id';
                    $criteria->compare('decisions.status_id', $this->status_id);
                }
                break;
            case Organizations::TYPE_AGENT:
                if (Yii::app()->user->roleId == Roles::ROLE_AGENT_ADMIN) {
                    $staff = Users::model()->organization(Yii::app()->user->organization_id)->findAll();
                    $in = array();
                    foreach ($staff as $one) {
                        $in[] = $one->id;
                    }
                    $criteria->compare('created_by_user_id', $in);
                } else
                    $criteria->compare('created_by_user_id', $this->created_by_user_id);
                if ($this->status_id) {
                    if ($this->status_id == Requests::STATUS_DRAFT) {
                        $criteria->compare('t.status_id', $this->status_id);
                    } else {
                        $criteria->with[] = 'decisions';
                        $criteria->select = 'decisions.status_id';
                        $criteria->compare('decisions.status_id', $this->status_id);
                    }
                }
                break;
            case Organizations::TYPE_BANK:
                $filters = Filters::model()->cache(3600, new CDbCacheDependency('SELECT MAX(date_created) FROM filters WHERE organization_id=' . Yii::app()->user->organization_id))->organization(Yii::app()->user->organization_id)->findAll();
                $objectTypes = ObjectType::getAllInArray();

                foreach ($filters as $filter) {
                    if (array_key_exists($filter->objectTypeId, $objectTypes))
                        unset($objectTypes[$filter->objectTypeId]);
                    $condition = "objectTypeId=$filter->objectTypeId AND summ>=$filter->min_summ AND summ<=$filter->max_summ AND age>=$filter->min_borrower_age AND age<=$filter->max_borrower_age AND initialFee>=(summ*$filter->fee/100)";
                    $criteria->addCondition($condition, 'OR');
                }
                $criteria->addInCondition("t.objectTypeId", array_keys($objectTypes), 'OR');
                $condition = 't.status_id!=' . Requests::STATUS_DRAFT;
                $criteria->addCondition($condition);
                if ($this->status_id) {
                    $criteria->with[] = 'organizationDecision';
                    $criteria->select = 'organizationDecision.status_id';
                    $criteria->compare('organizationDecision.status_id', $this->status_id);
                }
                break;
        }
        return new CActiveDataProvider($this, array(
            'criteria'   => $criteria,
            'pagination' => array(
                'pageSize' => 20
            ),
        ));
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria->with = array('status', 'type');
        $criteria->together = TRUE;
        $criteria->select = array('t.id', 't.fullName', 't.objectTypeId', 't.date_created', 't.status_id');
        switch (Yii::app()->user->organizationType) {
            case Organizations::TYPE_ADMIN:
                if ($this->status_id) {
                    $criteria->with[] = 'decisions';
                    $criteria->compare('decisions.status_id', $this->status_id);
                }
                break;
            case Organizations::TYPE_AGENT:
                if (Yii::app()->user->roleId == Roles::ROLE_AGENT_ADMIN) {
                    $staff = Users::model()->organization(Yii::app()->user->organization_id)->findAll();
                    $in = array();
                    foreach ($staff as $one) {
                        $in[] = $one->id;
                    }
                    $criteria->compare('created_by_user_id', $in);
                } else
                    $criteria->compare('created_by_user_id', $this->created_by_user_id);
                if ($this->status_id) {
                    $criteria->with[] = 'decisions';
                    $criteria->compare('decisions.status_id', $this->status_id);
                }
                break;
            case Organizations::TYPE_BANK:
                $filters = Filters::model()->organization(Yii::app()->user->organization_id)->findAll();
                $objectTypes = ObjectType::getAllInArray();
                foreach ($filters as $filter) {
                    if (array_key_exists($filter->objectTypeId, $objectTypes))
                        unset($objectTypes[$filter->objectTypeId]);
                    $condition = "objectTypeId=$filter->objectTypeId AND summ>=$filter->min_summ AND summ<=$filter->max_summ AND age>=$filter->min_borrower_age AND age<=$filter->max_borrower_age AND initialFee>=(summ*$filter->fee/100)";
                    $criteria->addCondition($condition, 'OR');
                }
                $criteria->addInCondition("t.objectTypeId", array_keys($objectTypes), 'OR');
                $condition = 't.status_id!=' . Requests::STATUS_DRAFT;
                $criteria->addCondition($condition);
                if ($this->status_id) {
                    $criteria->with[] = 'organizationDecision';
                    $criteria->compare('organizationDecision.status_id', $this->status_id);
                }
        }
        switch ($this->date_type) {
            case self::DATE_TYPE_INTERVAL:
                if (!empty($this->date_from))
                    $criteria->compare('t.date_created', '>=' . $this->filterFormatDate($this->date_from), TRUE);
                if (!empty($this->date_to))
                    $criteria->compare('t.date_created', '<=' . $this->filterFormatDate($this->date_to), TRUE);
                break;
            case self::DATE_TYPE_MONTH:
                $criteria->compare('t.date_created', date('Y-m'), TRUE);
                break;
            case self::DATE_TYPE_TODAY:
                $criteria->compare('t.date_created', date('Y-m-d'), TRUE);
                break;
            case self::DATE_TYPE_YESTERDAY:
                $criteria->compare('t.date_created', date('Y-m-d', strtotime('yesterday')), TRUE);
                break;
            case self::DATE_TYPE_WEEK:
                $time = time();
                $criteria->compare('t.date_created', ">=" . date('Y-m-d', $time - ($time - 345600) % 604800), TRUE);
                break;
            case self::DATE_TYPE_QUARTER:
                $c = date('n');
                if ($m = intval(($c + 2) / 3) == 1)
                    $m = "01";
                elseif ($m = intval(($c + 2) / 3) == 2)
                    $m = "04"; elseif ($m = intval(($c + 2) / 3) == 3)
                    $m = "07"; elseif ($m = intval(($c + 2) / 3) == 2)
                    $m = "10";
                $criteria->compare('t.date_created', ">=2012-$m-01", TRUE);
                break;

        }
        $criteria->compare('t.id', $this->id);
        if ($this->fullName)
            $criteria->compare('fullName', $this->fullName, TRUE);
        if ($this->sex)
            $criteria->compare('sex', $this->sex);
        if ($this->objectTypeId)
            $criteria->compare('objectTypeId', $this->objectTypeId);
        $criteria->compare('birthday', $this->birthday, TRUE);
        $criteria->compare('birthday_place', $this->birthday_place, TRUE);
        $criteria->compare('citizenship', $this->citizenship, TRUE);
        $criteria->compare('passport_seria', $this->passport_seria);
        $criteria->compare('passport_number', $this->passport_number);
        $criteria->compare('passport_issue', $this->passport_issue, TRUE);
        $criteria->compare('passport_issued', $this->passport_issued, TRUE);
        $criteria->compare('mobile_phone', $this->mobile_phone, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria'   => $criteria,
            'pagination' => array(
                'pageSize' => 20
            ),
        ));
    }
}