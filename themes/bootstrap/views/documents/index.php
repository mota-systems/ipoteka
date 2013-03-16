<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 20:12
 * All rights are reserved
 */

/*$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template' => '{items} {pager}',
));*/
?>


<? /*$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'ajaxLink',
    'type'=>'primary',
    'size'=>'small',
    'url'=>'/requests/default/upload',
    'label'=>'Добавить документ',
    'block'=>true,
    'ajaxOptions'=>array(
        'onClick'=>'$("#uploadDocument).dialog("open");',
        'update'=> "#uploadDocument"
    ),
));*/
?>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me',
    'buttonType'=>'ajaxLink',
    'type'=>'primary',
    'url'=>'/requests/default/upload',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#uploadDocument',
    ),
    'ajaxOptions'=>array(
        'onClick'=>'$("uploadDocument").modal({"show":true})',
        'update'=> "#uploadDocument"
    ),
)); ?>
<div id='uploadDocument'></div>
