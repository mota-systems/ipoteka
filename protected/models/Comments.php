<?php

/**
 * This is the model class for table "comments".
 *
 * The followings are the available columns in table 'comments':
 * @property integer $id
 * @property integer $request_id
 * @property integer $created_by_user_id
 * @property integer $organization_id
 * @property string $comment
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property Users $createdByUser
 * @property Organizations $organization
 * @property Requests $request
 */
class Comments extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Comments the static model class
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
            ),
            'AutoAuthorBehavior' => array(
                'class' => 'application.components.behaviors.AuthorBehavior',
                'authorAttribute' => 'created_by_user_id',
            ),
        );
    }

    public function beforeSave()
    {
        $this->organization_id = Yii::app()->user->organization_id;
        parent::beforeSave();
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'comments';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('comment', 'length', 'max' => 500),
            array('recipient_id', 'exist', 'className'=>'organizations', 'allowEmpty'=>FALSE, 'attributeName'=>'id', 'message'=>'Ошибка. Организация, которой вы хотите отправить сообщение, не существует.'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('request_id, created_by_user_id, organization_id, date_created', 'safe', 'on' => 'search'),
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
            'createdByUser' => array(self::BELONGS_TO, 'Users', 'created_by_user_id'),
            'organization' => array(self::BELONGS_TO, 'Organizations', 'organization_id'),
            'request' => array(self::BELONGS_TO, 'Requests', 'request_id'),
            'files'=>array(self::HAS_MANY, 'CommentsFiles', 'comment_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'request_id' => 'Ноомер заявки',
            'created_by_user_id' => 'Автор',
            'organization_id' => 'Organization',
            'comment' => 'Комментарий',
            'date_created' => 'Дата создания',
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
        $criteria->compare('request_id', $this->request_id);
        $criteria->compare('created_by_user_id', $this->created_by_user_id);
        $criteria->compare('organization_id', $this->organization_id);
        $criteria->compare('comment', $this->comment, TRUE);
        $criteria->compare('date_created', $this->date_created, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}