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
 * @property integer              $created_by_user_id
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
class Requests extends CActiveRecord
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

    //--Registration

    public $filter;
    private $fullName;


    public function getFullName()
    {
        return "$this->surname $this->name $this->patronymic";
    }

    public function setFullName($name)
    {
        $this->fullName = $name;
    }

//    public function onAfterFind($event){
//        $this->fullname = "$this->surname $this->name $this->patronymic";
//        parent::onAfterFind($event);
//    }

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


    public function onBeforeValidate($event)
    {
        if ($this->scenario == 'filter') {
            $rules[] = array('filter', 'required', 'message' => 'Не дает займы по выбранному типу объекта', 'on' => 'filter');
            $rules[] = array('summ', 'compare', 'compareValue' => $this->filter->min_summ, 'operator' => '>', 'on' => 'filter', 'message' => "Минимальная сумма ипотеки -- {$this->filter->min_summ} " . Yii::t('ipoteka', 'год|года|лет|год', $this->filter->min_summ));
            $rules[] = array('summ', 'compare', 'compareValue' => $this->filter->max_summ, 'operator' => '<', 'on' => 'filter', 'message' => "Максимальная сумма ипотеки -- {$this->filter->max_summ} " . Yii::t('ipoteka', 'год|года|лет|год', $this->filter->min_summ));
            $rules[] = array('age', 'compare', 'compareValue' => $this->filter->min_borrower_age, 'operator' => '>', 'on' => 'filter', 'message' => "Минимальный возраст заемщика -- {$this->filter->min_borrower_age} " . Yii::t('ipoteka', 'год|года|лет|год', $this->filter->min_summ));
            $rules[] = array('age', 'compare', 'compareValue' => $this->filter->max_borrower_age, 'operator' => '<', 'on' => 'filter', 'message' => "Максимальный возраст заемщика -- {$this->filter->max_borrower_age} " . Yii::t('ipoteka', 'год|года|лет|год', $this->filter->min_summ));
            $validators = $this->validatorList;
            foreach ($rules as $rule) {
                $validators->add(CValidator::createValidator($rule[1], $this, $rule[0], array_slice($rule, 2)));
            }
        }
        parent::onBeforeValidate($event);
    }

    public function onBeforeSave($event)
    {
        if ($this->scenario == 'firstCreate') {
            $this->summ = $this->objectCost - $this->initialFee;
            $dateFormatter = new DateTime($this->birthday);
            $this->age = $dateFormatter->diff(new DateTime)->y;
//            $this->fullname = "$this->surname $this->name $this->patronymic";
        }
        parent::onBeforeSave($event);
    }

