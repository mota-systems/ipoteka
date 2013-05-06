<?php
/**
 * Created by Mota-systems company.
 * Author: Pavel Lamzin
 * Date: 18.04.13
 * Time: 0:29
 * All rights are reserved
 */

class StatusBadge extends CWidget
{
    public $status;

    private $_type, $_label;

    public function init()
    {
        switch ($this->status) {
            case Requests::STATUS_APPROVE:
                $this->_type = 'success';
                $this->_label = 'Одобрена';
                break;
            case Requests::STATUS_REFUSE:
                $this->_type = 'important';
                $this->_label = 'Отклонена';
                break;
            case Requests::STATUS_RETRIEVE:
                $this->_type = 'info';
                $this->_label = 'Внести исправления';
                break;
            case Requests::STATUS_DEAL:
                $this->_type = 'success';
                $this->_label = 'Сделка завершена';
                break;
            case Requests::STATUS_PENDING:
                $this->_type = 'info';
                $this->_label = 'На рассмотрении';
                break;
            default:
                $this->_type = 'success';
                $this->_label = 'Новая заявка';
                break;
        }

    }

    public function run()
    {
        $this->widget('bootstrap.widgets.TbLabel', array(
            'type'  => $this->_type, // 'success', 'warning', 'important', 'info' or 'inverse'
            'label' => $this->_label,
        ));
    }
}