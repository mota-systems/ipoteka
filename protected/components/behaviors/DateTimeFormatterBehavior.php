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

    protected $_modelScenario;

    protected $_formatScenario;

    public function beforeValidate($event)
    {
        if (!empty($this->attribute) AND !empty($this->inputFormat) AND !empty($this->outputFormat)) {
            if (is_array($this->attribute)) {
                $this->_modelScenario = $this->owner->scenario;
                foreach ($this->attribute as $attr) {
                    if (is_array($attr) AND array_key_exists('on', $attr)) {
                        $this->_formatScenario = $attr['on'];
                        unset($attr['on']);
                        if ($this->_formatScenario != $this->_modelScenario) {
                            continue;
                        }
                        $attr = explode(',', array_pop($attr));
                        foreach ($attr as $one) {
                            if (!empty($this->owner->$one))
                                $this->owner->$one = $this->format($this->owner->$one);
                        }
                    }
                }
            } else {
                $this->attribute = explode(',', $this->attribute);
                foreach ($this->attribute as $attr) {
                    $this->owner->$attr = $this->format($this->owner->$attr);
                }
            }
        }
        parent::beforeValidate($event);
    }

    private function format($date)
    {
        $formatter = new DateTime();
        return $formatter->createFromFormat($this->inputFormat, $date)->format($this->outputFormat);
    }
}
