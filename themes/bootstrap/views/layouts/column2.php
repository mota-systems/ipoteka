<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div class="row">
        <div class="content span9">
            <?php echo $content; ?>
        </div>
        <? if ($this->menu OR $this->documentsModel) { ?>
            <aside class='span3'>
                <?php
                if ($this->menu) {
                    $this->beginWidget('application.components.widgets.CustomPortlet', array(
                        'htmlOptions' => array(
                            'class' => 'aside-filters',
                        ),
                        'title'       => $this->menuTitle ? $this->menuTitle : 'Операции',
                        'titleTag'    => 'h3',
                    ));
                    $this->widget('bootstrap.widgets.TbMenu', array(
                        'type'    => 'list',
                        'stacked' => FALSE,
                        'items'   => $this->menu,
                        'encodeLabel'=>false,
                    ));
                    $this->endWidget();
                }
                ?>
                <?
                if (isset($this->documentsModel)) {
                    $this->widget('application.components.widgets.Documents', array(
                        'model' => $this->documentsModel,
                    ));
                    ?>
                <? } ?>

                <!--<div class='aside-filters'>
                    <h3>Фильтры</h3>
                    <ul class='nav nav-list'>
                        <li class='nav-header'>Стандартные</li>
                        <li class='active'><a href=''>Все заявки</a></li>
                        <li><a href=''>Черновики <span class='badge'>2</span></a></li>
                        <li><a href=''>На рассмотрении <span class='badge badge-warning'>10</span></a></li>
                        <li><a href=''>Одобренные заявки <span class='badge badge-success'>5</span></a></li>
                        <li><a href=''>Требуют исправления <span class='badge badge-important'><i
                                        class='icon icon-white icon-comment'></i> 2</span></a></li>
                        <li class='divider'></li>
                        <li class='nav-header'>Пользовательские</li>
                        <li><a href=''>Заявки с ВТБ24</a></li>
                        <li class='divider'></li>
                    </ul>
                    <a class='btn' href=''><i class='icon icon-plus'></i> Создать фильтр</a>
                </div>-->

            </aside><!-- sidebar -->
        <? } ?>
    </div>
<?php $this->endContent(); ?>