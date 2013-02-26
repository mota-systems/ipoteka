<?php

/**
 * This is the model class for table "organizations".
 *
 * The followings are the available columns in table 'organizations':
 * @property integer $id
 * @property integer $type
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Comments[] $comments
 * @property Filters[] $filters
 * @property Users[] $users
 */
class Organizations extends CActiveRecord
{
    const TYPE_ALL = 0;
    const TYPE_AGENT = 1;
    const TYPE_BANK = 2;
    const ALL_IN_ARRAY_CACHE = 'organizations_in_array';
    const BANK_IN_ARRAY_CACHE = 'organizations_banks_in_array';

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Organizations the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function scopes()
    {
        return array(
            'banks'=>array(
                'condition'=>'type='.self::TYPE_BANK,
            ),
        );
    }

    public static function getNameByType($type)
    {
        $type = intval($type);
        $types = array(
            self::TYPE_ALL => 'Все',
            self::TYPE_AGENT => 'Агент',
            self::TYPE_BANK => 'Банк',
        );
        if (array_key_exists($type, $types))
            return $types[$type];
        return FALSE;
    }

    public static function get_all_in_array()
    {
        if (($array = Yii::app()->cache->get(self::ALL_IN_ARRAY_CACHE)) === FALSE) {
            $result = self::model()->findAll();
            $array = array();
            foreach ($result as $one) {
                $array[$one->id] = $one->name;
            }
            Yii::app()->cache->set(self::ALL_IN_ARRAY_CACHE, $array);
        }
        return $array;
    }

    public static function get_banks()
    {
        if (($array = Yii::app()->cache->get(self::BANK_IN_ARRAY_CACHE)) === FALSE) {
            $result = self::model()->findAll("type=" . self::TYPE_BANK);
            $array = array();
            foreach ($result as $one) {
                $array[$one->id] = $one->name;
            }
            Yii::app()->cache->set(self::BANK_IN_ARRAY_CACHE, $array);
        }
        return $array;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'organizations';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('type', 'numerical', 'integerOnly' => TRUE),
            array('name', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('type, name', 'safe', 'on' => 'search'),
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
            'comments' => array(self::HAS_MANY, 'Comments', 'organization_id'),
            'filters' => array(self::HAS_MANY, 'Filters', 'organization_id'),
            'users' => array(self::HAS_MANY, 'Users', 'organization_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'type' => 'Тип организации',
            'name' => 'Название организации',
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
        if ($this->type)
            $criteria->compare('type', $this->type);
        $criteria->compare('name', $this->name, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}