<?php

/**
 * This is the model class for table "requests".
 *
 * The followings are the available columns in table 'requests':
 * @property integer $id
 * @property string $surname
 * @property string $patronymic
 * @property string $name
 * @property integer $sex
 * @property string $birthday
 * @property string $birthday_place
 * @property string $citizenship
 * @property integer $passport_seria
 * @property integer $passport_number
 * @property string $passport_issue
 * @property string $passport_issued
 * @property integer $created_by_user_id
 * @property string $date_created
 * @property integer $initialFee
 *
 * The followings are the available model relations:
 * @property Comments[] $comments
 * @property Files[] $files
 * @property Users $createdByUser
 */
class Requests extends CActiveRecord
{
    const SEX_MAN = 1;
    const SEX_WOMEN = 2;
    const STATUS_DRAFT = 1;
    const STATUS_NEW = 2;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Requests the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function behaviors()
    {
        return array(
            'AutoTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'date_created',
                'updateAttribute' => NULL,
            ),
            'AutoAuthorBehavior' => array(
                'class' => 'application.components.behaviors.AuthorBehavior',
                'authorAttribute' => 'created_by_user_id',
            ),
        );
    }


    public static function getNameByType($sex)
    {
        $sex = intval($sex);
        $types = array(
            self::SEX_MAN => 'Мужчина',
            self::SEX_WOMEN => 'Женщина',
        );
        return array_key_exists($sex, $types) ? $types[$sex] : FALSE;
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
            array('surname, name, patronymic, summ, initialFee, objectTypeId, birthday', 'required', 'on' => 'firstCreate'),
            array('surname, name, patronymic, summ, initialFee, objectTypeId, birthday', 'unsafe', 'on' => 'continueCreate'),
            array('surname, patronymic, name', 'length', 'max' => 100, 'min' => 2),
            array('surname, patronymic, name', 'AlphaValidator'),
            array('sex, passport_seria, passport_number, objectTypeId, initialFee, summ', 'numerical', 'integerOnly' => TRUE),
            array('sex, passport_seria, passport_number, birthday_place, citizenship, passport_issued, passport_issue, mobile_phone', 'required', 'on' => 'continueCreate'),
            array('birthday_place, citizenship', 'length', 'max' => 250, 'min' => 2),
            array('passport_issued', 'length', 'max' => 255, 'min' => 5),
            array('birthday, passport_issue', 'date', 'format' => 'yyyy-MM-dd'),
//            array('birthday', 'AgeValidator', 'min'=>18),
            array('passport_issue', 'DateDiffValidator', 'min'=>0, 'max'=>50, 'minDiffItem'=>'d', 'maxDiffItem'=>'y', 'tooMax'=>'Паспорт не может быть выдан больше {value} лет назад'),
            array('birthday', 'DateDiffValidator', 'min'=>18, 'max'=>100, 'minDiffItem'=>'y', 'maxDiffItem'=>'y', 'tooMax'=>'Максимальный возраст заемщика {value} лет', 'tooMin'=>'Минимальный возраст заемщика {value} лет'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('surname, mobile_phone, patronymic, name, sex, birthday, birthday_place, citizenship, passport_seria, passport_number, passport_issue, passport_issued, created_by_user_id, date_created', 'safe', 'on' => 'search'),
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
            'comments' => array(self::HAS_MANY, 'Comments', 'request_id', 'order' => 'comments.date_created DESC'),
//            'commentsGrouped'=>array(self::HAS_MANY, 'Comments', 'group'=>'organization_id'),
            'files' => array(self::HAS_MANY, 'Files', 'request_id'),
            'author' => array(self::BELONGS_TO, 'Users', 'created_by_user_id'),
            'commentCount' => array(self::STAT, 'Comments', 'request_id'),
            'type' => array(self::BELONGS_TO, 'ObjectType', 'objectTypeId')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Номер заявки',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'name' => 'Имя',
            'sex' => 'Пол',
            'summ' => 'Сумма займа',
            'birthday' => 'Дата рождения',
            'birthday_place' => 'Место рождения',
            'citizenship' => 'Гражданство',
            'passport_seria' => 'Серия паспорта',
            'passport_number' => 'Номер паспорта',
            'passport_issue' => 'Дата выдачи паспорта',
            'passport_issued' => 'Орган, выдавший паспорт',
            'mobile_phone' => 'Мобильный телефон',
            'date_created' => 'Дата создания заявки',
            'created_by_user_id' => 'Создано пользователем',
            'objectTypeId' => 'Тип объекта',
            'initialFee' => 'Первоначальный взнос',
            'status' => 'Статус заявки'
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
        $criteria->compare('surname', $this->surname, TRUE);
        $criteria->compare('patronymic', $this->patronymic, TRUE);
        $criteria->compare('name', $this->name, TRUE);
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
        $criteria->compare('created_by_user_id', $this->created_by_user_id);
        $criteria->compare('date_created', $this->date_created, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}