<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;

?>


<script type="text/javascript">
    $(document).ready(function(){
        $("#single").single();
       // $("#carousel").infiniteCarousel({});
        $('#carousel').infiniteCarousel({
            displayTime: 5000,
            textholderHeight : .25,
            displayProgressBar:false
        });
    });

</script>
<div id="single">

    <div data-target="sites" id="sites">
        <div class="content-resizer">
             <h2 class="message">Are you ready to take the tour?</h2>

<!---->
            <?php $this->renderPartial('/carousel/index',array('model'=>$carousel));?>
 <!---->

            <p>
                <a href="#" data-link="portfolio" class="btn-normal">Yes, let's go!</a>
            </p>
        </div>
    </div>

    <div data-target="portfolio" id="portfolio">
        <div class="content-resizer">
            <h2 class="message">Portfolio</h2>
            <!---->
            <?php $this->renderPartial('/portfolio/index',array('model'=>$portfolio));?>
            <!---->


            <p>
                <a href="#" data-link="sites" class="btn-normal">Back</a>
                <a href="#" data-link="tarif" class="btn-normal">Next</a>
            </p>
        </div>
    </div>

    <div data-target="tarif" id="tarif">
        <div class="content-resizer">
            <h2 class="message">Tarif.</h2>
            <a href="#" data-link="portfolio" class="btn-normal">Back</a>
            <a href="#" data-link="faq" class="btn-normal">Next</a>
        </div>
    </div>

    <div data-target="faq" id="faq">
        <div class="content-resizer">
            <h2 class="message">FAQ.</h2>
            <?php //cho $this->renderPartial('test');?>
            <?php //echo $this->renderPartial('faq',array('model'=>$formModel),false,true);?>
            <p>
                <span class="alt-img"></span>
            </p>
            <a href="#" data-link="tarif" class="btn-normal">Back</a>
            <a href="#" data-link="contact" class="btn-normal">Next</a>
        </div>
    </div>
    <style>
        .inln{
            padding: 5px;
            margin: 5px;
            text-align: left;
            float: left;
            display: inline-block;

        }
        .inln:nth-child(odd){

            border: 1px solid;
        }
        #contacts{
            text-align: center;
            margin-left: 120px;
            width: auto;
        }
    </style>
    <div data-target="contact" id="contact">
        <div class="content-resizer">
            <h2 class="message">Контакты</h2>
            <div id="contacts">


                <div class="inln">
                    <p>Контактные телефоны:</p>
                    <p> +38065698933</p>
                    <p>+38065874112</p>
                </div>
                <div class="inln">
                    <p> E-mail: mail@ukr.net</p>
                    <p>Skype:allinweb</p>
                </div>
                <div class="inln">
                    <p> Адрес: г.Черкассы, ул.Пилипенка 6, оф.137</p>
                    <p> График работы:</p>
                    <p> Пн-Пт: 9-18</p>
                    <p> Сб-Вс: Выходной</p>
                </div>

            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.105009341085!2d32.07588089391785!3d49.425828716014124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14b9f556822cf%3A0x109db8e9a554544e!2z0LLRg9C7LiDQn9Cw0YDQuNC30YzQutC-0Zcg0JrQvtC80YPQvdC4!5e0!3m2!1suk!2sua!4v1404305087519" width="500" height="350" frameborder="0" style="border:0"></iframe>
            <a href="#" data-link="faq" class="btn-normal">Back</a>
            <!--<a href="#" data-link="home" class="btn-normal">Back to top</a>-->
        </div>
    </div>

</div>







<!--
<div id="single">

    <div data-target="home" id="home">
        <div class="content-resizer">
            <h1 id="logo">Single.JS</h1>
            <h2 class="message">Are you ready to take the tour?</h2>
            <p>
                <a href="#" data-link="about" class="btn-normal">Yes, let's go!</a>
            </p>
        </div>
    </div>

    <div data-target="about" id="about">
        <div class="content-resizer">
            <h2 class="message">Single.JS was created to make it easy to create single-page websites to portfolios, presentations and more. Along with the Jquery Ease Plugin it offers beautiful animations to transition sections.</h2>
            <a href="#" data-link="home" class="btn-normal">Back</a>
            <a href="#" data-link="examples" class="btn-normal">Next</a>
        </div>
    </div>

    <div data-target="examples" id="examples">
        <div class="content-resizer">
            <h2 class="message">Single.JS resizes automatically the images for you, try to resize your browser's window and see the effect.</h2>
            <p>
                Test
            </p>
            <p>
                <span class="alt-img"></span>
            </p>
            <a href="#" data-link="about" class="btn-normal">Back</a>
            <a href="#" data-link="contact" class="btn-normal">Next</a>
        </div>
    </div>

    <div data-target="faq" id="faq">
        <div class="content-resizer">
            <h2 class="message">Задать вопрос(FAQ).</h2>
            <p>
                <?php //$this->renderPartial('faq',array('model'=>$formModel));?>
            </p>
            <p>
                <span class="alt-img"></span>
            </p>
            <a href="#" data-link="about" class="btn-normal">Back</a>
            <a href="#" data-link="contact" class="btn-normal">Next</a>
        </div>
    </div>



    <style>
        .inln{
            padding: 5px;
            margin: 5px;
            text-align: left;
            float: left;
            display: inline-block;

        }
        .inln:nth-child(odd){

            border: 1px solid;
        }
        #contacts{
            text-align: center;
            margin-left: 120px;
            width: auto;
        }
    </style>
    <div data-target="contact" id="contact">
        <div class="content-resizer">
            <h2 class="message">Контакты</h2>
<div id="contacts">


            <div class="inln">
                <p>Контактные телефоны:</p>
                <p> +38065698933</p>
                <p>+38065874112</p>
            </div>
            <div class="inln">
                <p> E-mail: mail@ukr.net</p>
                <p>Skype:allinweb</p>
            </div>
            <div class="inln">
                <p> Адрес: г.Черкассы, ул.Пилипенка 6, оф.137</p>
                <p> График работы:</p>
                <p> Пн-Пт: 9-18</p>
                <p> Сб-Вс: Выходной</p>
            </div>

</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.105009341085!2d32.07588089391785!3d49.425828716014124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14b9f556822cf%3A0x109db8e9a554544e!2z0LLRg9C7LiDQn9Cw0YDQuNC30YzQutC-0Zcg0JrQvtC80YPQvdC4!5e0!3m2!1suk!2sua!4v1404305087519" width="500" height="350" frameborder="0" style="border:0"></iframe>
           <a href="#" data-link="examples" class="btn-normal">Back</a>
            <a href="#" data-link="home" class="btn-normal">Back to top</a>
        </div>
    </div>

</div>-->



