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
<style>
    #carousel {
        margin: 0 auto;
        width: 700px;
        height: 590px;
        padding: 0;
        overflow: scroll;
        border: 2px solid #999;
    }
    #carousel ul {
        list-style: none;
        width: 1500px;
        margin: 0;
        padding: 0;
        position: relative;
    }
    #carousel li {
        display: inline;
        float: left;
    }
    .textholder {

        text-align: left;
        font-size: large;
        padding: 6px;
        -moz-border-radius: 6px 6px 0 0;
        -webkit-border-top-left-radius: 6px;
        -webkit-border-top-right-radius: 6px;
    }
    #mvup {
        position: fixed;
        display: none;

    }

    * {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 20px;
    }

    ul.menu {

        margin-left: -100px;
        padding: 0;
        display: inline-block;
        background-color: #2b2b2b;
        background-repeat: no-repeat;
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4f4f4f), to(#2b2b2b));
        background-image: -webkit-linear-gradient(#4f4f4f, #2b2b2b);
        background-image: -moz-linear-gradient(top, #4f4f4f, #2b2b2b);
        background-image: -ms-linear-gradient(#4f4f4f, #2b2b2b);
        background-image: -o-linear-gradient(#4f4f4f, #2b2b2b);
        background-image: linear-gradient(#4f4f4f, #2b2b2b);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4f4f4f', endColorstr='#2b2b2b', GradientType=0);
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        width: 700px;

    }

    ul.menu li {
        float: left;
        list-style: none;
        border-right: 1px solid #4f4f4f;
        position: relative;
    }

    ul.menu li a {
        color: white;
        display: block;
        font-family: Arial;
        font-size: 13px;
        padding: 8px 20px 10px;
        text-decoration: none;
        border-right: 1px solid #2b2b2b;
    }

    ul.menu li a:hover {
        background-color: #2b2b2b;
    }

    ul.menu li:first-child a:hover {
        border-radius: 4px 0 0 4px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
    }

    ul.menu li ul {
        display: none;
    }

    ul.menu li:hover ul {
        display: block;
        position: absolute;

        border-radius: 0 0 4px 4px;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        background-color: #2b2b2b;
        z-index: 1000;
    }

    ul.menu li:hover ul li {
        float: none;
        width: 150px;
        border-right: none;
    }

    ul.menu li:hover ul li a {
        border-top: 1px solid #4f4f4f;
        border-right: none;
        padding: 6px 20px 8px;
    }

    ul.menu li:hover ul li a:hover {
        background-color: transparent;
        color: #c1deff;
    }

    ul.menu li:hover ul li:first-child a:hover {
        border-radius: 0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
    }
</style>
<script type="text/javascript">

        $(document).ready(function () {

//            $(window).scroll(function () {
//                if ($(this).scrollTop() > 100) {
//                    $('#mvup').fadeIn();
//                } else {
//                    $('#mvup').fadeOut();
//                }
//            });
//            $('#mvup').click(function () {
//                $('body,html').animate({scrollTop: 0}, 400);
//                return false;
//            });
//            $("#menu li a, #menu li ul li a").click(function () {
//                var selected = $(this).attr('href');
//                $.scrollTo(selected, 555);
//                return false;
//            });
        });
   </script>
<a href="#" id="mvup"><img src="images/up.png" width="70px" height="70px"></a>

<div class="container" id="page">
<div id="mainmenu">
        <a href="/yii/project/index.php"><img src="images/lg.jpg" width="100px" height="100px" id="lg"></a>

        <div id="menu">
            <ul class="menu">
                <li><a href="#sites">Создание сайтов</a>
                    <!--<ul>
                        <li><a href="#test1" class="links">Сайт визитка</a></li>
                        <li><a href="#test2" class="links">Корпоративный сайт</a></li>
                        <li><a href="#test3" class="links">Сайт-каталог</a></li>
                        <li><a href="#test2" class="links">Интернет-магазин</a></li>
                        <li><a href="#test3" class="links">Сайт портал</a></li>
                    </ul>-->
                </li>
                <li><a href="#portfolio">Портфолио</a></li>
                <li><a href="#tarif">Тарифы</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Контакты</a></li>
                <?php if (!Yii::app()->user->isGuest): ?>

                    <li><a href="javascript:void(0)" onclick="function(0);">Управление</a>
                        <ul>
                            <li><a href="/yii/project/index.php?r=site/page&view=adminpanel" class="links">Управление контентом</a></li>
                            <li><a href="#test2" class="links">Добавить модератора</a></li>
                            <li><?php echo CHtml::link('Вийти', array('site/logout')) ?></li>
                        </ul>

                    </li>
                <?php endif; ?>


            </ul>

        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>

    <!-- mainmenu -->

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
