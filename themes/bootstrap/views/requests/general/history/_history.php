<dl class="dl-horizontal">
    <h3>Данные о банках</h3>
    <?
    $decisions = $model->decisions;
    if (count($decisions)) {
        foreach ($model->decisions as $decision) {
            ?>
            <dt><?= $decision->organization->name ?></dt>
            <?  $history = $model->statusHistory;
            foreach ($history as $one) {
                ?>
                <dd>
                    <?php
                    $this->widget('requests.components.widgets.StatusBadge', array(
                        'status' => $one->organization_id == $decision->organization_id ? $one->old_status : $decision->status_id, // 'success', 'warning', 'important', 'info' or 'inverse'
                    ));
                    ?>
                    <span>От <?= Yii::app()->dateFormatter->formatDateTime($one->organization_id == $decision->organization_id ? $one->date_created : $decision->date_created, 'long', 'short') ?></span>
                </dd>
            <? } ?>
        <?
        }
    }?>
</dl>