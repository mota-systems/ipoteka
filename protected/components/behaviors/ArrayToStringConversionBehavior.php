<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 23:31
 * To change this template use File | Settings | File Templates.
 */
class ArrayToStringConversionBehavior extends CActiveRecordBehavior
{
    /**
     * @var string name of 'attribute', which must be formatted
     */
    public $attribute;
    /**
     * @var string delimiter char
     */
    public $delimiter = ',';

    private $_modelScenario, $_formatScenario;

    public function beforeValidate($event)
    {
        $this->factoryAttributes(TRUE);
        parent::beforeValidate($event);
    }


    public function afterFind($event)
    {
        $this->factoryAttributes(FALSE);
        parent::afterFind($event);
    }

    private function factoryAttributes($implode)
    {
        if (empty($this->attribute))
            throw new CHttpException(500, 'Empty attribute');
        if (is_array($this->attribute)) {
            $this->_modelScenario = $this->owner->scenario;
            foreach ($this->attribute as $attr) {
                if (is_array($attr)) {
                    if (array_key_exists('on', $attr))
                        $this->_formatScenario = $attr['on'];
                    unset($attr['on']);
                    if (!is_array($this->_formatScenario)) {
                        $this->_formatScenario = array_map('trim', explode(',', $this->_formatScenario));
                    }
                    if (!in_array($this->_modelScenario, $this->_formatScenario) AND !empty($this->_formatScenario)) {
                        continue;
                    }
                    $attr = array_map('trim', explode(',', array_pop($attr)));
                    foreach ($attr as $one) {
                        if (!empty($this->owner->$one)) {
                            $this->owner->$one = $implode ? implode($this->delimiter, $this->owner->$one) : explode($this->delimiter, $this->owner->$one);
                        }
                    }
                } else {
                    $attr = array_map('trim', explode(',', array_pop($this->attribute)));
                    foreach ($attr as $one) {
                        if (!empty($this->owner->$one)) {
                            $this->owner->$one = $implode ? implode($this->delimiter, $this->owner->$one) : explode($this->delimiter, $this->owner->$one);
                        }
                    }
                }
            }
        } else {
            if (!empty($this->attribute)) {
                $this->attribute = array_map('trim', explode(',', $this->attribute));
                foreach ($this->attribute as $attr) {
                    if (!empty($this->owner->$attr)) {
                        $this->owner->$attr = $implode ? implode($this->delimiter, $this->owner->$attr) : explode($this->delimiter, $this->owner->$attr);
                    }
                }
            }
        }
    }
}
