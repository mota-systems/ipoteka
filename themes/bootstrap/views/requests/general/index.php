<?php
/* @var $this RequestsController */
/* @var $dataProvider CActiveDataProvider */
?>
<?
$requests = new Requests('search');
$requests->status_id = Requests::STATUS_DRAFT;
$draft = $requests->counter()->getTotalItemCount();
$requests->status_id = Requests::STATUS_NEW;
$new = $requests->counter()->getTotalItemCount();
$requests->status_id = Requests::STATUS_PENDING;
$pending = $requests->counter()->getTotalItemCount();
$requests->status_id = Requests::STATUS_APPROVE;
$approved = $requests->counter()->getTotalItemCount();
$requests->status_id = Requests::STATUS_RETRIEVE;
$retrieve = $requests->counter()->getTotalItemCount();

$this->menu = array(
    array('label' => 'Стандартные'),
    array('label' => 'Все заявки', 'url' => '#'),
    array('label' => 'Черновики <span class=\'badge\'>' . $draft . '</span></a>', 'url' => '#', 'linkOptions' => array('data-status_id' => Requests::STATUS_DRAFT, 'disabled' => $draft ? FALSE : TRUE), 'visible' => Yii::app()->user->organizationType != Organizations::TYPE_BANK),
//    array('label' => 'Новые заявки <span class=\'badge\'>' . $new . '</span></a>', 'url' => '#', 'linkOptions' => array('data-status_id' => Requests::STATUS_NEW, 'disabled' => $new ? FALSE : TRUE)),
    array('label' => 'На рассмотрении <span class=\'badge badge-warning\'>' . $pending . '</span>', 'url' => '#', 'linkOptions' => array('data-status_id' => Requests::STATUS_PENDING, 'disabled' => $pending ? FALSE : TRUE)),
    array('label' => 'Одобренные <span class=\'badge badge-success\'>' . $approved . '</span>', 'url' => '#', 'linkOptions' => array('data-status_id' => Requests::STATUS_APPROVE, 'disabled' => $approved ? FALSE : TRUE)),
    array('label' => 'Требуют исправления <span class=\'badge badge-important\'>' . $retrieve . '</span>', 'url' => '#', 'linkOptions' => array('data-status_id' => Requests::STATUS_RETRIEVE, 'disabled' => $retrieve ? FALSE : TRUE)),
    array('divider' => TRUE)
//    array('label'=>'Пользовательские'),
//    array('label'=>'Заявки ВТБ24', 'url'=>'#'),
);
$this->menuTitle = 'Фильтры';
?>
    <h3>Заявки</h3>

<?
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


    <div class='requests-nav'>
        <div class="form-inline">

            <div class="btn-group">
                <a class="btn dropdown-toggle requests-nav-dropper" data-toggle="dropdown" href="#">
                    Показывать за
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class='requests-range-trigger' href='#' data-date_type='<?= Requests::DATE_TYPE_INTERVAL ?>'>Интервал</a>
                    </li>
                    <li><a href='#' data-date_type='<?= Requests::DATE_TYPE_TODAY ?>'>Сегодня</a></li>
                    <li><a href='#' data-date_type='<?= Requests::DATE_TYPE_YESTERDAY ?>'>Вчера</a></li>
                    <li><a href='#' data-date_type='<?= Requests::DATE_TYPE_WEEK ?>'>Неделю</a></li>
                    <li><a href='#' data-date_type='<?= Requests::DATE_TYPE_MONTH ?>'>Месяц</a></li>
                    <li><a href='#' data-date_type='<?= Requests::DATE_TYPE_QUARTER ?>'>Квартал</a></li>
                </ul>
            </div>

            <form class='requests-range'>
                <input type='hidden' name='Requests[date_type]'/>
                <input type='hidden' name='Requests[status_id]'/>
                <input type="text" class="input-small requests-range-start" name='Requests[date_from]'><span
                    class="help-inline">—</span>
                <input type="text" class="input-small requests-range-end" name='Requests[date_to]'>
            </form>

            <!--<div class="btn-group right">
                <a class="btn dropdown-toggle requests-nav-dropper" data-toggle="dropdown" href="#">
                    С отмеченными
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class='requests-range-trigger' href='#' data-date_type='<?/*= Requests::DATE_TYPE_INTERVAL */?>'>Интервал</a>
                    </li>
                    <li><a href='#' data-date_type='<?/*= Requests::DATE_TYPE_TODAY */?>'>Сегодня</a></li>
                    <li><a href='#' data-date_type='<?/*= Requests::DATE_TYPE_YESTERDAY */?>'>Вчера</a></li>
                    <li><a href='#' data-date_type='<?/*= Requests::DATE_TYPE_WEEK */?>'>Неделю</a></li>
                    <li><a href='#' data-date_type='<?/*= Requests::DATE_TYPE_MONTH */?>'>Месяц</a></li>
                    <li><a href='#' data-date_type='<?/*= Requests::DATE_TYPE_QUARTER */?>'>Квартал</a></li>
                </ul>
            </div>-->
            <div class='clearfix'></div>
        </div>

    </div>



