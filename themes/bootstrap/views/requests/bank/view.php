<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
    "Заявка №$model->id",
);

//if (Yii::app()->user->hasFlash('considerOk')) {
$this->widget('bootstrap.widgets.TbAlert', array(
    'block'  => FALSE, // display a larger alert block?
    'fade'   => FALSE, // use transitions?
//        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array( // configurations per alert type
        'success' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'error'   => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'warning' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'info'    => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
    ),
));
//}

//$this->documentsModel = $model;

/*$this->menu = array(
    array('label' => 'Create Requests', 'url' => array('create')),
    array('label' => 'Delete Requests', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы десйтвительно хотите удалить заявку №'.$model->id.'?')),
    array('label' => 'Manage Requests', 'url' => array('admin')),
);*/
?>
<h1>
    <?php echo $model->fullName;
    if($model->organizationDecision) {
        switch ($model->organizationDecision->status_id) {
            case Requests::STATUS_APPROVE:
                $type = 'success';
                $label = 'Одобрена';
                break;
            case Requests::STATUS_REFUSE:
                $type = 'important';
                $label = 'Отклонена';
                break;
            case Requests::STATUS_RETRIEVE:
                $type = 'info';
                $label = 'Внести исправления';
                break;
            default:
                $type = 'info';
                $label = 'На рассмотрении';
                break;
        }
        $this->widget('bootstrap.widgets.TbLabel', array(
            'type'  => $type, // 'success', 'warning', 'important', 'info' or 'inverse'
            'label' => $label,
        ));
    } else {
        $this->widget('bootstrap.widgets.TbLabel', array(
            'type'  => 'success', // 'success', 'warning', 'important', 'info' or 'inverse'
            'label' => 'Новая заявка',
        ));
    }
    ?>
</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'summ',
        'initialFee',
        'type.type',
        'age'
    ),
)); ?>
<? if($model->statusHistoryOrganization){
    $this->renderPartial('_history', array('history'=>$model->statusHistoryOrganization));
}?>
<div>
    <!--    --><?// if ($this->availableToConsider) { ?>
    <? if ($model->organizationDecision) { ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'buttons' => array(
                array(
                    'buttonType'  => 'ajaxSubmit',
                    'type'        => 'success',
                    'icon'        => 'ok',
                    'label'       => 'Предварительно одобрить',
                    'url'         => "/requests/bank/consider/id/$model->id",
                    'ajaxOptions' => array(
                        'async'      => FALSE,
                        'data'       => array('status' => Requests::STATUS_APPROVE, Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken),
                        'beforeSend' => 'js:function(){
                        if(!confirm(\'Вы действительно хотите одобрить заявку?\')) return false;
                    }',
                        'complete'   => 'js:function() {
                           location.reload();
                    }'
                    ),
                ),
                array(
                    'buttonType'  => 'ajaxSubmit',
                    'type'        => 'danger',
                    'icon'        => 'ban-circle',
                    'label'       => 'Отказать',
                    'url'         => "/requests/bank/consider/id/$model->id/",
                    'ajaxOptions' => array(
                        'async'      => FALSE,
                        'data'       => array('status' => Requests::STATUS_REFUSE, Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken),
                        'beforeSend' => 'js:function(){
                        if(!confirm(\'Вы действительно хотите отклонить заявку?\')) return false;
                    }',
                        'complete'   => 'js:function() {
                          location.reload();
                     }'
                    ),
                ),
                array(
                    'buttonType'  => 'ajaxSubmit',
                    'type'        => 'info',
                    'icon'        => 'edit',
                    'label'       => 'Вернуть на исправление',
                    'url'         => "/requests/bank/consider/id/$model->id/",
                    'ajaxOptions' => array(
                        'async'      => FALSE,
                        'data'       => array('status' => Requests::STATUS_RETRIEVE, Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken),
                        'beforeSend' => 'js:function(){
                        if(!confirm(\'Вы действительно хотите вернуть заявку на исправление?\')) return false;
                    }',
                        'complete'   => 'js:function() {
                          location.reload();
                     }'
                    ),
                ),
            ),
        )) ?>
    <? } else { ?>
        <? $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'  => 'ajaxSubmit',
                'label'       => 'На рассмотрение',
                'type'        => 'info',
                'url'         => "/requests/bank/consider/id/$model->id/",
                'ajaxOptions' => array(
                    'async'      => FALSE,
                    'data'       => array('status' => Requests::STATUS_PENDING, Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken),
                    'beforeSend' => 'js:function(){
                        if(!confirm(\'Вы действительно хотите взять заявку на рассмотрение?\')) return false;
                    }',
                    'complete'   => 'js:function() {
                          location.reload();
                     }'
                )
            )
        );?>
    <? } ?>
    <!--    --><?// } ?>
</div>
<div id='comments'>
    <h3><?=Yii::app()->user->organizationType == Organizations::TYPE_BANK ? 'Общение с контрагентом' : 'Общение с банками'?></h3>
    <?  if (Yii::app()->user->checkAccess('viewAllComments')) {
        $organizations = Organizations::get_banks();
        $tabs = array();
        foreach ($organizations as $org_id => $org_name) {
            static $id = 0;
            if ($org_id == $model->author->organization_id)
                continue;
            $dataProvider = new CActiveDataProvider('Comments', array(
                'criteria'   => array(
                    'condition' => "request_id=$model->id AND ((recipient_id=$org_id AND organization_id={$model->author->organization_id}) OR (recipient_id={$model->author->organization_id} AND organization_id=$org_id))",
                    'order'     => 'date_created ASC',
                ),
                'pagination' => array(
                    'pageSize' => 10,
                ),));
//        $tabs[$org_name] = array('id' => $org_id, 'content' => $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments), TRUE));
            $tabs[] = array('label' => $org_name, 'content' => $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments, 'recipient_id' => $org_id, 'request_id'=>$model->id), TRUE));
//        $tabs[] = array('active'=>!$id ? TRUE : FALSE,'label' => $org_name, 'content' => $this->renderPartial(Yii::app()->theme->viewPath.'/comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments), TRUE));
            $id++;
        }

        $this->widget('bootstrap.widgets.TbTabs', array(
            'type' => 'tabs',
//        'tabs' => $tabs,
            'tabs' => $tabs,
            // additional javascript options for the tabs plugin
            /*'options' => array(
            'collapsible' => FALSE,
        ),*/
        ));
    } elseif (Yii::app()->user->checkAccess('viewOwnOrganizationComments')) {
        $dataProvider = new CActiveDataProvider('Comments', array(
                'criteria'   => array(
                    'condition' => "request_id=$model->id AND recipient_id={$model->author->organization->id} AND organization_id=" . Yii::app()->user->organization_id,
                    'order'     => 'date_created ASC',
                ),
                'pagination' => array(
                    'pageSize' => 10
                )
            )
        );
        $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments, 'recipient_id' => $model->author->organization->id, 'request_id'=>$model->id));
    }?>
</div>
