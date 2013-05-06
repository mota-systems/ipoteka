<?php

/**
 * This is the model class for table "roles".
 *
 * The followings are the available columns in table 'roles':
 * @property integer $id
 * @property string  $name
 * @property string  $title
 *
 * The followings are the available model relations:
 * @property Users[] $users
 */
class Roles extends CActiveRecord
{
    const ALL_IN_ARRAY_CACHE = 'RolesInArray';
    const TYPE_ADMIN = 0;
    const TYPE_AGENT = 1;
    const TYPE_BANK = 2;
    const ROLE_ADMIN = 2;
    const ROLE_BANK_ADMIN = 3;
    const ROLE_BANK_MANAGER = 4;
    const ROLE_AGENT_ADMIN = 5;
    const ROLE_AGENT_MANAGER = 6;

    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className active record class name.
     *
     * @return Roles the static model class
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
        return 'roles';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(//			array('name', 'length', 'max'=>50),
//			array('title', 'length', 'max'=>150),
//			// The following rule is used by search().
            // Please remove those attributes that should not be searched.
//			array('id, name, title', 'safe', 'on'=>'search'),
        );
    }

    public static function getRolesInArray()
    {

        if (($array = Yii::app()->cache->get(self::ALL_IN_ARRAY_CACHE)) === FALSE) {
            $result = self::model()->findAll();
            $array = array();
            foreach ($result as $one) {
                $array[$one->id] = $one->title;
            }
            Yii::app()->cache->set(self::ALL_IN_ARRAY_CACHE, $array);
        }
        return $array;
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'users' => array(self::HAS_MANY, 'Users', 'role_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'    => 'ID',
            'name'  => 'Name',
            'title' => 'Уровень доступа',
        );
    }

}