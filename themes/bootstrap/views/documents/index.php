<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 20:12
 * All rights are reserved
 */
/* @var $form TbActiveForm
 * @var $this BaseController
 */
?>
<?
$types = Files::getFileTypes();
?>

    <h3>Документы</h3>
    <div class='sep'></div>
    <div class='aside-docs'>
        <?
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView'     => Yii::app()->user->organizationType == Organizations::TYPE_BANK ? '_bankView' : '_view',
            'itemsTagName' => 'div',
            'emptyText'    => '',
            'template'     => '{items} {pager}',
        ));
        ?>
        <?
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $other,
            'itemView'     => Yii::app()->user->organizationType == Organizations::TYPE_BANK ? '_bankView' : '_view',
            'itemsTagName' => 'div',
            'emptyText'    => '',
            'template'     => '{items} {pager}',
        ));
        ?>
        <? $main = $dataProvider->getData();
        $counter = 0;
        foreach ($main as $one) {
            $counter += count($one['models']);
        }
        if ($counter + $other->getTotalItemCount() == 0)
            echo CHtml::tag('span', array(), 'Не загружено ни одного документа');
        ?>

        <div class='clear'></div>
        <? if (Yii::app()->user->organizationType != Organizations::TYPE_BANK) { ?>
            <a class='btn upload-doc' href='#' data-toggle='modal' data-target="#upload-doc"><i
                    class='icon icon-upload'></i>
                Добавить документ</a>
        <? } ?>
    </div>
<? if (Yii::app()->user->organizationType != Organizations::TYPE_BANK) { ?>
    <!-- Modal -->
    <div id='upload-doc' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
         aria-hidden='true'>
        <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
            <h3>Добавить документ</h3>
        </div>
        <div class='modal-body'>
            <div class='hint-right'>
                <p>Добавляя новый документ, обратите внимание, что обычно для рассмотрения банки требуют следующий пакет
                    документов:</p>
                <ul>
                    <li>Копия паспорта</li>
                    <li>Копия трудовой книжки</li>
                    <li>Копия справки о доходах</li>
                </ul>
            </div>
            <div class='modal-content'>
                <?
                $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                    'action'      => "/requests/documents/default/upload/id/" . $request_id,
                    'method'      => 'POST',
                    'htmlOptions' => array(
                        'enctype' => 'multipart/form-data',
                    )
                ))
                ?>
                <?php echo $form->dropDownListRow($model, 'fileType', Files::getFileTypes(), array('class' => 'newfile-filetype')) ?>
                <?php echo $form->textField($model, 'comment', array('class' => 'newfile-filename')) ?>
                <?php echo $form->fileField($model, 'file', array('class' => 'newfile-input')) ?>
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

<? } else { ?>
    <!-- Modal -->
    <div id='refuse-doc' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
         aria-hidden='true'>
        <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
            <h3>Укажите причину</h3>
        </div>
        <form method='post' action='/requests/documents/default/consider/id/'>
            <div class='modal-body'>
                <input type='hidden' name='status' value='<?= Files::STATUS_REFUSE ?>'/>

                <div class="modal-body">
                    <textarea name='reason'></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button class='btn btn-danger' id='consider-btn'>
                    <i class='icon icon-thumbs-down icon-white'></i> Отклонить
                </button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
            </div>
        </form>
    </div>

<? } ?>