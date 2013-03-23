<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div class="row">
        <div class="content span9">
            <?php echo $content; ?>
        </div>
        <? if ($this->menu OR isset($this->documentsModel)) { ?>
            <aside class='span3'>
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => 'Операции',
                ));
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'items'       => $this->menu,
                    'htmlOptions' => array('class' => 'operations'),
                ));
                $this->endWidget();
                ?>
                <?
                if (isset($this->documentsModel))
                    $this->widget('application.components.widgets.Documents', array(
                        'model' => $this->documentsModel
                    ));
                ?>
            </aside><!-- sidebar -->
        <? } ?>
    </div>
<?php $this->endContent(); ?>