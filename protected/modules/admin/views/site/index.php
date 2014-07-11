<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - Admin';

?>
<style>
    #adminka h1, .admin-items h3 {
        text-align: center;
    }

    .admin-items:nth-child(odd) {
        background-color: khaki;
    }

    .admin-items:nth-child(even) {
        background-color: lightgreen;
    }
</style>
<div id="adminka">
    <h1>Админ панель</h1>
    <?php if (Yii::app()->user->checkAccess(2)): ?>
        <div id="admin-users" class="admin-items">
            <h3>Модераторы</h3>
            <?php echo CHtml::link('Добавить модератора', array('user/create')); ?>
            <?php echo CHtml::link('Все пользователи', array('user/admin')); ?>
        </div>
    <?php endif; ?>

    <div id="admin-carousel" class="admin-items">
        <h3>Карусель</h3>
        <?php echo CHtml::link('Добавить картинку в карусель', array('carousel/create')); ?>
        <?php echo CHtml::link('Все картинки Карусели', array('carousel/admin')); ?>
    </div>

    <div id="admin-portfolio" class="admin-items">
        <h3>Портфолио</h3>
        <?php echo CHtml::link('Добавить портфолио', array('portfolio/create')); ?>
        <?php echo CHtml::link('Все портфолио', array('portfolio/admin')); ?>
    </div>
    <div id="admin-tarif" class="admin-items">
        <h3>Тарифы</h3>
        <?php echo CHtml::link('Новый тариф', array('tarif/create')); ?>
        <?php echo CHtml::link('Дабавить колонку', array('tarif/addcolumn')); ?>
        <?php echo CHtml::link('Все тарифы', array('tarif/admin')); ?>
    </div>
    <div id="admin-tarif" class="admin-items">
        <h3>Вопросы/ответы</h3>
        <?php
        $criteria = new CDbCriteria();
        $criteria->condition = "answered = 0";
        ?>
        <?php echo CHtml::link("Все вопросы(Новых-" . count(Question::model()->findAll($criteria)) . ")", array('question/admin')); ?>
        <?php echo CHtml::link("Все ответы", array('answers/admin')); ?>
    </div>

</div>