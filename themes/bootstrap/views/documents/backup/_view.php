<?php /**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 20:19
 * All rights are reserved
 */ ?>

<div class='each'>
    <!--a class='name' href='/requests/documents/default/download/id/<?= $data->id ?>'><?= $types[$data->fileType] ?></a><br/-->
    <a class='name' href='#' data-toggle='modal' data-target="#modal-<?= $data->id ?>"><?= $types[$data->fileType] ?></a><br />
<!--    <a class='version' href='#' data-content='-->
<!--       <div class="version-files">-->
<!--       <div class="file-each">-->
<!--       <a class="file-name" href="#"><i class="icon icon-file"></i> 2-я версия</a>, <span class="file-size">400 кб</span><br />-->
<!--       <span class="file-updated">Обновлено 17 марта 16:24</span>-->
<!--       </div>-->
<!---->
<!--       <div class="file-each">-->
<!--       <a class="file-name" href="#"><i class="icon icon-file"></i> 1-я версия</a>, <span class="file-size">375 кб</span><br />-->
<!--       <span class="file-updated">Обновлено 4 марта 12:43</span>-->
<!--       </div>-->
<!---->
<!--       </div>-->
<!--       '>3-я версия</a><br/>-->
    <span class='updated'>Загружено <?= Yii::app()->dateFormatter->formatDateTime($data->dateCreated, 'long', 'short') ?></span><br/>
    <?= CHtml::ajaxLink('<i class=\'icon icon-trash\'></i> Удалить', '/requests/documents/default/delete/id/' . $data->id, array('success'=>'function(){location.reload();}'), array('class' => 'delete')) ?>
</div>
<!-- Modal -->
<div id='modal-<?= $data->id ?>' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
     aria-hidden='true'>
    <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3>Просмотр документа</h3>
    </div>
    <div class='modal-body'>
        <div class='hint-right'>
<!--            <p>-->
<!--                Внимание! Банками была одобрена предыдущая версия документа. При загрузке документа заново документ перейдёт в статус «рассматривается».-->
<!--            </p>-->
            <div class='sep'></div>
            <? foreach ($dataProvider->data as $file) { ?>
                <a class='name' href='/requests/documents/default/download/id/<?=$file->id?>'><?= $types[$file->fileType] ?></a><br/>
            <? } ?>
        </div>
        <div class='modal-content'>

            <?
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'action'      => "/requests/documents/default/upload/id/".$request_id,
                'method' => 'POST',
                'htmlOptions' => array(
                    'enctype' => 'multipart/form-data',
                )
                    ))
            ?>
            <?php echo $form->dropDownListRow($data, 'fileType', Files::getFileTypes(), array('class' => 'newfile-filetype')) ?>
<?php echo $form->textField($data, 'comment', array('class' => 'newfile-filename')) ?>
<?php echo $form->fileField($data, 'file', array('class' => 'newfile-input')) ?>
            <a class='btn newfile-trigger' href='#'><i class='icon icon-folder-open'></i> Выбрать документ</a> <span
                class='newfile-filename-text'></span>
            <button class='btn btn-inverse newfile-submit' type='submit'><i class='icon icon-upload icon-white'></i>
                Загрузить
            </button>
<? $this->endWidget() ?>
        </div>
        <div class='clear'></div>
    </div>
    <div class='modal-footer'>
        <button class='btn' data-dismiss='modal' aria-hidden='true'>Отмена</button>
    </div>
</div>