<?php
$this->widget('application.components.CustomGridView', array(
    'id'               => 'requests-grid',
    'type'             => 'striped bordered condensed',
    'enableHistory'    => TRUE,
    'emptyText'        => 'Результатов нет.',
    'dataProvider'     => $model->search(),
    'filter'           => $model,
    'enablePagination' => TRUE,
    'enableSorting'    => TRUE,
    'summaryTranslate' => 'заявка|заявки|заявок|заявки',
    'afterAjaxUpdate'  => "function() {
        jQuery('#Requests_passport_issue, #Requests_birthday').datepicker(jQuery.extend(jQuery.datepicker.regional['ru'],{'showAnim':'fold','dateFormat':'yy-mm-dd','changeMonth':'true','showButtonPanel':'true','changeYear':'true'}));
    }",

    'beforeAjaxUpdate' => "function (id, data) {data.url = data.url + '&' + $('.requests-range').serialize()}",

    'columns'          => array(
        array(
            'class'          => 'CCheckBoxColumn',
            'id'             => 'itemsSelected',
            'selectableRows' => '2',
            'htmlOptions'    => array(
                'class' => 'center',
            ),
        ),
        'id',
        'fullName',
        array(
            'name'     => 'objectTypeId',
            'value'    => '$data->type->type',
            'filter'   => ObjectType::getAllInArray(),
            'sortable' => TRUE,
        ),
        array(
            'name'   => 'status_id',
            'value'  => function ($data) {
                if (Yii::app()->user->organizationType == Organizations::TYPE_BANK) {
                    if ($data->organizationDecision)
                        return $data->organizationDecision->status->status;
                    else
                        return 'Новая заявка';
                } else {
                    if (count($data->decisions)) {
                        $text = '';
                        foreach($data->decisions as $decision){
                            $text.=$decision->organization->name.': '.$decision->status->status.'<br/>';
                        }
                        return $text;
                    } else {
                        return $data->status->status;
                    }
                }
            },
            'type'=>'html',
            'filter' => FALSE,
        ),
        array(
            'name'   => 'date_created',
            'type'   => 'russianDateTime',
            'value'  => '$data->date_created',
            'filter' => FALSE,
        ),
        array(
            'header'      => 'Варианты действий',
            'class'       => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'buttons'     => array(
                'view'   => array(
                    'visible' => '$data->status_id!=Requests::STATUS_DRAFT'
                ),
                'update' => array(
                    'visible' => '(($data->status_id == Requests::STATUS_DRAFT  OR empty($data->decisions)) AND Yii::app()->user->checkAccess(\'editRequest\'))',
                ),
                'delete' => array(
                    'visible' => '(($data->status_id == Requests::STATUS_DRAFT  OR empty($data->decisions)) AND Yii::app()->user->checkAccess(\'deleteRequest\'))'
                ),
            ),
        ),
    ),
));
?>