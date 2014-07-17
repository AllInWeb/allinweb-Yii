<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script>
     <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.scrollTo.js" type="text/javascript"></script>


   <!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script> -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/single-0.1.0.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css">
    <?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css">


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.infinitecarousel.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/yoxview/yoxview-init.js"></script>





    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">


    <!-- mainmenu -->

    <?php echo $content; ?>

    <div class="clear"></div>


</div>
<!-- page -->

</body>
</html>
