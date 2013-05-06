<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 08.04.13
 * Time: 13:14
 * All rights are reserved
 */
?>
<? if (!$this->action->countAll) { ?>
    <div class='alert alert-error'>Невозможно сформировать статистику. По выбранным параметрам не проходит ни одна заявка или еще не создано ни одной заявки.</div>
<? } else { ?>

    <div class='statistics-nav'>
        <div class="form-inline">
            Фильтровать&nbsp;
            <div class="btn-group">
                <a class="btn dropdown-toggle statistics-nav-dropper" data-toggle="dropdown" href="#">
                    По сотруднику
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href='#'>Корельский Илья</a></li>
                    <li><a href='#'>Корельский Илья</a></li>
                    <li><a href='#'>Корельский Илья</a></li>
                    <li><a href='#'>Корельский Илья</a></li>
                    <li><a href='#'>Корельский Илья</a></li>
                </ul>
            </div>

            <div class='statistics-range'>
                <span class="help-inline">По дате:</span>
                <input type="text" class="input-small statistics-range-start"><span class="help-inline">—</span>
                <input type="text" class="input-small statistics-range-end">
                <button class="btn btn-info">Показать</button>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle statistics-nav-dropper" data-toggle="dropdown" href="#">
                    По банку
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href='#'>Сбербанк</a></li>
                    <li><a href='#'>Банк Москвы</a></li>
                    <li><a href='#'>ВТБ24</a></li>
                </ul>
            </div>
        </div>

    </div>

    <table class='table table-statistics'>
        <thead>
            <tr>
                <th>Воронка</th>
                <th>Статус</th>
                <th>Доля</th>
                <th>Завок</th>
                <th>Сумма</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><div class='crater red'></div></td>
                <td>Все заявки</td>
                <td>100%</td>
                <td><?= $this->action->countAll ?></td>
                <td><?= intval($this->action->summAll->summary) ?></td>
            </tr>
            <tr>
                <td><div class='crater orange'></div></td>
                <td>На рассмотрении</td>
                <td><?= intval($this->action->countPending / $this->action->countAll * 100) ?>%</td>
                <td><?= $this->action->countPending ?></td>
                <td><?= intval($this->action->summPending->summary) ?></td>
            </tr>
            <tr>
                <td><div class='crater blue'></div></td>
                <td>Одобрены</td>
                <td><?= intval($this->action->countApprove / $this->action->countAll * 100) ?>%</td>
                <td><?= $this->action->countApprove ?></td>
                <td><?= intval($this->action->summApprove->summary) ?></td>
            </tr>
            <tr>
                <td><div class='crater green'></div></td>
                <td>Сделка</td>
                <td><?= intval($this->action->countDeal / $this->action->countAll * 100) ?>%</td>
                <td><?= $this->action->countDeal ?></td>
                <td><?= intval($this->action->summDeal->summary) ?></td>
            </tr>
        </tbody>
    </table>
<? } ?>