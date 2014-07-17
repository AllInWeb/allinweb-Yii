<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - Admin';

?>
<style>
    #adminka h1, .admin-items h3 {
        text-align: center;
        color: orange;
    }
    .admin-items{
        border: 0.1em solid orange;
        padding: 15px;
    }
    /*.admin-items:nth-child(odd) {*/
        /*background-color: khaki;*/
    /*}*/

    /*.admin-items:nth-child(even) {*/
        /*background-color: lightgreen;*/
    /*}*/
    #admin-btn{
        text-decoration:none;
        text-align:center;
        padding:11px 32px;
        border:solid 1px #e67409;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius: 4px;
        font:10px "Courier New", Courier, monospace;
        font-weight:bold;
        color:#ede2d8;
        background:#e35d10;
        -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;
        -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;
        box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;

    }
    #admin-btn:hover{
         padding:11px 32px;
         border:solid 1px #e67409;
         -webkit-border-radius:4px;
         -moz-border-radius:4px;
         border-radius: 4px;
         font:10px "Courier New", Courier, monospace;
         font-weight:bold;
         color:#ede2d8;
         background:#e35d10;
         -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 5px #ffffff;
         -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 5px #ffffff;
         box-shadow:0px 0px 2px #bababa, inset 0px 0px 5px #ffffff;

     }
</style>
<div id="adminka">
    <h1>Админ панель</h1>
    <?php if (Yii::app()->user->checkAccess(2)): ?>
        <div id="admin-users" class="admin-items">
            <h3>Модераторы</h3>
            <?php echo CHtml::link('Добавить модератора', array('user/create'),array('id'=>'admin-btn')); ?>
            <?php echo CHtml::link('Все пользователи', array('user/admin'),array('id'=>'admin-btn')); ?>
        </div>
    <?php endif; ?>

    <div id="admin-carousel" class="admin-items">
        <h3>Карусель</h3>
        <?php echo CHtml::link('Добавить картинку в карусель', array('carousel/create'),array('id'=>'admin-btn')); ?>
        <?php echo CHtml::link('Все картинки Карусели', array('carousel/admin'),array('id'=>'admin-btn')); ?>
    </div>

    <div id="admin-portfolio" class="admin-items">
        <h3>Портфолио</h3>
        <?php echo CHtml::link('Добавить портфолио', array('portfolio/create'),array('id'=>'admin-btn')); ?>
        <?php echo CHtml::link('Все портфолио', array('portfolio/admin'),array('id'=>'admin-btn')); ?>
    </div>
    <div id="admin-tarif" class="admin-items">
        <h3>Тарифы</h3>
        <?php echo CHtml::link('Новый тариф', array('tarif/create'),array('id'=>'admin-btn')); ?>
        <?php echo CHtml::link('Менеджер колонок', array('tarif/addcolumn'),array('id'=>'admin-btn')); ?>
        <?php echo CHtml::link('Все тарифы', array('tarif/admin'),array('id'=>'admin-btn')); ?>
    </div>
    <div id="admin-faq" class="admin-items">
        <h3>Вопросы/ответы</h3>
        <?php
        $criteria = new CDbCriteria();
        $criteria->condition = "answered = 0";
        ?>
        <?php echo CHtml::link("Все вопросы(Новых-" . count(Question::model()->findAll($criteria)) . ")", array('question/admin'),array('id'=>'admin-btn')); ?>
        <?php echo CHtml::link("Все ответы", array('answers/admin'),array('id'=>'admin-btn')); ?>
    </div>

</div>