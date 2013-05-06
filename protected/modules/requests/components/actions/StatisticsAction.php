<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 07.04.13
 * Time: 22:26
 * All rights are reserved
 */

class StatisticsAction extends CAction
{
    public $countPending, $countApprove, $countDeal, $countAll;
    public $summPending, $summApprove, $summDeal, $summAll;
    public $stuff;
    private $filter;

    public function run()
    {

        /*---All--*/
        $countAllCriteria = new CDbCriteria;
//        $this->countAll = Requests::model()->count(); //TODO: Переделать в завязку на метод Requests->search();
//        $this->summAll = Requests::model()->find(new CDbCriteria(array(
//            'select' => new CDbExpression('SUM(summ) AS summary'),
//        )));

        /*---MainCriteria---*/
        $main = new CDbCriteria;
//        $main->group = 'request_id';
        $main->select = new CDbExpression('DISTINCT(request_id)') . ',requests.date_created, t.status_id, t.organization_id, ' . new CDbExpression('SUM(requests.summ)') . ' as summary';
        $main->join = 'LEFT JOIN `requests` ON `t`.`request_id`=`requests`.`id`';

        if (isset($_GET['Filter']) AND is_array($_GET['Filter'])) {
            $this->filter = $_GET['Filter'];
            if (isset($this->filter['bank']) AND !empty($this->filter['bank']) AND intval($this->filter['bank'])) {
                $this->stuff = CHtml::listData(Users::model()->organization($this->filter['bank'])->findAll(), 'id', 'id');
                $countAllCriteria->addInCondition('created_by_user_id', CHtml::listData(Users::model()->organization($this->filter['bank'])->findAll(), 'id', 'id'));
                $main->addColumnCondition(array('organization_id' => $this->filter['bank']));
            }
            if (isset($this->filter['date_start']) AND !empty($this->filter['date_start'])) {
                $parser = CDateTimeParser::parse($this->filter['date_start'], 'dd.MM.yyyy');
                if ($parser) {
                    $countAllCriteria->addCondition("date_created>='" . date('Y-m-d', $parser) . "'");
                    $main->addCondition("requests.date_created>='" . date('Y-m-d', $parser) . "'");
                }
            }
            if (isset($this->filter['date_end']) AND !empty($this->filter['date_end'])) {
                $parser = CDateTimeParser::parse($this->filter['date_end'], 'dd.MM.yyyy');
                if ($parser) {
                    $countAllCriteria->addCondition("date_end<='" . date('Y-m-d', $parser) . "'");
                    $main->addCondition("requests.date_end<='" . date('Y-m-d', $parser) . "'");

                }
            }
        }
        /*---All---*/
        $this->countAll = Requests::model()->count($countAllCriteria);
        $countAllCriteria->select = array(new CDbExpression('SUM(summ) as summary'));
        $this->summAll = Requests::model()->find($countAllCriteria);

        /*---Pending---*/
        $countPendingCriteria = clone $main;
        $countPendingCriteria->addCondition('t.status_id=' . Requests::STATUS_PENDING);
        $this->countPending = Decision::model()->count($countPendingCriteria);
        $countPendingCriteria->select = array(new CDbExpression('SUM(summ) as summary'), 't.status_id');
        $this->summPending = Decision::model()->find($countPendingCriteria);

        /*---Approved---*/
        $countApproveCriteria = clone $main;
        $countApproveCriteria->addCondition('t.status_id=' . Requests::STATUS_APPROVE);
        $this->countApprove = Decision::model()->count($countApproveCriteria);
        $countApproveCriteria->select = array(new CDbExpression('SUM(summ) as summary'), 't.status_id');
        $this->summApprove = Decision::model()->find($countApproveCriteria);

        /*---Deal---*/
        $countDealCriteria = $main;
        $countDealCriteria->addCondition('t.status_id=' . Requests::STATUS_DEAL);
        $this->countDeal = Decision::model()->count($countDealCriteria);
        $countDealCriteria->select = array(new CDbExpression('SUM(summ) as summary'), 't.status_id');
        $this->summDeal = Decision::model()->find($countDealCriteria);

        $this->controller->render('/general/statistics');
    }
}