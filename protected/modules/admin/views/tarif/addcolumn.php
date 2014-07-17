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

    .inpt {
        width: 200px;

    }

    .inpt:focus {
        border: 1px solid cornflowerblue;
    }

    #dropcolumn table {
        width: 30%;
        border: 1px;
    }

    #dropcolumn table tr td{
    border: 1px solid #000000;
    width: 100px;
    height: 20px;
    }
</style>
<script type="text/javascript">

</script>
<div id="addcolumn">
    <?php echo CHtml::form(Yii::app()->createUrl('admin/tarif/addcolumn'), 'post'); ?>
    <span>
           <?php echo CHtml::textField('column', '', array('class' => 'inpt', 'placeholder' => 'Введите название поля')); ?>
        </span>
    <span>
           <?php echo CHtml::textField('alias', '', array('class' => 'inpt', 'placeholder' => 'Введите псевдоним поля')); ?>
        </span>
    <span><?php echo CHtml::dropDownList('type', 'val', array('int' => 'INT', 'string' => 'STING')); ?></span>
    <span><?php echo CHtml::submitButton('Добавить'); ?></span>
    <?php echo CHtml::endform(); ?>
</div>
<br>
<div id="dropcolumn">
    <table border="1px">
        <tr>
            <td>Колонка</td>
            <td>Опции</td>
        </tr>

        <?php foreach ($columns as $column => $val): ?>

            <tr>
                <td style="color: orange"><?php echo $column; ?></td>
                <td><?php echo CHtml::link('Удалить колонку', array('tarif/dropcolumn','column'=>$column),array('id'=>'drop-col')); ?></td>
            </tr>


        <?php endforeach; ?>
    </table>

</div>
