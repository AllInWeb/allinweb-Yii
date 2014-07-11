<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 7/9/14
 * Time: 9:41 AM
 */
?>
<style>

    #addcolumn span {

        padding: 10px;
    }
    #clmn{
        width: 200px;
    }
</style>

<div id="addcolumn">
   <?php echo CHtml::form(Yii::app()->createUrl('admin/tarif/addcolumn'), 'post'); ?>
        <span>
           <?php echo CHtml::textField('column','',array('id'=>'clmn','placeholder'=>'Введите название поля')); ?>
        </span>
        <span><?php echo CHtml::dropDownList('type', 'val', array('int' => 'INT', 'string' => 'STING')); ?></span>
        <span><?php echo CHtml::submitButton('Добавить'); ?></span>
   <?php echo CHtml::endform(); ?>
</div>