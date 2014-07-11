<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>
<style>
    .form{
        float: left;
    }
    .loading{
        display: none;
    }
    #answers{

    }
 </style>
<div  class="loading">
    <img src="/images/loading.gif" width="30" height="30">
</div>
<div id="message">

</div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('size'=>30,'maxlength'=>255,'placeholder'=>'Тема')); ?>
		<?php echo $form->error($model,'theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fio'); ?>
		<?php echo $form->textField($model,'fio',array('size'=>30,'maxlength'=>255,'placeholder'=>'ФИО')); ?>
		<?php echo $form->error($model,'fio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>255,'placeholder'=>'Ваш Email')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
    <?php if(!$model->isNewRecord):?>
        <div class="row">
            <?php echo $form->labelEx($model,'actual'); ?>
            <?php echo $form->checkBox($model,'actual'); ?>
            <?php echo $form->error($model,'actual'); ?>
        </div>
    <?php endif;?>

	<div class="row">
		<?php echo $form->labelEx($model,'question'); ?>
		<?php echo $form->textArea($model,'question',array('rows'=>6, 'cols'=>50,'placeholder'=>'Вопрос')); ?>
		<?php echo $form->error($model,'question'); ?>
	</div>

	<div class="row buttons">
        <?php if($model->isNewRecord){?>
        <?php echo CHtml::ajaxSubmitButton('Задать вопрос', Yii::app()->createUrl('question/asq'),
        array(
            'type' => 'POST',
            //'data' => 'js: $("#question-form").serialize()',
            'dataType'=>'html',
            'beforeSend' => 'js:  function(){
$(".loading").show();
            }',
            'success' => 'js:function(data){
                     $("#message").html(data);
                      $(".loading").hide();
                    }'
        ), array('class' => 'someCssClass',));
        ?>
        <?php }else { ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Сохранить'); }?>
	</div>

<?php $this->endWidget(); ?>


<!--<div id="answers">-->
<!--    --><?php //if($model->isNewRecord):?>
<!--    <div>-->
<!--        --><?php //$this->renderPartial('application.modules.admin.views.question.pages.answers',array('model'=>$questions))?>
<!--    </div>-->
<!--    --><?php //endif;?>
<!--</div>-->

</div><!-- form -->
<!--<img src="/images/qm.png">-->