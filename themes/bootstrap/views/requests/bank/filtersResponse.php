<h3>Данные о банках</h3>
<dl class="dl-horizontal">
    <? foreach ($filters as $bank => $result) { ?>
    <dt><?=$bank?></dt>
    <dd>
        <?php $this->widget('bootstrap.widgets.TbLabel', array(
        'type'  => $result === TRUE ? 'success' : 'important', // 'success', 'warning', 'important', 'info' or 'inverse'
        'label' => $result === TRUE ? 'Проходит' : 'Не проходит - ' . $result,
    )); ?>
    </dd>
    <? } ?>
</dl>
<div class="row buttons">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'label'      => 'Добавить клиента',
    'type'       => 'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'       => 'large', // null, 'large', 'small' or 'mini'
)); ?>
</div>
