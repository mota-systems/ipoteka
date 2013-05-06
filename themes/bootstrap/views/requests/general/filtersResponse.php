<div class='request-result-innert'>
    <h3>Данные о банках</h3>
    <table class='table-condensed'>
        <? $buttonView = FALSE ?>
        <? if (!count($filters)) { ?>
            <p> Пожалуйста, сначала добавьте в систему хотя бы один банк.</p>
        <? } ?>
        <? foreach ($filters as $bank => $result) { ?>
            <? if ($result === TRUE) {
                $buttonView = TRUE;
            }?>
            <tr>
                <td><?= $bank ?></td>
                <td>
                    <?php
                    $this->widget('bootstrap.widgets.TbLabel', array(
                        'type'  => $result === TRUE ? 'success' : 'important', // 'success', 'warning', 'important', 'info' or 'inverse'
                        'label' => $result === TRUE ? 'Проходит' : 'Не проходит',
                    ));
                    ?>
                </td>
            </tr>
            <?php if ($result && $result != 1) { ?>
                <tr>
                    <td colspan='2' class='text-error'><?php echo $result; ?></td>
                </tr>
            <? } ?>
            <tr>
                <td colspan='2' class='text-error'>
                    <div class='separator'></div>
                </td>
            </tr>
        <?
        }
        ?>
        <? if ($buttonView) { ?>
            <tr>
                <td colspan='2' class='pagination-centered'>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'  => 'submit',
                        'icon'        => 'icon-plus',
                        'label'       => 'Добавить клиента',
                        'type'        => 'success', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
//                        'htmlOptions' => array('class' => 'request-add-client')
                    ));
                    ?>
                </td>
            </tr>
        <? } ?>
    </table>
</div>