<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 18.03.13
 * Time: 22:26
 * All rights are reserved
 */
?>
<h4>История изменения статусов</h4>
<table class='table table-striped table-history'>
    <thead>
    <tr>
        <th>Дата</th>
        <th>Изменение статуса</th>
        <th>Подробнее</th>
        <th>Автор</th>
    </tr>
    </thead>
    <? foreach ($history as $one) { ?>
        <?
        $date = new CDateFormatter('ru_ru');
        $date = $date->formatDateTime($one->date_created, 'long', 'short');
        ?>
        <tr>
            <td><?= $date ?>
            <td>
                <?php
                $this->widget('requests.components.widgets.StatusBadge', array(
                    'status' => $one->old_status, // 'success', 'warning', 'important', 'info' or 'inverse'
                ));
                ?>
                <i class='icon icon-arrow-right'></i>
                <?php
                $this->widget('requests.components.widgets.StatusBadge', array(
                    'status' => $one->new_status, // 'success', 'warning', 'important', 'info' or 'inverse'
                ));
                ?>
            </td>
            <td><? if ($one->reason) { ?><i class='icon icon-eye-open' data-content='<?= $one->reason ?>'></i><? } ?>
            </td>
            <td><?= $one->author->phio ?></td>
        </tr>
    <? } ?>
</table>