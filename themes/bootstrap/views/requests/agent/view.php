<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
    "Заявка №$model->id",
);

//$this->documentsModel = $model;
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

?>

<h1>
    <?php echo $model->fullName;?>

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
<div id='considers'>
    <dl class="dl-horizontal">
        <h3>Данные о банках</h3>
        <? if ($model->decisions) {
        foreach ($model->decisions as $decision) {
            ?>
            <dt><?=$decision->organization->name?></dt>
            <dd>
                <? switch ($decision->status_id) {
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
            }?>
                <?php $this->widget('bootstrap.widgets.TbLabel', array(
                'type'  => $type, // 'success', 'warning', 'important', 'info' or 'inverse'
                'label' => $label,
            )); ?>
            </dd>
            <? }
    }?>
    </dl>
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
    $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments));
}?>
</div>
