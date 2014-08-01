<?php
/* @var $this TarifController */
/* @var $data Tarif */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
    <?php echo CHtml::encode($data->type); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
    <?php echo CHtml::encode($data->price); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('period')); ?>:</b>
    <?php echo CHtml::encode($data->period); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('map')); ?>:</b>
    <?php echo CHtml::encode($data->map); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
    <?php echo CHtml::encode($data->comments); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('basket')); ?>:</b>
    <?php echo CHtml::encode($data->basket); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('qa')); ?>:</b>
    <?php echo CHtml::encode($data->qa); ?>
    <br />

</div>