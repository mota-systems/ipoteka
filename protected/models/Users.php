<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer       $id
 * @property integer       $organization_id
 * @property integer       $username
 * @property integer       $password
 * @property string        $phio
 * @property string        $work_phone
 * @property string        $mobile_phone
 *
 * The followings are the available model relations:
 * @property Comments[]    $comments
 * @property Requests[]    $requests
 * @property Requests      $id0
 * @property Organizations $organization
 */
class Users extends CActiveRecord
{
    const ROLE_GUEST = 'guest';
    const ROLE_AGENT_MANAGER = 'agentManager';
    const ROLE_AGENT_ADMIN = 'agentAdmin';
    const ROLE_BANK_MANAGER = 'bankManager';
    const ROLE_BANK_ADMIN = 'bankAdmin';
    const ROLE_ADMIN = 'admin';
    public $password_repeat;

    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className active record class name.
     *
     * @return Users the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getRole()
    {
        return $this->roles->name;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'users';
    }

    public function behaviors()
    {
        return array(
            'AutoTimestampBehavior' => array(
                'class'           => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'date_created',
            ),
           /* 'AutoUpperCase'         => array(
                'class'     => 'application.components.behaviors.UpperCaseBehavior',
                'attribute' => array('phio')
            ),*/
        );
    }


    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        switch (Yii::app()->user->roleId) {
            case (Users::ROLE_ADMIN):

                break;
            case (Users::ROLE_AGENT_ADMIN):
                break;
            case (Users::ROLE_BANK_ADMIN):
                break;
            default:
                break;
        }
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('organization_id', 'numerical', 'integerOnly' => TRUE),
            array('organization_id', 'exists', 'allowEmpty' => FALSE, 'className' => 'Organizations', 'attributeName' => 'id'),
            array('roleId', 'exists', 'allowEmpty' => FALSE, 'className' => 'Roles', 'attributeName' => 'id'),
            array('username', 'unique', 'allowEmpty' => FALSE, 'className' => 'Users', 'attributeName' => 'username', 'caseSensitive' => FALSE),
            array('username', 'FullAlphaValidator'),
            array('username', 'length', 'min' => 4, 'max' => 15, 'tooShort' => '{attribute} слишком короткое. Минимум - 5 символов', 'tooLong' => '{attribute} слишком длинное. Максимум - 15 символов'),
            array('organization_id, username, password, phio', 'required'),
//            array('password_repeat', 'required', 'on' => 'register'),
//            array('password', 'compare', 'compareAttribute'=>'password_repeat', 'on' => 'register'),
            array('phio', 'length', 'max' => 255),
            array('work_phone, mobile_phone', 'length', 'max' => 50),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('organization_id, username, phio, work_phone, mobile_phone, roleId', 'safe', 'on' => 'search'),
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
            'comments'     => array(self::HAS_MANY, 'Comments', 'created_by_user_id'),
            'requests'     => array(self::HAS_MANY, 'Requests', 'created_by_user_id'),
            'organization' => array(self::BELONGS_TO, 'Organizations', 'organization_id'),
            'roles'        => array(self::BELONGS_TO, 'Roles', 'roleId')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'              => 'ID',
            'organization_id' => 'Организация',
            'username'        => 'Имя пользователя',
            'password'        => 'Пароль',
            'phio'            => 'ФИО',
            'work_phone'      => 'Стационарный телефон',
            'mobile_phone'    => 'Мобильный телефон',
            'roleId'          => 'Права'
        );
    }

    public function onBeforeSave()
    {
        $this->password = crypt($this->password, UserIdentity::$salt);
    }

    //TODO: сделать что-то с паролем чтобы он не ебал мозг при редактировании

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
        $criteria = new CDbCriteria;

        if (Yii::app()->user->roleId == Roles::TYPE_ADMIN) {
            if ($this->organization_id) {
                $criteria->compare('organization_id', $this->organization_id);
            }
        } else {
            $criteria->compare('organization_id', Yii::app()->user->organization_id);
        }

        $criteria->compare('username', $this->username);
        $criteria->compare('password', $this->password);
        $criteria->compare('phio', $this->phio, TRUE);
        $criteria->compare('work_phone', $this->work_phone, TRUE);
        $criteria->compare('mobile_phone', $this->mobile_phone, TRUE);
        if ($this->roleId) {
            $criteria->compare('roleId', $this->roleId);
        }

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}