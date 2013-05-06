<?php
/**
 * Created by Mota-systems company.
 * Author: Pavel Lamzin
 * Date: 16.04.13
 * Time: 6:04
 * All rights are reserved
 */
Yii::import('zii.widgets.CPortlet');
class CustomPortlet extends CPortlet
{
    public $titleTag = 'div';

    protected function renderDecoration()
    {
        if ($this->title !== NULL) {
            echo CHtml::tag($this->titleTag, array('class' => $this->titleCssClass), $this->title);
        }
    }

}