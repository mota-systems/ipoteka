<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 23:31
 * To change this template use File | Settings | File Templates.
 */
class UpperCaseBehavior extends CActiveRecordBehavior
{
    /**
     * @var string name of 'attribute', which must be formatted
     */
    public $attribute;

    public function beforeValidate($event)
    {
        if (!empty($this->attribute)) {
            if (is_array($this->attribute)) {
                foreach ($this->attribute as $attr) {
                    $this->owner->$attr = $this->upperCaseFirst($this->owner->$attr);
                }
            } else {
                $this->owner->{$this->attribute} = $this->upperCaseFirst($this->owner->{$this->attribute});
            }
        }
        parent::beforeValidate($event);
    }

    private function upperCaseFirst($string, $e = 'utf-8')
    {
        if (function_exists('mb_strtoupper') && function_exists('mb_substr') && !empty($string)) {
                $string = mb_strtolower($string, $e);
                $upper = mb_strtoupper($string, $e);
                preg_match('#(.)#us', $upper, $matches);
                $string = $matches[1] . mb_substr($string, 1, mb_strlen($string, $e), $e);
        } else {
            $string = ucfirst($string);
        }
        return $string;
    }
}
