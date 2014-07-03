<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Admin';

?>
<style>
    #adminka h1{
        text-align: center;
    }
    .admin-items:nth-child(odd){
        background-color: khaki;
    }
    .admin-items:nth-child(even){
        background-color: lightgreen;
    }
</style>
<div id="adminka">
    <h1>Admin</h1>

    <div id="admin-carousel" class="admin-items">
        <h2>Carousel</h2>
        <?php echo CHtml::link('Create Carousel image',array('carousel/create'));?>
        <?php echo CHtml::link('View all Carousels images',array('carousel/admin'));?>
    </div>

    <div id="admin-portfolio" class="admin-items">
        <h2>Portfolio</h2>
        <?php echo CHtml::link('Add Portfolio',array('portfolio/create'));?>
        <?php echo CHtml::link('View all  Portfolio images',array('portfolio/admin'));?>
    </div>

</div>