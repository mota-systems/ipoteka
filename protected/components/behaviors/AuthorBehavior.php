<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 23:31
 * To change this template use File | Settings | File Templates.
 */
class AuthorBehavior extends CActiveRecordBehavior
{
    public $authorAttribute = 'author_id';
    public $organizationAttribute;
    public $overwrite = FALSE;

    public function beforeValidate($event)
    {
        if(empty($this->authorAttribute))
            throw new Exception('Не указан атрибут, куда записывать ID автора.');
        if ($this->getOwner()->getIsNewRecord() OR $this->overwrite) {
            $this->owner->{$this->authorAttribute} = Yii::app()->user->id;
            if(!empty($this->organizationAttribute))
                $this->owner->{$this->organizationAttribute} = Yii::app()->user->organization_id;
        }
        parent::beforeSave($event);
    }
}
