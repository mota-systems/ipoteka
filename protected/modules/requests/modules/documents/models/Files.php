<?php

/**
 * This is the model class for table "files".
 *
 * The followings are the available columns in table 'files':
 * @property integer  $id
 * @property string   $file
 * @property integer  $request_id
 * @property integer  $type
 * @property string   $name
 *
 * The followings are the available model relations:
 * @property Requests $request
 * @property Requests $requests
 */
class Files extends CActiveRecord
{
    const TYPE_PASSPORT = 1;
    const TYPE_SECOND_DOCUMENT = 2;
    const TYPE_LABOR_BOOK = 3;
    const TYPE_INCOME_STATEMENT = 4;
    const TYPE_OTHER_DOCUMENT = 5;

    const STATUS_APPROVE = 1;
    const STATUS_REFUSE = 2;
    public $savePath = 'webroot.files';

    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className active record class name.
     *
     * @return Files the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);

    }

    public static function getFileTypes()
    {
        return array(
            self::TYPE_PASSPORT         => 'Копия паспорта',
            self::TYPE_SECOND_DOCUMENT  => 'Второй документ',
            self::TYPE_LABOR_BOOK       => 'Копия трудовой книжки',
            self::TYPE_INCOME_STATEMENT => 'Справка о доходах',
            self::TYPE_OTHER_DOCUMENT   => 'Другой документ',
        );
    }

    public function getTmbImage()
    {
        if (strpos($this->image, 'img') === FALSE) {
            throw new CHttpException(400, "Файл {$this->image} не является картинкой. Ошибка в вызове функции getTmbImage()");
        }
        return str_replace('img', 'tmb', $this->image);
    }

    public function getFileTypeTitle(){
        $types = $this->fileTypes;
        return $types[$this->fileType];
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'files';
    }

    public function behaviors()
    {
        return array(
            'AutoTimestampBehavior'  => array(
                'class'           => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'dateCreated',
            ),
            'UploadableFileBehavior' => array(
                'class'         => 'requests.components.behaviors.UploadableFileBehavior',
                'attributeName' => 'file',
                'savePathAlias' => $this->savePath,
                'fileTypes'     => 'doc, png, pdf, xls, docx, jpg,txt, docx, xlsx, bmp',
                'prefix'        => 'file',
                'resizePreview' => FALSE,
                'allowEmpty'    => FALSE,
            ),
            'AutoAuthorBehavior'     => array(
                'class'           => 'application.components.behaviors.AuthorBehavior',
                'authorAttribute' => 'author_id',
            ),
        );
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('request_id, fileType', 'numerical', 'integerOnly' => TRUE),
            array('comment', 'length', 'max' => 150, 'allowEmpty'=>TRUE),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
//            array('id, file, request_id, type, name', 'safe', 'on' => 'search'),
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
            'request' => array(self::BELONGS_TO, 'Requests', 'request_id'),
            'author'  => array(self::BELONGS_TO, 'Users', 'author_id'),
            'decisions'=>array(self::HAS_MANY, 'FilesDecisions', 'file_id'),
            'organizationDecision'=>array(self::HAS_ONE, 'FilesDecisions', 'file_id', 'condition'=>'fileOrganizationDecision.organization_id='.Yii::app()->user->organization_id, 'alias'=>'fileOrganizationDecision'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'         => 'ID',
            'file'       => 'Имя файла',
            'request_id' => 'Номер заявки',
            'fileType'   => 'Тип документа',
            'comment'    => 'Название документа',
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
        $criteria->compare('file', $this->file, TRUE);
        $criteria->compare('request_id', $this->request_id);
        $criteria->compare('type', $this->type);
        $criteria->compare('name', $this->name, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}