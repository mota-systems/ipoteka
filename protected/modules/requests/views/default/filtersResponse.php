<div class='banks_response'>
    <h3>Данные о банках</h3>
    <? foreach ($filters as $bank => $result) { ?>
    <div>

        <span><?=$bank?></span> - <span><?=$result === TRUE ? 'Проходит' : 'Не проходит - ' . $result?></span>
    </div>
    <? } ?>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Создать заявку'); ?>
    </div>
</div>