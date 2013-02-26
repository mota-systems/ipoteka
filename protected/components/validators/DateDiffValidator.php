<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 15.02.13
 * Time: 21:26
 * To change this template use File | Settings | File Templates.
 */
class DateDiffValidator extends CValidator
{
    public $min = 0;

    public $max = 50;

    /**
     * @var разница в месяцах, днях или годах
     */
    public $minDiffItem = 'd';
    public $maxDiffItem = 'y';
    public $onlyPastDates = TRUE;
    public $tooMax = '';
    public $tooMin = '';
    /**
     * Validates a single attribute.
     * This method should be overridden by child classes.
     * @param CModel $object the data object being validated
     * @param string $attribute the name of the attribute to be validated.
     */
    protected function validateAttribute($object, $attribute)
    {
        $dateFormatter = new DateTime($object->$attribute);
        $current = new DateTime;
        $minDiff = $dateFormatter->diff($current)->{$this->minDiffItem};
        $maxDiff = $dateFormatter->diff($current)->{$this->maxDiffItem};
        if($this->onlyPastDates){
            if($current<$dateFormatter){
                $message = $this->message !== NULL ? $this->message : "Можно выбирать только уже прошедшие даты";
                $this->addError($object, $attribute, $message);
            }
        }
        if (!empty($this->min) and $minDiff < $this->min) {
            $message = $this->tooMin !== NULL ? $this->tooMin : "Минимальный возраст заемщика $this->min лет";
            $this->addError($object, $attribute, $message,  array('{value}'=>$this->min));
        }
        if (!empty($this->max) and $maxDiff > $this->max) {
            $message = $this->message !== NULL ? $this->message : "Максимальный возраст заемщика $this->max лет";
            $this->addError($object, $attribute, $message,  array('{value}'=>$this->max));
        }
    }

    public function clientValidateAttribute($object, $attribute)
    {

    }
}
