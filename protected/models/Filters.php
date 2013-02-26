<?php

/**
 * This is the model class for table "filters".
 *
 * The followings are the available columns in table 'filters':
 * @property integer $id
 * @property integer $organization_id
 * @property integer $fee
 * @property integer $interest_rate
 * @property integer $min_period
 * @property integer $max_period
 * @property integer $min_borrower_age
 * @property integer $max_borrower_age
 *
 * The followings are the available model relations:
 * @property Organizations $organization
 * @property Organizations $organizations
 */
class Filters extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
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

    public function objectTypeId($type)
    {
        $this->dbCriteria->mergeWith(array('condition'=>'objectTypeId='.$type));
        return $this;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fee, interest_rate, min_period, max_period, min_borrower_age, max_borrower_age', 'numerical', 'integerOnly' => TRUE),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('organization_id, fee, interest_rate, min_period, max_period, min_borrower_age, max_borrower_age', 'safe', 'on' => 'search'),
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
            'organization' => array(self::BELONGS_TO, 'Organizations', 'organization_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'organization_id' => 'Организация',
            'fee' => 'Взнос',
            'interest_rate' => 'Ставка',
            'min_period' => 'Минимальный срок',
            'max_period' => 'Максимальный срок',
            'min_borrower_age' => 'Минимальный возраст заемщика',
            'max_borrower_age' => 'Максимальный возраст заемщика',
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
        $criteria->compare('fee', $this->fee);
        $criteria->compare('interest_rate', $this->interest_rate);
        $criteria->compare('min_period', $this->min_period);
        $criteria->compare('max_period', $this->max_period);
        $criteria->compare('min_borrower_age', $this->min_borrower_age);
        $criteria->compare('max_borrower_age', $this->max_borrower_age);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}