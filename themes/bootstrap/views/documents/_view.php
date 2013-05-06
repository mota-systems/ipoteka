<?php /**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 20:19
 * All rights are reserved
 */
?>
<? if (count($data['models'])) { ?>
    <div class='each'>
        <? $current = array_pop($data['models']) ?>
        <!--<? echo CHtml::link($data['fileType'], "/requests/documents/default/download/id/$current->id/", array('class' => 'name')); ?>-->
        
        <a class='name' data-content='
           <a href="/requests/documents/default/download/id/<?= $current->id; ?>/"><i class="icon icon-download"></i> Скачать документ</a>
           <div class="sep clearfix"></div>
           Решение
           ' href='#'><?= $data['fileType']; ?></a>
        
        <br/>
        <? if (count($data['models']) > 0) { ?>
            <? $count = count($data['models']) ?>
            <a class='version' href='#' data-content='
                       <div class="version-files">
                       <? static $i; ?>
                       <? foreach (array_reverse($data['models']) as $file) { ?>
                       <div class="file-each">
                       <a class="file-name" href="<?= "/requests/documents/default/download/id/$file->id" ?>"><i class="icon icon-file"></i> <?= $count - $i ?>-я версия</a>
                       <?= CHtml::ajaxLink('<i class="icon icon-trash"></i> Удалить', "/requests/documents/default/delete/id/$file->id", array('success' => 'function(){location.reload();}'), array('class' => 'delete')) ?>
                       <br />
                       <span class="file-updated"><?= $count - $i == 1 ? 'Загружено' : 'Обновлено'; ?> <?= Yii::app()->dateFormatter->formatDateTime($file['dateCreated'], 'long', 'short') ?></span>
                       </div>
                       <? $i++ ?>
                       <? } ?>
                       </div>
                       '><?= $count + 1 ?>-я версия</a><br/>
        <? } ?>
        <span
            class='updated'><?= count($data['models']) ? 'Обновлено' : 'Загружено' ?> <?= Yii::app()->dateFormatter->formatDateTime($current['dateCreated'], 'long', 'short') ?></span>
        <br/>
        <?= CHtml::ajaxLink('<i class=\'icon icon-trash\'></i> Удалить', '/requests/documents/default/delete/id/' . $current->id, array('success' => 'function(){location.reload();}'), array('class' => 'delete')) ?>
    </div>
<? } ?>