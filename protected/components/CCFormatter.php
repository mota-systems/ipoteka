<?php
class CCFormatter extends CFormatter
{
    public $numOfWords = 5;

    public function formatTtext($value)
    {
        $value = CHtml::encode($value);

        $lenBefore = strlen($value);

        if ($this->numOfWords) {
            if (preg_match("/\s*(\S+\s*){0,$this->numOfWords}/", $value, $match)) {
                $value = trim($match[0]);
            }
            if (strlen($value) != $lenBefore) {
                $value .= ' ...';
            }
        }

        return $value;
    }

    public function formatrussianDateTime($value)
    {
        $formatter = new CDateFormatter('ru_ru');
        $valid = CDateTimeParser::parse($value, 'yyyy-MM-dd');
//        if ($valid)
        return $formatter->formatDateTime($value, 'long', 'short');
//        else
//            return $value;
    }

    public function formatrussianDate($value)
    {
        $formatter = new CDateFormatter('ru_ru');
        $valid = CDateTimeParser::parse($value, 'yyyy-MM-dd');
//        if ($valid)
        return $formatter->formatDateTime($value, 'long', FALSE);
//        else
//            return $value;
    }

    public function formatVocabulary($value)
    {
        $value = trim($value);
        if (empty($value))
            return 'Не задано';
        return Vocabulary::getTitle($value);
    }

    public function formatSex($value)
    {
        if (empty($value))
            return 'Не задано';
        return $value == 1 ? 'Мужчина' : 'Женщина';
    }

    public function formatYesNo($value)
    {
        return empty($value) ? 'Нет' : 'Да';
    }


    public function formatList($value)
    {
        //TODO: "Пусто"-ебан-стайл.
        if (!is_array($value)) {
            if (empty($value))
                return 'Не задано';
            $value = array_map('trim', explode(',', $value));
        }
        if (is_array($value)) {
            $result = CHtml::openTag('ul');
            foreach ($value as $val) {
//                echo var_dump($val);
//                Yii::app()->end();
                $result .= !is_null($model = Vocabulary::model()->findByPk($val)) ? CHtml::tag('li', array(), $model->title) : 'Пусто';
            }
            $result .= CHtml::closeTag('ul');
            return $result;
        }
        return $value;
    }

    public function formatAge($value)
    {
        if (empty($value))
            return 'Не задано';
        return $value . ' ' . Yii::t('ipoteka', 'год|года|лет|год', $value);
    }
}