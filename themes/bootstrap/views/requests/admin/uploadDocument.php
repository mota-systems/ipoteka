<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 23:37
 * All rights are reserved
 */
/*$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'      => 'uploadDocument',
    'options' => array(
        'title'    => 'Загрузить документ',
        'autoOpen' => TRUE,
        'modal'    => 'true',
        'width'   => 'auto',
        'height'   => 'auto',
    ),
));*/
?>
<? $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'uploadDocument')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>

<div class="modal-body">
    <p>One fine body...</p>
</div>

<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'        => 'primary',
    'label'       => 'Save changes',
    'url'         => '#',
    'htmlOptions' => array('data-dismiss' => 'modal'),
)); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'       => 'Close',
    'url'         => '#',
    'htmlOptions' => array('data-dismiss' => 'modal'),
)); ?>
</div>

<?php $this->endWidget(); ?>
<?php //$this->endWidget('zii.widgets.jui.CJuiDialog'); ?>