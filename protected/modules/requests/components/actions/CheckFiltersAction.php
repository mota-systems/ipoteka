<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 23.03.13
 * Time: 16:33
 * All rights are reserved
 */

class CheckFiltersAction extends CAction
{

    public function run()
    {
        $data = $_POST['Requests'];
        $organizations = Organizations::model()->banks()->with(array(
            'filters' => array(
                'scopes' => array(
                    'objectTypeId' => $data['objectTypeId']
                )
            )))->findAll();
        $results = array();
        foreach ($organizations as $bank) {
            $filters = $bank->filters;
            if (!count($filters)) {
//                $model = new Requests('filter');
//                $model->addError('objectTypeId', 'Не дает займы по выбранному типу объекта');
//                $results[$bank->name] = CHtml::errorSummary($model, FALSE);
                $results[$bank->name] = TRUE;
            } else {
                foreach ($filters as $filter) {
                    $model = new Requests('filter');
                    $model->attributes = $data;
                    $model->filter = $filter;
                    if ($model->validate())
                        $results[$bank->name] = TRUE;
                    else
                        $results[$bank->name] = CHtml::errorSummary($model, FALSE);
                }
            }
        }
        $this->controller->renderPartial('/general/filtersResponse', array('filters' => $results));
    }

}