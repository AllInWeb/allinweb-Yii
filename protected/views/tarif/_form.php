<?php
/* @var $this TarifController */
/* @var $model Tarif */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarif-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->