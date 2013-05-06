<?php
/* @var $this FiltersController */
/* @var $data Filters */
?>
<div class='filter-each'>
    <table class='table'>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('objectTypeId')); ?></td>
            <td><?php echo CHtml::encode($data->objectType->type); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('fee')); ?></td>
            <td><?php echo CHtml::encode($data->fee); ?>%</td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('min_summ')); ?></td>
            <td><?php echo CHtml::encode($data->min_summ); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('max_summ')); ?></td>
            <td><?php echo CHtml::encode($data->max_summ); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('min_borrower_age')); ?></td>
            <td><?php echo CHtml::encode(Yii::app()->format->formatAge($data->min_borrower_age)); ?></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('max_borrower_age')); ?></td>
            <td><?php echo CHtml::encode(Yii::app()->format->formatAge($data->max_borrower_age)); ?></td>
        </tr>
    </table>

    <?
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'size' => 'small',
        'buttons' => array(
            array(
                'label' => 'Редактировать',
                //'type' => 'info',
                'icon' => 'pencil',
                'url' => array('update', 'id' => $data->id),
            ),
        ),
    ));
    
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'size' => 'small',
        'buttons' => array(
            array(
                'label' => 'Удалить',
                'buttonType' => 'ajaxSubmit',
                'ajaxOptions' => array(
                    'success' => "function(){location.reload();}",
                ),
                'type' => 'danger',
                'icon' => 'trash white',
                'url' => array('delete', 'id' => $data->id),
            ),
        ),
    ));
    ?>
</div>