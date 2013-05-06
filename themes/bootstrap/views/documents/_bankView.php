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
           <? if ($reason = $current->organizationDecision) echo $reason->reason ?>
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
                    <? if ($decision = $file->organizationDecision) { ?>
                    <br/>
                        <? if ($decision->status == Files::STATUS_APPROVE) { ?>
                                            <span class="label label-success">Одобрено</span>
                <span class="updated"><?= Yii::app()->dateFormatter->formatDateTime($decision->date_created, 'long', 'short') ?></span>
            <a class="btn btn-danger btn-mini" href="#" rel="tooltip" data-refuse_id="<?= $file->id ?>" data-original-title="Отклонить" data-toggle="modal" data-target="#refuse-doc"><i class="icon-thumbs-down icon-white"></i></a>
        <? } else { ?>
            <span class="label label-important">Отклонено</span>
                <span class="updated"><?= Yii::app()->dateFormatter->formatDateTime($decision->date_created, 'long', 'short') ?></span>
 <? $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'  => 'ajaxLink',
                'label'       => '',
                'icon'        => 'thumbs-up white',
                'size'        => 'mini',
                'type'        => 'success',
                'url'         => '/requests/documents/default/consider/id/' . $file->id,
                'htmlOptions' => array(
                    'rel'                 => 'tooltip',
                    'data-original-title' => 'Одобрить',
                ),
                'ajaxOptions' => array(
                    'type'     => 'POST',
                    'data'     => array('status' => Files::STATUS_APPROVE),
                    'complete' => 'function(){
                        location.reload();
                    }'
                ),
            ))  ?>
            <? if($decision->reason) { ?>
            <br/>
            <span>Причина:</span>
            <?=$decision->reason?>
            <?  } ?>
        <? } ?>
        <? } else { ?>
            <? $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'  => 'ajaxLink',
                'label'       => '',
                'icon'        => 'thumbs-up white',
                'size'        => 'mini',
                'type'        => 'success',
                'url'         => '/requests/documents/default/consider/id/' . $file->id,
                'htmlOptions' => array(
                    'rel'                 => 'tooltip',
                    'data-original-title' => 'Одобрить',
                ),
                'ajaxOptions' => array(
                    'type'     => 'POST',
                    'data'     => array('status' => Files::STATUS_APPROVE),
                    'complete' => 'function(){
                        location.reload();
                    }'
                ),
            ))  ?>
            <a class="btn btn-danger btn-mini" href="#" rel="tooltip" data-refuse_id="<?= $file->id ?>" data-original-title="Отклонить" data-toggle="modal" data-target="#refuse-doc"><i class="icon-thumbs-down icon-white"></i></a>
        <? } ?>
            <br/>
            <span class="file-updated"><?= $count - $i == 1 ? 'Загружено' : 'Обновлено'; ?> <?= Yii::app()->dateFormatter->formatDateTime($file['dateCreated'], 'long', 'short') ?></span>
            </div>
            <? $i++ ?>
        <? } ?>
        </div>
        '><?= $count + 1 ?>-я версия</a><br/>
        <? } ?>
        <span class='updated'><?= count($data['models']) ? 'Обновлено' : 'Загружено' ?> <?= Yii::app()->dateFormatter->formatDateTime($current['dateCreated'], 'long', 'short') ?></span>
        <br/>
        <? if ($decision = $current->organizationDecision) { ?>
            <? if ($decision->status == Files::STATUS_APPROVE) { ?>
                <span class="label label-success">Одобрено</span>
                <span class='updated'><?= Yii::app()->dateFormatter->formatDateTime($decision->date_created, 'long', 'short') ?></span>
                <a class='btn btn-danger btn-mini' href='#' rel='tooltip' data-refuse_id='<?= $current->id; ?>' data-original-title="Отклонить" data-toggle='modal' data-target="#refuse-doc"><i class='icon-thumbs-down icon-white'></i></a>
            <? } else { ?>
                <span class="label label-important">Отклонено</span>
                <span class='updated'><?= Yii::app()->dateFormatter->formatDateTime($decision->date_created, 'long', 'short') ?></span>
                <? $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'  => 'ajaxLink',
                    'label'       => '',
                    'icon'        => 'thumbs-up white',
                    'size'        => 'mini',
                    'type'        => 'success',
                    'url'         => '/requests/documents/default/consider/id/' . $current->id,
                    'htmlOptions' => array(
                        'rel'                 => 'tooltip',
                        'data-original-title' => 'Одобрить',
                    ),
                    'ajaxOptions' => array(
                        'type'     => 'POST',
                        'data'     => array('status' => Files::STATUS_APPROVE),
                        'complete' => 'function(){
                        location.reload();
                    }'
                    ),
                ))  ?>
            <? } ?>
        <? } else { ?>
            <a class='btn btn-danger btn-mini' href='#' rel='tooltip' data-refuse_id='<?= $current->id; ?>' data-original-title="Отклонить" data-toggle='modal' data-target="#refuse-doc"><i class='icon-thumbs-down icon-white'></i></a>
            <? $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'  => 'ajaxButton',
                'label'       => '',
                'icon'        => 'thumbs-up white',
                'size'        => 'mini',
                'type'        => 'success',
                'url'         => '/requests/documents/default/consider/id/' . $current->id,
                'htmlOptions' => array(
                    'rel'                 => 'tooltip',
                    'data-original-title' => 'Одобрить',
                ),
                'ajaxOptions' => array(
                    'type'     => 'POST',
                    'data'     => array('status' => Files::STATUS_APPROVE),
                    'complete' => 'function(){
                        location.reload();
                    }'
                ),
            ))  ?>
        <? } ?>
    </div>
<? } ?>