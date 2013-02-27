<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 23:31
 * To change this template use File | Settings | File Templates.
 */
class DateTimeFormatterBehavior extends CActiveRecordBehavior
{
    /**
     * @var string name of 'attribute', which must be formatted
     */
    public $attribute = 'birthday';
    /**
     * @var string datetime format of input
     */
    public $inputFormat = 'd.m.Y';
    /**
     * @var string datetime format of output
     */
    public $outputFormat = 'Y-m-d';

    public function beforeValidate($event)
    {
        if (!empty($this->attribute) AND !empty($this->inputFormat) AND !empty($this->outputFormat) AND !empty($this->owner->{$this->attribute})) {
            $formatter = new DateTime();
            $date = $this->owner->{$this->attribute};
            $this->owner->{$this->attribute} = $formatter->createFromFormat($this->inputFormat, $date)->format($this->outputFormat);
            ;
        }
        parent::beforeValidate($event);
    }
}
