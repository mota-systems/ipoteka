<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
    "Заявка №$model->id",
);

/*$this->menu = array(
    array('label' => 'Create Requests', 'url' => array('create')),
    array('label' => 'Delete Requests', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы десйтвительно хотите удалить заявку №'.$model->id.'?')),
    array('label' => 'Manage Requests', 'url' => array('admin')),
);*/
?>
<?php $fullName = "$model->surname $model->name $model->patronymic"; ?>
<h1><?php echo $fullName;?></h1>
<?
/*$formatter = new CDateFormatter('ru_ru');
$dateCreated = $formatter->formatDateTime($model->date_created, 'long', 'short');
$birthday = $formatter->formatDateTime($model->birthday, 'long', FALSE);
$issue = $formatter->formatDateTime($model->passport_issue, 'long', FALSE);*/

?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data' =>$model,
    'attributes' => array(
        'summ',
        'initialFee',
        'type.type',
        'age'
    ),
)); ?>
<div id='comments'>
    <?  if (Yii::app()->user->checkAccess('viewAllComments')) {
    $organizations = Organizations::get_banks();
    $tabs = array();
    foreach ($organizations as $org_id => $org_name) {
        static $id = 0;
        if ($org_id == $model->author->organization_id)
            continue;
        $dataProvider = new CActiveDataProvider('Comments', array(
            'criteria' => array(
                'condition' => "request_id=$model->id AND ((recipient_id=$org_id AND organization_id={$model->author->organization_id}) OR (recipient_id={$model->author->organization_id} AND organization_id=$org_id))",
                'order' => 'date_created DESC',
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),));
//        $tabs[$org_name] = array('id' => $org_id, 'content' => $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments), TRUE));
        $tabs[] = array('label' => $org_name, 'content' => $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments), TRUE));
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
            'criteria' => array(
                'condition' => "request_id=$model->id AND recipient_id={$model->author->organization->id} AND organization_id=" . Yii::app()->user->organization_id,
                'order' => 'date_created DESC',
            ),
            'pagination' => array(
                'pageSize' => 10
            )
        )
    );
    $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments));
}?>
</div>
