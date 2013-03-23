<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 15.02.13
 * Time: 21:26
 * To change this template use File | Settings | File Templates.
 */
class AgeValidator extends CValidator
{
    public $min = 18;

    public $max = NULL;

    /**
     * Validates a single attribute.
     * This method should be overridden by child classes.
     * @param CModel $object the data object being validated
     * @param string $attribute the name of the attribute to be validated.
     */
    protected function validateAttribute($object, $attribute)
    {
        $dateFormatter = new DateTime($object->$attribute);
        $diff = $dateFormatter->diff(new DateTime)->y;
        $object->$attribute = $diff;
        if (!empty($this->min) and $diff < $this->min) {
            $message = $this->message !== NULL ? $this->message : "Минимальный возраст заемщика $this->min лет";
            $this->addError($object, $attribute, $message);
        }
        if (!empty($this->max) and $diff > $this->max) {
            $message = $this->message !== NULL ? $this->message : "Максимальный возраст заемщика $this->max лет";
            $this->addError($object, $attribute, $message);
        }
    }

    public function clientValidateAttribute($object, $attribute)
    {

    }
}
