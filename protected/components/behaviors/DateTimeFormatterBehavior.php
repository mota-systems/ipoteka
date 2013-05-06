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
    public $inputFormat = 'dd.MM.yyyy';
    /**
     * @var string datetime format of output
     */
    public $outputFormat = 'yyyy-MM-dd';

    protected $_modelScenario;

    protected $_formatScenario;

    public function beforeValidate($event)
    {
        $this->factoryAttributes($this->inputFormat, $this->outputFormat);
        parent::beforeValidate($event);
    }

    private function factoryAttributes($inputFormat, $outputFormat)
    {
        if (!empty($this->attribute) AND !empty($this->inputFormat) AND !empty($this->outputFormat) /* AND $this->owner->isNewRecord*/) {
            if (is_array($this->attribute)) {
                $this->_modelScenario = $this->owner->scenario;
                foreach ($this->attribute as $attr) {
                    if (is_array($attr) AND array_key_exists('on', $attr)) {
                        $this->_formatScenario = $attr['on'];
                        if (!is_array($this->_formatScenario)) {
                            $this->_formatScenario = explode(',', $this->_formatScenario);
                            $this->_formatScenario = array_map('trim', $this->_formatScenario);
                        }
                        unset($attr['on']);
                        if (!in_array($this->_modelScenario, $this->_formatScenario)) {
                            continue;
                        }
                        $attr = array_map('trim', explode(',', array_pop($attr)));
                        foreach ($attr as $one) {
                            if (!empty($this->owner->$one)) {
                                $this->owner->$one = $this->format($this->owner->$one, $inputFormat, $outputFormat);
                            }
                        }
                    }
                }
            } else {
                $this->attribute = explode(',', $this->attribute);
                foreach ($this->attribute as $attr) {
                    $this->owner->$attr = $this->format($this->owner->$attr, $inputFormat, $outputFormat);
                }
            }
        }
    }

    public function afterFind($event)
    {
        $this->factoryAttributes($this->outputFormat, $this->inputFormat);
        parent::afterFind($event);
    }

    private function format($date, $inputFormat, $outputFormat)
    {
        if (CDateTimeParser::parse($date, $outputFormat))
            return $date;
        $parser = CDateTimeParser::parse($date, $inputFormat);
        if ($parser === FALSE)
            return $date;
        return date('Y-m-d', $parser);
    }
}
