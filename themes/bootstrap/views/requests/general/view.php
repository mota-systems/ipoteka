<?php
/* @var $this BankController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
    "Заявка №$model->id",
);
$this->documentsModel = $model;
$this->widget('bootstrap.widgets.TbAlert', array(
    'block'  => FALSE, // display a larger alert block?
    'fade'   => FALSE, // use transitions?
    'alerts' => array( // configurations per alert type
        'success' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'error'   => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'warning' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'info'    => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
    ),
));
?>
<h3><?php
    echo $model->fullName;
    $this->widget('requests.components.widgets.StatusBadge', array(
        'status' => $model->organizationDecision ? $model->organizationDecision->status_id : '', // 'success', 'warning', 'important', 'info' or 'inverse'
    ));
    ?>
</h3>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'summ',
        'initialFee',
        'type.type',
        'age'
    ),
));
?>
<? Yii::app()->clientScript->registerScript('search', "
$('.full-button').click(function(){
$('.internal-view').toggle();
return false;
});
"); ?>
<? if (!empty($model->comment)) { ?>
    <h3>Важная информация</h3>
    <p><?= $model->comment ?></p>
<? } ?>
<?
$this->widget('bootstrap.widgets.TbButton', array(
    'icon'        => 'folder-open',
    //'type'        => 'info',
    'label'       => 'Полная заявка',
    'url'         => '#',
    'htmlOptions' => array(
        'class' => 'full-button',
    ),
));
?>

<div class="internal-view" style="display:none">
    <? echo $this->renderPartial('/general/_internalView', array('model' => $model), TRUE) ?>
</div>
<?
if ($model->statusHistoryOrganization) {
    $this->renderPartial('_history', array('history' => $model->statusHistoryOrganization, 'model' => $model));
}
?>
<div>
    <h4>Контактные данные агента</h4>
    <table class='table'>
        <tr>
            <td colspan=2>
                <strong><?= $model->author->phio ?></strong>
            </td>
        </tr>
        <tr>
            <td>Стационарный телефон</td>
            <td><?= $model->author->work_phone ?></td>
        </tr>
        <tr>
            <td>Мобильный телефон</td>
            <td><?= $model->author->mobile_phone ?></td>
        </tr>
    </table>
</div>

<div>
    <? if ($model->organizationDecision) { ?>
        <div class='consider-actions'>
        </div>
    <? } else { ?>

    <? } ?>

    <div class='clearfix'></div>
    <div class='consider-actions'>
        <a class='btn btn-info' href='#' data-consider_status='<?= Requests::STATUS_DEAL; ?>'
           data-consider_<?= Yii::app()->request->csrfTokenName; ?>='<?= Yii::app()->request->csrfToken; ?>'
           data-toggle='modal' data-target="#consider"><i class='icon icon-briefcase'></i> Совершить сделку</a>
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
    </div>


    <!-- Modal -->
    <div id="consider" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Укажите причину</h3>
        </div>
        <form method='post' action='/requests/bank/consider/id/<?= $model->id; ?>/'>
            <input type='hidden' name='status' value=''/>
            <input type='hidden' name='<?= Yii::app()->request->csrfTokenName; ?>' value=''/>

            <div class="modal-body">
                <textarea name='reason'></textarea>
            </div>
            <div class="modal-footer">
                <button id='consider-btn'></button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
            </div>
        </form>
    </div>

</div>
<div id='comments'>
<? $this->renderPartial('/general/comments/index', array('model'=>$model));?>
</div>
