<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 27.02.13
 * Time: 17:11
 * All rights are reserved
 */
class TbCustomButton extends TbButton
{
    /**
     * @var bool adds 'visible' behavior
     */
    public $visible = TRUE;

    public function run() {
        if($this->visible)
            parent::run();
    }

}
