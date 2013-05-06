<?php

/**
 * This is the model class for table "directory".
 *
 * The followings are the available columns in table 'directory':
 * @property integer $id
 * @property string  $category
 * @property string  $column
 * @property string  $title
 */
class Vocabulary extends CActiveRecord
{
    const VOCABULARY_CACHE_KEY = 'vocabulary';
    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className active record class name.
     *
     * @return Directory the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function scopes() {
        return array(
          'currency'=>array(
              'condition'=>'category=currency'
          ),
        );
    }

    public static function getTitle($id){
        if(!$cache=Yii::app()->cache->get(self::VOCABULARY_CACHE_KEY)){
            $cache = Yii::app()->cache->set(self::VOCABULARY_CACHE_KEY, CHtml::listData(self::model()->findAll(), 'id', 'title'));
        }
//        $title = self::model()->findByPk($id)->title;
        return $cache[$id];
//        $e = 'utf8';
//        $string = mb_strtolower($title, $e);
//        $upper = mb_strtoupper($string, $e);
//        preg_match('#(.)#us', $upper, $matches);
//        return $matches[1] . mb_substr($string, 1, mb_strlen($string, $e), $e);
    }

    public static function getSex($id){
        return $id==1 ? 'Мужчина' : 'Женщина';
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'directory';
    }

    public function category($cat)
    {
        $this->getDbCriteria()->mergeWith(array(
            'condition' => 'category=:category',
            'params'    => array(':category' => $cat)
        ));
        return $this;
    }


    public function column($col)
    {
        $this->getDbCriteria()->mergeWith(array(
            'condition' => '`column`=:column',
            'params'    => array(':column' => $col)
        ));
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
            array('category, column', 'length', 'max' => 50),
            array('title', 'length', 'max' => 150),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, category, column, title', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'       => 'ID',
            'category' => 'Категория',
            'column'   => 'Колонка',
            'title'    => 'Имя',
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
        $criteria->compare('category', $this->category, TRUE);
        $criteria->compare('column', $this->column, TRUE);
        $criteria->compare('title', $this->title, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}