<?php

/**
 * This is the model class for table "filters".
 *
 * The followings are the available columns in table 'filters':
 * @property integer       $id
 * @property integer       $organization_id
 * @property integer       $fee
 * @property integer       $interest_rate
 * @property integer       $min_period
 * @property integer       $max_period
 * @property integer       $min_borrower_age
 * @property integer       $max_borrower_age
 *
 * The followings are the available model relations:
 * @property Organizations $organization
 * @property Organizations $organizations
 */
class Filters extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className active record class name.
     *
     * @return Filters the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'filters';
    }

    public function organization($org_id)
    {
        $this->getDbCriteria()->mergeWith(array(
            'condition' => 'organization_id=:org_id',
            'params'    => array(':org_id' => $org_id),
        ));
        return $this;
    }

    public function objectTypeId($type)
    {
        $this->dbCriteria->mergeWith(array(
            'condition' => 'objectTypeId=:type',
            'params'    => array(':type' => $type),
        ));
        return $this;
    }

    public function onBeforeValidate($event)
    {
//        $validators = $this->getValidatorList();
//        $criteria = new CDbCriteria();
//        $criteria->condition = 'organization_id=:org';
//        if (Yii::app()->user->isAdmin())
//            $criteria->params = array(':org' => $this->organization_id);
//        else
//            $criteria->params = array(':org' => Yii::app()->user->organization_id);
//        $rule = array('objectTypeId', 'unique', 'className' => 'Filters', 'attributeName' => 'objectTypeId', 'criteria' => $criteria, 'on'=>'update');
//        $validators->add(CValidator::createValidator($rule[1], $this, $rule[0], array_slice($rule, 2)));

    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('interest_rate, min_period, max_period, min_borrower_age, max_borrower_age, min_summ, max_summ', 'numerical', 'integerOnly' => TRUE),
            array('objectTypeId, fee, min_summ, max_summ, min_borrower_age, max_borrower_age', 'required'),
            array('objectTypeId', 'exist', 'className' => 'ObjectType', 'attributeName' => 'id'),
            array('objectTypeId', 'available', 'on' => 'admin, update'),
            array('organization_id', 'exist', 'className' => 'Organizations', 'attributeName' => 'id', 'allowEmpty' => FALSE, 'on' => 'admin'),
            array('fee', 'numerical', 'min' => 0, 'max' => 100),
            array('min_borrower_age', 'numerical', 'min' => 18, 'max' => 150, 'tooSmall' => 'Ипотека дается только совершеннолетним! Минимальный возраст заемщика дожен быть больше 18 лет!'),
//            array('min_summ', 'compare', 'compareAttribute' => 'max_summ', 'operator' => '<'),
            array('max_summ', 'compare', 'compareAttribute' => 'min_summ', 'operator' => '>'),
//            array('min_borrower_age', 'compare', 'compareAttribute' => 'max_borrower_age', 'operator' => '<'),
            array('max_borrower_age', 'compare', 'compareAttribute' => 'min_borrower_age', 'operator' => '>'),

            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('organization_id, objectTypeId, fee, interest_rate, min_period, max_period, min_borrower_age, max_borrower_age, min_summ, max_summ', 'safe', 'on' => 'search'),
        );
    }

    public function available($attribute, $params)
    {
        Yii::app()->getModule('requests');
        $exists = CHtml::listData(Filters::model()->findAllByAttributes(array('organization_id' => $this->organization_id)), $attribute, 'objectType.type');
        $available = array_diff(ObjectType::getAllInArray(), $exists);
        if ($this->isNewRecord) {
            if (!array_key_exists($this->$attribute, $available))
                $this->addError($attribute, 'Такой фильтр уже существует, выберите другой.');
        } else {
            $old = self::model()->findByPk($this->id);
//            echo var_dump($available);
//            Yii::app()->end();
            if (!array_key_exists($this->$attribute, $available) AND $old->$attribute != $this->$attribute)
                $this->addError($attribute, 'Такой фильтр уже существует, выберите другой.');
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'organization' => array(self::BELONGS_TO, 'Organizations', 'organization_id'),
            'objectType'   => array(self::BELONGS_TO, 'ObjectType', 'objectTypeId')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'               => 'ID',
            'objectTypeId'     => 'Тип объекта',
            'organization_id'  => 'Организация',
            'fee'              => 'П/взнос, %',
            'interest_rate'    => 'Ставка',
            'min_period'       => 'Минимальный срок',
            'max_period'       => 'Максимальный срок',
            'min_summ'         => 'Минимальная сумма ипотеки, руб.',
            'max_summ'         => 'Максимальная сумма ипотеки, руб.',
            'min_borrower_age' => 'Минимальный возраст заемщика, лет',
            'max_borrower_age' => 'Максимальный возраст заемщика, лет',
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

        $criteria->compare('id', $this->id);
        $criteria->compare('organization_id', $this->organization_id);
        $criteria->compare('objectTypeId', $this->objectTypeId);

        $criteria->compare('fee', $this->fee);
        $criteria->compare('interest_rate', $this->interest_rate);
        $criteria->compare('min_period', $this->min_period);
        $criteria->compare('max_period', $this->max_period);
        $criteria->compare('min_summ', $this->min_summ);
        $criteria->compare('max_summ', $this->max_summ);
        $criteria->compare('min_borrower_age', $this->min_borrower_age);
        $criteria->compare('max_borrower_age', $this->max_borrower_age);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}