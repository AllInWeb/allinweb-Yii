<?php
/* @var $this AnswersController */
/* @var $model Answers */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCss('css','
    #qi{
        display: none;
    }
');
?>
<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'answers-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'body'); ?>
        <?php echo $form->textField($model,'body', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model,'body'); ?>
    </div>1

    <div class="row">
        <?php
        if (isset($_GET['question_id'])) {
            $qi = $_GET['question_id'] ;
        } else {
            $qi = null ;
        } ?>
        <?php echo $form->textField($model,'question_id',array('id'=>'qi','value'=>$qi)); ?>

    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Ответить' : 'Сохранить'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->