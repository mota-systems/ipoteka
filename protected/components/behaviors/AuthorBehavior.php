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

    public function beforeSave($event)
    {
        if ($this->getOwner()->getIsNewRecord() && ($this->authorAttribute !== NULL)) {
            $this->owner->{$this->authorAttribute} = Yii::app()->user->id;
        }

    }
}
