<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
    "Заявка №$model->id",
);

$this->menu = array(
    array('label' => 'Create Requests', 'url' => array('create')),
    array('label' => 'Delete Requests', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы десйтвительно хотите удалить заявку №'.$model->id.'?')),
    array('label' => 'Manage Requests', 'url' => array('admin')),
);
?>

<h1>View Requests #<?php echo $model->id; ?></h1>
<?
$formatter = new CDateFormatter('ru_ru');
$dateCreated = $formatter->formatDateTime($model->date_created, 'long', 'short');
$birthday = $formatter->formatDateTime($model->birthday, 'long', FALSE);
$issue = $formatter->formatDateTime($model->passport_issue, 'long', FALSE);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'surname',
        'patronymic',
        'name',
        array(
            'name' => 'sex',
            'type' => 'raw',
            'value' => Requests::getNameByType($model->sex),
        ),
        array(
            'name' => 'birthday',
            'type' => 'raw',
            'value' => $birthday,
        ),
        'birthday_place',
        'citizenship',
        'passport_seria',
        'passport_number',
        array(
            'name' => 'passport_issue',
            'type' => 'raw',
            'value' => $issue,
        ),
        'passport_issued',
        array(
            'label' => $model->getAttributeLabel('created_by_user_id'),
            'type' => 'raw',
            'value' => $model->author->phio
        ),
        array(
            'name' => 'date_created',
            'type' => 'raw',
            'value' => $dateCreated,
        )
    ),
)); ?>
<? if ($model->commentCount > 0) {
    if (!Yii::app()->user->checkAccess('viewAllComments')) {
        $organizations = Organizations::get_banks();
        $tabs = array();
        foreach ($organizations as $org_id => $org_name) {
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
            $tabs[$org_name] = array('id'=>$org_id, 'content'=>$this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments), TRUE));
        }

        $this->widget('zii.widgets.jui.CJuiTabs', array(
            'tabs' => $tabs,
            // additional javascript options for the tabs plugin
            'options' => array(
                'collapsible' => FALSE,
            ),
        ));
    } elseif (Yii::app()->user->checkAccess('viewOwnOrganizationComments')) {
        $dataProvider = new CActiveDataProvider('Comments', array(
                'criteria' => array(
                    'condition' => "request_id=$model->id AND recipient_id={$model->author->organization->id} AND organization_id=" . Yii::app()->user->organization_id,
                    'order' => 'date_created DESC',
                ),
                'pagination' => array(
                    'pageSize'=>10
                )
            )
        );
       $this->renderPartial('//comments/index', array('dataProvider' => $dataProvider, 'model' => new Comments));
    }
} ?>