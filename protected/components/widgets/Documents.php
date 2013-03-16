<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 02.03.13
 * Time: 19:46
 * All rights are reserved
 */
Yii::import('zii.widgets.CPortlet');
class Documents extends CPortlet
{

    public $model;

    public $title = 'Документы';

    public $separator;
    public $hideOnEmpty = FALSE;


    protected function renderContent()
    {
        if (!empty($this->model)) {
            $dataProvider = new CActiveDataProvider('Files', array(
                'criteria'=>array(
                'condition'=>'request_id='.$this->model->id,
                )));
            $this->render('index', array('dataProvider' => $dataProvider));
        }
            }
}