//    public function afterFind()
//    {
////        if ($this->scenario != 'firstCreate') {
////            $formatter = new CDateFormatter('ru_ru');
////             $this->birthday = $formatter->formatDateTime($this->birthday, 'long', FALSE);
////        }
//////        if ($this->scenario == 'update') {
//////            $formatter = new CDateFormatter('ru_ru');
//////            $this->passport_issue = $formatter->formatDateTime($this->passport_issue, 'long', FALSE);
//////        }
//    }

    public function behaviors()
    {
        return array(
            'AutoTimestampBehavior' => array(
                'class'           => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'date_created',
                'updateAttribute' => 'date_created',
            ),
            'AutoAuthorBehavior'    => array(
                'class'           => 'application.components.behaviors.AuthorBehavior',
                'authorAttribute' => 'created_by_user_id',
            ),
            'AutoDateTimeFormatter' => array(
                'class'     => 'application.components.behaviors.DateTimeFormatterBehavior',
                'attribute' => array(
                    array('birthday', 'on' => 'firstCreate, filter'),
                    array('passport_issue', 'on' => 'continueCreate'),
                )
            ),
            'AutoUpperCase'         => array(
                'class'     => 'application.components.behaviors.UpperCaseBehavior',
                'attribute' => array('name', 'surname', 'patronymic')
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
            array('objectCost', 'compare', 'compareAttribute' => 'initialFee', 'operator' => '>', 'allowEmpty' => FALSE, 'message' => '{attribute} должна быть больше первоначального взноса', 'on' => 'firstCreate, filter'),
            array('initialFee', 'compare', 'compareAttribute' => 'objectCost', 'allowEmpty' => FALSE, 'operator' => '<', 'message' => 'Первоначальный взнос должен быть меньше стоимости объекта', 'on' => 'firstCreate, filter'),
            array('sex', 'in', 'allowEmpty' => FALSE, 'range' => array(self::SEX_MAN, self::SEX_WOMEN), 'message' => 'Пожалуйста, выберите пол', 'on' => 'firstCreate'),
            array('objectTypeId', 'in', 'allowEmpty' => FALSE, 'range' => array_keys(ObjectType::getAllInArray()), 'message' => 'Пожалуйста, выберите тип недвижимости', 'on' => 'firstCreate, filter'),
            array('surname, patronymic, name', 'length', 'max' => 100, 'min' => 2, 'on' => 'firstCreate'),
            array('surname, patronymic, name', 'AlphaValidator', 'allowDash' => TRUE, 'on' => 'firstCreate'),
            array('summ', 'default', 'value' => $this->objectCost - $this->initialFee, 'on' => 'firstCreate, filter'),

            array('sex, passport_seria, passport_number, objectTypeId, initialFee, summ, objectCost', 'numerical', 'integerOnly' => TRUE),
            array('passport_seria, passport_number, birthday_place, citizenship, passport_issued, passport_issue, mobile_phone', 'required', 'on' => 'continueCreate'),
            array('mobile_phone', 'safe', 'on' => 'continueCreate'),
            array('birthday_place, citizenship', 'length', 'max' => 250, 'min' => 2),
            array('passport_issued', 'length', 'max' => 255, 'min' => 5),
            array('birthday', 'date', 'format' => 'yyyy-MM-dd', 'allowEmpty' => FALSE, 'on' => 'firstCreate, filter'),
            array('passport_issue', 'date', 'format' => 'yyyy-MM-dd', 'on' => 'continueCreate'),
            array('passport_issue', 'DateDiffValidator', 'min' => 0, 'max' => 50, 'minDiffItem' => 'd', 'maxDiffItem' => 'y', 'tooMax' => 'Паспорт не может быть выдан больше {value} лет назад', 'on' => 'continueCreate'),
            array('birthday', 'DateDiffValidator', 'min' => 18, 'max' => 100, 'minDiffItem' => 'y', 'maxDiffItem' => 'y', 'tooMax' => 'Максимальный возраст заемщика {value} лет', 'tooMin' => 'Минимальный возраст заемщика {value} лет', 'on' => 'firstCreate'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, fullName, surname, mobile_phone, patronymic, name, sex, birthday, birthday_place, citizenship, passport_seria, passport_number, passport_issue, passport_issued, created_by_user_id, date_created', 'safe', 'on' => 'search'),
        );
    }


    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            // Registration period
            'registrationPeriod'             => array(self::BELONGS_TO, 'Vocabulary', 'registration_period', 'alias' => 'voc', 'condition' => 'voc.category=registration AND voc.column=period'),

            // Live Period
            'livePeriod'                     => array(self::BELONGS_TO, 'Vocabulary', 'registration_period', 'alias' => 'voc', 'condition' => 'voc.category=registration AND voc.column=period'),

            // Live Status
            'liveStatus'                     => array(self::BELONGS_TO, 'Vocabulary', 'live_tatus', 'alias' => 'voc', 'condition' => 'voc.category=live AND voc.column=status'),

            // Education
            'education'                      => array(self::BELONGS_TO, 'Vocabulary', 'education', 'alias' => 'voc', 'condition' => 'voc.category=education'),

            //  Marital Status
            'maritalStatus'                  => array(self::BELONGS_TO, 'Vocabulary', 'marital_status', 'alias' => 'voc', 'condition' => 'voc.category=marital AND voc.column=status'),

            // Workplace Legal Form
            'workplaceLegalForm'             => array(self::BELONGS_TO, 'Vocabulary', 'workplace_legal_form', 'alias' => 'voc', 'condition' => 'voc.category=workplace AND voc.column=legal_form'),

            //---Branch---//
            // Production
            'workplaceBranchProduction'      => array(self::BELONGS_TO, 'Vocabulary', 'branch_production', 'alias' => 'voc', 'condition' => 'voc.category=branch AND voc.column=production'),
            // Goverment
            'workplaceBranchGoverment'       => array(self::BELONGS_TO, 'Vocabulary', 'branch_goverment', 'alias' => 'voc', 'condition' => 'voc.category=branch AND voc.column=goverment'),
            // Service
            'workplaceBranchService'         => array(self::BELONGS_TO, 'Vocabulary', 'branch_service', 'alias' => 'voc', 'condition' => 'voc.category=branch AND voc.column=service'),
            // Industry
            'workplaceBranchIndustry'        => array(self::BELONGS_TO, 'Vocabulary', 'branch_industry', 'alias' => 'voc', 'condition' => 'voc.category=branch AND voc.column=industry'),

            //---Career---//
            // Status
            'careerStatus'                   => array(self::BELONGS_TO, 'Vocabulary', 'career_status', 'alias' => 'voc', 'condition' => 'voc.category=career AND voc.column=status'),
            // Activity
            'careerActivity'                 => array(self::BELONGS_TO, 'Vocabulary', 'career_activity', 'alias' => 'voc', 'condition' => 'voc.category=career AND voc.column=activity'),
            // Post
            'careerCharacter'                => array(self::BELONGS_TO, 'Vocabulary', 'career_character', 'alias' => 'voc', 'condition' => 'voc.category=career AND voc.column=post'),

            // Earings Currency
            'earingsCurrency'                => array(self::BELONGS_TO, 'Vocabulary', 'earings_currency', 'alias' => 'voc', 'condition' => 'voc.category=currency'),

            //---Realestate---//
            // Plot
            'realestatePlotGet'              => array(self::BELONGS_TO, 'Vocabulary', 'realestate_plot_get', 'alias' => 'voc', 'condition' => 'voc.category=realestate AND voc.column=get'),
            // Condo
            'realestateCondoGet'             => array(self::BELONGS_TO, 'Vocabulary', 'realestate_condo_get', 'alias' => 'voc', 'condition' => 'voc.category=realestate AND voc.column=get'),
            // Cottege
            'realestateCottegeGet'           => array(self::BELONGS_TO, 'Vocabulary', 'realestate_cottege_get', 'alias' => 'voc', 'condition' => 'voc.category=realestate AND voc.column=get'),

            // Cars Get
            'carsGet'                        => array(self::BELONGS_TO, 'Vocabulary', 'cars_get', 'alias' => 'voc', 'condition' => 'voc.category=cars AND voc.column=get'),

            //---Credit---//
            // Type
            'credit1Type'                    => array(self::BELONGS_TO, 'Vocabulary', 'credit_1_type', 'alias' => 'voc', 'condition' => 'voc.category=cars AND voc.column=get'),
            //TODO: Card Payment System
            //TODO: Card Type
            //TODO: Card Currency
            //TODO: InitialFee Source
            'initialFeeSource'               => array(self::BELONGS_TO, 'Vocabulary', 'initialfee_source', 'condition' => 'initialFeeSource.category=initialfee AND initialFeeSource.column=source'),
            //Initial Fee Currency
            'initialFeeCurrency'             => array(self::BELONGS_TO, 'Vocabulary', 'initialfee_trade_in_cost_currency', 'condition' => 'initialFeeCurrency.category=currency'),

            //---Acquired Realestate---//
            // Market
            'acquiredRealestateMarket'       => array(self::BELONGS_TO, 'Vocabulary', 'acquired_realestate_market', 'condition' => 'acquiredRealestateMarket.category=acquired_realestate AND acquiredRealestateMarket.column=market'),
            // Construction
            'acquiredRealestateConstruction' => array(self::BELONGS_TO, 'Vocabulary', 'acquired_realestate_construction', 'condition' => 'acquiredRealestateConstruction.category=acquired_realestate AND acquiredRealestateConstruction.column=construction'),
            // Type
            'acquiredRealestateType'         => array(self::BELONGS_TO, 'Vocabulary', 'acquired_realestate_type', 'condition' => 'acquiredRealestateType.category=acquired_realestate AND acquiredRealestateType.column=type'),
            // Goal
            'acquiredRealestateGoal'         => array(self::BELONGS_TO, 'Vocabulary', 'acquired_realestate_goal', 'condition' => 'acquiredRealestateGoal.category=acquired_realestate AND acquiredRealestateGoal.column=goal'),
            // Currency
            'acquiredRealestateCurrency'     => array(self::BELONGS_TO, 'Vocabulary', 'acquired_realestate_currency', 'condition' => 'acquiredRealestateCurrency.category=currency'),

            //---Other---//
            'organizationDecision'           => array(self::HAS_ONE, 'Decision', 'request_id', 'condition' => 'organizationDecision.organization_id=' . Yii::app()->user->organization_id),
            'decisions'                      => array(self::HAS_MANY, 'Decision', 'request_id'),
            'comments'                       => array(self::HAS_MANY, 'Comments', 'request_id', 'order' => 'comments.date_created DESC'),
            'files'                          => array(self::HAS_MANY, 'Files', 'request_id'),
            'author'                         => array(self::BELONGS_TO, 'Users', 'created_by_user_id'),
            'commentCount'                   => array(self::STAT, 'Comments', 'request_id'),
            'type'                           => array(self::BELONGS_TO, 'ObjectType', 'objectTypeId'),
            'status'                         => array(self::BELONGS_TO, 'Status', 'status_id'),
            'statusHistory'                  => array(self::HAS_MANY, 'StatusHistory', 'request_id', 'order' => 'date_created'),
            'statusHistoryOrganization'      => array(self::HAS_MANY, 'StatusHistory', 'request_id', 'order' => 'date_created ASC', 'condition' => 'statusHistoryOrganization.organization_id=' . Yii::app()->user->organization_id),
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
            'registration_setllement'              => 'Населенный пункт',
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
            'realestate_plot_occupancy'            => 'Время владения',
            'realestate_plot_square'               => 'Общая площадь',
            'realestate_condo_get'                 => 'Способ получения',
            'realestate_condo_address'             => 'Адрес',
            'realestate_condo_occupancy'           => 'Время владения',
            'realestate_condo_square'              => 'Общая площадь',
            'realestate_cottege_get'               => 'Способ получения',
            'realestate_cottege_address'           => 'Адрес',
            'realestate_cottege_occupancy'         => 'Время владения',
            'realestate_cottege_square'            => 'Общая площадь',
            'realestate_type_other'                => 'Иное',
            'realestate_other_name'                => 'Иное(название)',
            'realestate_other_get'                 => 'Способ получения',
            'realestate_other_address'             => 'Адрес',
            'realestate_other_occupancy'           => 'Время владения',
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
        );
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
        if (Yii::app()->user->organizationType != Organizations::TYPE_ADMIN) {
            if (Yii::app()->user->organizationType == Organizations::TYPE_AGENT) {
                if (Yii::app()->user->roleId == Users::ROLE_AGENT_ADMIN) {
                    $staff = Users::model()->organization(Yii::app()->user->organization_id)->findAll();
                    $in = array();
                    foreach ($staff as $one) {
                        $in[] = $one['id'];
                    }
                    $criteria->compare('created_by_user_id', $in);
                } else
                    $criteria->compare('created_by_user_id', $this->created_by_user_id);
            } elseif (Yii::app()->user->organizationType == Organizations::TYPE_BANK) {
                //TODO: Прикрутить прогон по процентам, срок ипотеки.
                $filters = Filters::model()->organization(Yii::app()->user->organization_id)->findAll();
                foreach ($filters as $filter) {
                    $condition = "objectTypeId=$filter->objectTypeId AND summ>$filter->min_summ AND summ<$filter->max_summ AND age>$filter->min_borrower_age AND age<$filter->max_borrower_age";
                    $criteria->addCondition($condition, 'OR');
                }
            }
        }
        if (!empty($this->fullName))
            /*  if (!empty($this->fullName)) {
                  //В фильтр id_author у нас есть возможность писать любой критерий поиска по имени, фамилии или отчеству
                  $criteria->condition = 'surname LIKE :aid
                                      OR name LIKE :aid
                                      OR patronymic LIKE :aid
                                      OR CONCAT(surname, " ", name, " ", patronymic) LIKE :aid';

                  if (!count($criteria->params)) {
                      $criteria->params = array();
                  }

                  $criteria->params[':aid'] = '%' . $this->fullName . '%';*/
//        if (!empty($this->fullName)) {
//        $criteria->compare('name', $this->fullName, TRUE, 'OR', FALSE);
//        $criteria->compare('surname', $this->fullName, TRUE, 'OR', FALSE);
//        $criteria->compare('patronymic', $this->fullName, TRUE, 'OR', FALSE);

//        }
//        $criteria->compare(new CDbExpression("CONCAT(surname, ' ', name, ' ', patronymic)"), $this->fullName, TRUE);
            $criteria->compare('id', $this->id);
//        $criteria->compare('surname', $this->surname, TRUE);
//        $criteria->compare('patronymic', $this->patronymic, TRUE);
//        $criteria->compare('name', $this->name, TRUE);
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
        $criteria->compare('date_created', $this->date_created, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria'   => $criteria,
            'pagination' => array(
                'pageSize' => 20
            ),
            /*'sort'     => array(
                'defaultOrder' => 't.id DESC',
                'attributes'   => array(
                    'id',
                    'objectTypeId',
                    'fullName' => array(
                        'asc'  => 't.surname ASC, t.name ASC, t.patronymic ASC',
                        'desc' => 't.surname DESC, t.name DESC, t.patronymic ASC',
                    ),
                ),
            ),*/
        ));
    }
}