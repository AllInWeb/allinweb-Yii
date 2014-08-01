<?php
/* @var $this TarifController */
/* @var $model Tarif */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'tarif-form',
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'type'); ?>
        <?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'price'); ?>
        <?php echo $form->textField($model,'price'); ?>
        <?php echo $form->error($model,'price'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'period'); ?>
        <?php echo $form->textField($model,'period',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'period'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'map'); ?>
        <?php echo $form->checkBox($model,'map'); ?>
        <?php echo $form->error($model,'map'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'comments'); ?>
        <?php echo $form->checkBox($model,'comments'); ?>
        <?php echo $form->error($model,'comments'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'basket'); ?>
        <?php echo $form->checkBox($model,'basket'); ?>
        <?php echo $form->error($model,'basket'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'qa'); ?>
        <?php echo $form->checkBox($model,'qa'); ?>
        <?php echo $form->error($model,'qa'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cms'); ?>
        <?php echo $form->checkBox($model,'cms'); ?>
        <?php echo $form->error($model,'cms'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'unlimpage'); ?>
        <?php echo $form->checkBox($model,'unlimpage'); ?>
        <?php echo $form->error($model,'unlimpage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'freefill'); ?>
        <?php echo $form->checkBox($model,'freefill'); ?>
        <?php echo $form->error($model,'freefill'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'blog'); ?>
        <?php echo $form->checkBox($model,'blog'); ?>
        <?php echo $form->error($model,'blog'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'visitstat'); ?>
        <?php echo $form->checkBox($model,'visitstat'); ?>
        <?php echo $form->error($model,'visitstat'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'votes'); ?>
        <?php echo $form->checkBox($model,'votes'); ?>
        <?php echo $form->error($model,'votes'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'rotator'); ?>
        <?php echo $form->checkBox($model,'rotator'); ?>
        <?php echo $form->error($model,'rotator'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'gallery'); ?>
        <?php echo $form->checkBox($model,'gallery'); ?>
        <?php echo $form->error($model,'gallery'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'contact'); ?>
        <?php echo $form->checkBox($model,'contact'); ?>
        <?php echo $form->error($model,'contact'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'catalog'); ?>
        <?php echo $form->checkBox($model,'catalog'); ?>
        <?php echo $form->error($model,'catalog'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'forum'); ?>
        <?php echo $form->checkBox($model,'forum'); ?>
        <?php echo $form->error($model,'forum'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sitemap'); ?>
        <?php echo $form->checkBox($model,'sitemap'); ?>
        <?php echo $form->error($model,'sitemap'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'google'); ?>
        <?php echo $form->checkBox($model,'google'); ?>
        <?php echo $form->error($model,'google'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'huu'); ?>
        <?php echo $form->checkBox($model,'huu'); ?>
        <?php echo $form->error($model,'huu'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->