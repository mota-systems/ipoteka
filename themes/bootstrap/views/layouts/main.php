<?php /* @var $this BaseController */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
//    'type'  => 'inverse',
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => $this->getMenuItems(),
        ),
        array(
            'class'       => 'application.components.widgets.TbCustomButton',
            'htmlOptions' => array('class' => 'pull-right'),
            'buttonType'  => 'link',
            'url'         => '/requests/default/create',
            'label'       => 'Новая заявка',
            'type'        => 'success',
//                'size'        => 'small',
            'icon'        => 'folder-open',
            'visible'     => Yii::app()->user->checkAccess('createRequest'),
        ),
    ),
    'htmlOptions'=>array('style'=>'color:blue'),
)); ?>

<div class="container" id="page">

    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by Mota-systems.<br/>
        All Rights Reserved.<br/>
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
