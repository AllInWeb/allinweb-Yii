<?php
/* @var $this TarifController */
/* @var $model Tarif */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'type'); ?>
        <?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'price'); ?>
        <?php echo $form->textField($model,'price'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'period'); ?>
        <?php echo $form->textField($model,'period',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'map'); ?>
        <?php echo $form->textField($model,'map'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'comments'); ?>
        <?php echo $form->textField($model,'comments'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'basket'); ?>
        <?php echo $form->textField($model,'basket'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'qa'); ?>
        <?php echo $form->textField($model,'qa'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'cms'); ?>
        <?php echo $form->textField($model,'cms'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'unlimpage'); ?>
        <?php echo $form->textField($model,'unlimpage'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'freefill'); ?>
        <?php echo $form->textField($model,'freefill'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'blog'); ?>
        <?php echo $form->textField($model,'blog'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'visitstat'); ?>
        <?php echo $form->textField($model,'visitstat'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'votes'); ?>
        <?php echo $form->textField($model,'votes'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'rotator'); ?>
        <?php echo $form->textField($model,'rotator'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'gallery'); ?>
        <?php echo $form->textField($model,'gallery'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'contact'); ?>
        <?php echo $form->textField($model,'contact'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'catalog'); ?>
        <?php echo $form->textField($model,'catalog'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'forum'); ?>
        <?php echo $form->textField($model,'forum'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'sitemap'); ?>
        <?php echo $form->textField($model,'sitemap'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'google'); ?>
        <?php echo $form->textField($model,'google'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'huu'); ?>
        <?php echo $form->textField($model,'huu'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->