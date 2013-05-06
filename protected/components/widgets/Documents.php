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

    public $title;

    public $separator;
    public $hideOnEmpty = FALSE;


    protected function renderContent()
    {
        if (!empty($this->model)) {
            $files = Files::model()->findAllByAttributes(array('request_id' => $this->model->id));
            $docs = array(Files::TYPE_PASSPORT => array(), Files::TYPE_LABOR_BOOK => array(), Files::TYPE_SECOND_DOCUMENT => array(), Files::TYPE_INCOME_STATEMENT => array(), Files::TYPE_OTHER_DOCUMENT => array());
            foreach ($files as $file) {
                $docs[$file->fileType][] = $file;
            }
            $items = array(
                array('id' => 1, 'fileType' => 'Копия паспорта', 'models' => $docs[Files::TYPE_PASSPORT]),
                array('id' => 2, 'fileType' => 'Второй документ', 'models' => $docs[Files::TYPE_SECOND_DOCUMENT]),
                array('id' => 3, 'fileType' => 'Трудовая книжка', 'models' => $docs[Files::TYPE_LABOR_BOOK]),
                array('id' => 4, 'fileType' => 'Справка о доходах', 'models' => $docs[Files::TYPE_INCOME_STATEMENT]),
            );
            $other = array();
            static $counter;
            foreach($docs[Files::TYPE_OTHER_DOCUMENT] as $file){
                $other[] = array('id'=>++$counter, 'fileType'=>$file->comment, 'models'=>array($file));
            }
            $dataProvider = new CArrayDataProvider($items, array('pagination' => FALSE));
            $otherDataProvider = new CArrayDataProvider($other, array('pagination' => FALSE));
            $this->render('index', array(
                'model'        => new Files,
                'request_id'   => $this->model->id,
                'dataProvider' => $dataProvider,
                'other'        => $otherDataProvider,
            ));
        }
    }
}
