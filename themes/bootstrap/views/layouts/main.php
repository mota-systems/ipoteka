<?php /* @var $this BaseController */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css"/>

    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/main.less' rel='stylesheet/less' type='text/css' />
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/less-1.3.0.min.js" type="text/javascript"></script>
    <? Yii::app()->clientScript->registerScriptFile(
        Yii::app()->assetManager->publish(
            Yii::getPathOfAlias('application.data') . '/core.js'
        , false, -1, defined('YII_DEBUG') && YII_DEBUG===TRUE ? TRUE : FALSE),
        CClientScript::POS_END
    ); ?>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->init(); ?>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
//    'type'  => 'inverse',
    'items'       => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => $this->getMenuItems(),
        ),
        array(
            'class'       => 'application.components.widgets.TbCustomButton',
            'htmlOptions' => array('class' => 'pull-right'),
            'buttonType'  => 'link',
            'url'         => '/requests/'.Yii::app()->getModule('requests')->defaultController.'/create',
            'label'       => 'Новая заявка',
            'type'        => 'success',
//                'size'        => 'small',
            'icon'        => 'folder-open',
            'visible'     => Yii::app()->user->checkAccess('createRequest'),
        ),
    ),
    'htmlOptions' => array('style' => 'color:blue'),
)); ?>

<div class="container" id="page">

    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

    <div class="clearfix"></div>

    <footer class="row-fluid pagination-centered">
            Copyright &copy; <?php echo date('Y'); ?> by Mota-systems.<br/>
            All Rights Reserved.<br/>
    </footer>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
