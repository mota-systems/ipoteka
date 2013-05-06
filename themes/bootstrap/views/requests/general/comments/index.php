<h4><?= Yii::app()->user->organizationType == Organizations::TYPE_BANK ? 'Общение с контрагентом' : 'Общение с банками' ?></h4>
<?
if (Yii::app()->user->checkAccess('viewAllComments')) {
    $organizations = Organizations::get_banks();
    $tabs = array();
    foreach ($organizations as $org_id => $org_name) {
        if ($org_id == $model->author->organization_id)
            continue;
        $dataProvider = new CActiveDataProvider('Comments', array(
            'criteria'   => array(
                'condition' => "request_id=$model->id AND ((recipient_id=$org_id AND t.organization_id={$model->author->organization_id}) OR (recipient_id={$model->author->organization_id} AND t.organization_id=$org_id))",
                'order'     => 't.date_created DESC',
                'with'      => array(
                    'author',
                    'files',
                ),
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),));
        $tabs[] = array('label' => $org_name, 'content' => $this->renderPartial('/general/comments/_index', array('dataProvider' => $dataProvider, 'model' => new Comments, 'recipient_id' => $org_id, 'request_id' => $model->id), TRUE));
    }

    $this->widget('bootstrap.widgets.TbTabs', array(
        'type' => 'tabs',
        'tabs' => $tabs,
    ));
} elseif (Yii::app()->user->checkAccess('viewOwnOrganizationComments')) {
    $dataProvider = new CActiveDataProvider('Comments', array(
            'criteria'   => array(
                'condition' => "request_id=$model->id AND ((recipient_id=" . Yii::app()->user->organization_id . " AND t.organization_id=" . $model->author->organization_id . ") OR (recipient_id=" . $model->author->organization_id . " AND t.organization_id=" . Yii::app()->user->organization_id . "))",
                'order'     => 't.date_created DESC',
                'with'      => array(
                    'author',
                    'files',
                ),
            ),
            'pagination' => array(
                'pageSize' => 5
            )
        )
    );
    $this->renderPartial('/general/comments/_index', array('dataProvider' => $dataProvider, 'model' => new Comments, 'recipient_id' => $model->author->organization_id, 'request_id' => $model->id));
}
?>