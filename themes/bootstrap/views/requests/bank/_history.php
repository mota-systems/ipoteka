<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 18.03.13
 * Time: 22:26
 * All rights are reserved
 */

?>
    <h2>История изменения статусов:</h2>
<? foreach ($history as $one) {?>
    <div>
   <? $date = new CDateFormatter('ru_ru');
    $date = $date->formatDateTime($one->date_created, 'long', 'short');
    ?>
    <span>Пользователь <?=$one->author->phio?> <?=$date?></span> изменил статус заявки с

    <?
    switch ($one->old_status) {
        case Requests::STATUS_APPROVE:
            $type = 'success';
            $label = 'Одобрена';
            break;
        case Requests::STATUS_REFUSE:
            $type = 'important';
            $label = 'Отклонена';
            break;
        case Requests::STATUS_RETRIEVE:
            $type = 'info';
            $label = 'Внести исправления';
            break;
        case Requests::STATUS_NEW:
            $type = 'inverse';
            $label = 'Новая заявка';
            break;
    }?>
    <?
    $this->widget('bootstrap.widgets.TbLabel', array(
        'type'  => $type, // 'success', 'warning', 'important', 'info' or 'inverse'
        'label' => $label,
    ))?> на
    <?
    switch ($one->new_status) {
        case Requests::STATUS_APPROVE:
            $type = 'success';
            $label = 'Одобрена';
            break;
        case Requests::STATUS_REFUSE:
            $type = 'important';
            $label = 'Отклонена';
            break;
        case Requests::STATUS_RETRIEVE:
            $type = 'info';
            $label = 'Внести исправления';
            break;
        case Requests::STATUS_NEW:
            $type = 'inverse';
            $label = 'Новая заявка';
            break;
    }?>
    <? $this->widget('bootstrap.widgets.TbLabel', array(
        'type'  => $type, // 'success', 'warning', 'important', 'info' or 'inverse'
        'label' => $label,
    ))?>
    </div>
<? } ?>