<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.scrollTo.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/single-0.1.0.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.infinitecarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/yoxview/yoxview-init.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-mousewheel-3.1.12/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php Yii::app()->getBasePath(); ?>/js/gs/greyScale.js"></script>


    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print"/>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/explorer.css"/>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">

    <title><?php echo Yii::app()->name;?></title>
</head>

<body>
<a href="#" id="mvup" title="Наверх страницы!"><img src="/images/up.png" width="70px" height="70px"></a>

<div id="head">
    <span id="callback">Звоните сейчас! (097) 17 23 104 | alexandr.pedan@gmail.com</span>
    <span id="links">
        <a href="#"><img src="/images/parts/tw-icon.png"></a>
        <a href="#"><img src="/images/parts/fb-icon.png"></a>
        <a href="#"><img src="/images/parts/vk-icon.png"></a>
    </span>
</div>

<div id="menu" align="center">
    <a href="<?php Yii::app()->createUrl('allinweb/'); ?>"><img src="/images/logo_2.png" id="lg"></a>
    <ul class="menu">
        <li><a href="#sites">Создание сайтов</a></li>
        <li><a href="#portfolio">Портфолио</a></li>
        <li><a href="#tarif">Тарифы</a></li>
        <li><a href="#faq">Задать вопрос</a></li>
        <li><a href="#contact">Контакты</a></li>
        <?php if (!Yii::app()->user->isGuest): ?>
            <li><a href="javascript:void(0)" onclick="function(0);">Управление</a>
                <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('/admin/site/index'); ?>" class="links">Управление контентом</a></li>
                    <li><?php echo CHtml::link('Выйти', array('site/logout')) ?></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</div>

<div id="single">
    <div data-target="sites" id="sites">
        <div class="content-resizer">
            <h2 class="message">Создание сайтов</h2>
            <?php $this->renderPartial('application.modules.admin.views.carousel.index', array('model' => $carousel)); ?>
            <p>
                <a href="#" data-link="portfolio" class="btn-normal"><img src="/images/next.png" width="40" height="40"></a>
            </p>
        </div>
    </div>
    <div data-target="portfolio" id="portfolio">
        <div class="content-resizer">
            <h2 class="message">Портфолио</h2>
            <?php $this->renderPartial('application.modules.admin.views.portfolio.index', array('model' => $portfolio)); ?>
            <p>
                <a href="#" data-link="tarif" class="btn-normal"><img src="/images/next.png" width="40" height="40"></a>
            </p>
        </div>
    </div>
    <div data-target="tarif" id="tarif">
        <div class="content-resizer">
            <h2 class="message">Тарифи</h2>
            <?php $this->renderPartial('application.modules.admin.views.tarif.index', array('model' => $tarif)); ?>
            <a href="#" data-link="faq" class="btn-normal"><img src="/images/next.png" width="40" height="40"></a>
        </div>
    </div>
    <div data-target="faq" id="faq">
        <div class="content-resizer">
            <h2 class="message">FAQ/ЧаВо</h2>
            <?php $this->renderPartial('application.modules.admin.views.question._form', array('model' => $question), false, true); ?>
            <div id="accordion">
                <span id="accordion">
                    <?php foreach ($questions as $question) { ?>
                        <h3 id="h3"><?php echo "<a href='#answer" . $question->id . "' id='plus'><img src='images/plus.png'></a>" . $question->question; ?></h3>
                        <div class="answers" id="answer<?php echo $question->answer->question_id; ?>">
                            <?php echo "<span id='answer'>" . $question->answer->body . "</span>"; ?>
                        </div>
                    <?php } ?>
                </span>
            </div>
            <a href="#" data-link="contact" class="btn-normal"><img src="/images/next.png" width="40" height="40"></a>
        </div>
    </div>
    <div data-target="contact" id="contact">
        <div class="content-resizer">
            <h2 class="message">Контакты</h2>
            <div id="contacts">
                <ul class="inln">
                    <li>Контактные телефоны:</li>
                    <li> +38065698933</li>
                    <li>+38065874112</li>
                </ul>
                <ul class="inln">
                    <li> E-mail: mail@ukr.net</li>
                    <li>Skype:allinweb</li>
                </ul>
                <ul class="inln">
                    <li> Адрес: г.Черкассы, ул.Пилипенка 6, оф.137</li>
                    <li> График работы:</li>
                    <li> Пн-Пт: 9-18</li>
                    <li> Сб-Вс: Выходной</li>
                </ul>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.105009341085!2d32.07588089391785!3d49.425828716014124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14b9f556822cf%3A0x109db8e9a554544e!2z0LLRg9C7LiDQn9Cw0YDQuNC30YzQutC-0Zcg0JrQvtC80YPQvdC4!5e0!3m2!1suk!2sua!4v1404305087519"
                width="500" height="350" frameborder="0" style="border:0">
            </iframe>
        </div>
    </div>
</div>

<div id="bottom-footer">
<div id="grey-line"></div>

<div id="info">
    <div id="list">
        <ul id="t">
            <li>Tекст</li>
            <li>Tекст</li>
            <li>Tекст</li>
            <li>Tекст</li>
            <li>Tекст</li>
        </ul>
    </div>
    Kонтакты<br>
    г.Черкассы, ул.Пилипенка 6, оф.137<br>
    Tелефон:+38065698933<br>
    Факс: 7777777777777777<br>
    E-mail:<span style="color: orange">alexandr.pedan@gmail.com</span><br>
    Вебсайт: www.AllinWeb.com<br>
</div>

<div id="foot">
    © All in Web 2014
    <span id="links">
        <a href="#"><img src="/images/parts/tw-icon.png"></a>
        <a href="#"><img src="/images/parts/fb-icon.png"></a>
        <a href="#"><img src="/images/parts/vk-icon.png"></a>
    </span>
</div>
</div>
</body>
