<?php
/**
 * Created by Mota-systems company.
 * Author: Pavel Lamzin
 * Date: 04.05.13
 * Time: 19:53
 * All rights are reserved
 */
?>
<div class='clearfix'></div>
<div class='consider-actions'>
<? if ($model->organizationDecision) {
    switch ($model->organizationDecision->status_id) {
        case Requests::STATUS_PENDING:
            ?>
            <a class='btn btn-success' href='#' data-consider_status='<?= Requests::STATUS_APPROVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ok'></i> Одобрить</a>
            <a class='btn btn-danger' href='#' data-consider_status='<?= Requests::STATUS_REFUSE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ban-circle'></i> Отказать</a>
            <a class='btn btn-warning' href='#' data-consider_status='<?= Requests::STATUS_RETRIEVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-edit'></i> На исправление</a>
            <? break;
        case Requests::STATUS_RETRIEVE:
            ?>
            <a class='btn' href='#' data-consider_status='<?= Requests::STATUS_PENDING; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-search'></i> На рассмотрение</a>
            <a class='btn btn-success' href='#' data-consider_status='<?= Requests::STATUS_APPROVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ok'></i> Одобрить</a>
            <a class='btn btn-danger' href='#' data-consider_status='<?= Requests::STATUS_REFUSE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ban-circle'></i> Отказать</a>
            <? break;
        case Requests::STATUS_APPROVE:
            ?>
            <a class='btn btn-info' href='#' data-consider_status='<?= Requests::STATUS_DEAL; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-briefcase'></i> Совершить сделку</a>
            <a class='btn btn-danger' href='#' data-consider_status='<?= Requests::STATUS_REFUSE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ban-circle'></i> Отказать</a>
            <a class='btn btn-warning' href='#' data-consider_status='<?= Requests::STATUS_RETRIEVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-edit'></i> На исправление</a>
            <? break;
        case Requests::STATUS_REFUSE:
            ?>
            <a class='btn btn-success' href='#' data-consider_status='<?= Requests::STATUS_APPROVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ok'></i> Одобрить</a>
            <a class='btn btn-warning' href='#' data-consider_status='<?= Requests::STATUS_RETRIEVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-edit'></i> На исправление</a>
            <? break;
        case Requests::STATUS_DEAL:
            ?>
            <a class='btn' href='#' data-consider_status='<?= Requests::STATUS_PENDING; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-search'></i> На рассмотрение</a>
            <a class='btn btn-success' href='#' data-consider_status='<?= Requests::STATUS_APPROVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ok'></i> Одобрить</a>
            <a class='btn btn-danger' href='#' data-consider_status='<?= Requests::STATUS_REFUSE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-ban-circle'></i> Отказать</a>
            <a class='btn btn-warning' href='#' data-consider_status='<?= Requests::STATUS_RETRIEVE; ?>'
               data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
               data-toggle='modal' data-target="#consider"><i class='icon icon-edit'></i> На исправление</a>
            <?  break;
    }
} else {
    ?>
    <a class='btn' href='#' data-consider_status='<?= Requests::STATUS_PENDING; ?>'
       data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
       data-toggle='modal' data-target="#consider"><i class='icon icon-search'></i> На рассмотрение</a>
    <a class='btn btn-warning' href='#' data-consider_status='<?= Requests::STATUS_RETRIEVE; ?>'
       data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
       data-toggle='modal' data-target="#consider"><i class='icon icon-edit'></i> На исправление</a>
<? } ?>