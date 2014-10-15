<?php
$this->pageTitle = Yii::app()->name . ' - Admin';
Yii::app()->clientScript->registerCss('admin-panel','
   #adminka h1, .admin-items h3 {
        text-align: center;
        color: orange;
   }
   #admin-btn {
        color: #fff; /* цвет текста */
        text-decoration: none; /* убирать подчёркивание у ссылок */
        user-select: none; /* убирать выделение текста */
        background: orange; /* фон кнопки */
        padding: .7em 1.5em; /* отступ от текста */
        /*outline: none; *//* убирать контур в Mozilla */
        outline: #269abc;
        border: none;
    }
     /* при наведении курсора мышки */
    #admin-btn:hover {
        background: #eea236;
    }
    #admin-btn:active {
        background: orange;
    }
   .admin-items{
        padding: 15px;
   }
');
?>

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
        <?php echo CHtml::link("Все вопросы(Новых-" . $count . ")", array('question/admin'),array('id'=>'admin-btn')); ?>
        <?php echo CHtml::link("Все ответы", array('answers/admin'),array('id'=>'admin-btn')); ?>
    </div>

</div>