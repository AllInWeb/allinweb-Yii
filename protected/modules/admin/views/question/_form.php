<?php
Yii::app()->clientScript->registerCss('question','
    .form {
        /*background-color: red;*/
        float: left;
        text-align: left;
        width: 350px;
        height: 310px;
    }
    .loading {
        padding: 10px;
        display: none;
        margin-right: 700px;
    }
    .flash-success {
        display: none;
    }
    .empty {
        border: 1px solid crimson;
        background-color: pink;
    }
    #errors {
        text-align: left;
        background-color: pink;
        width: 300px;
        border: 1px solid crimson;
        display:none;

    }
');
?>
<div class="loading">
    <img src="/images/loading.gif" width="30" height="30">
</div>
<div class="flash-success"> </div>
<div id="errors"> </div>
<div id="inserted-form">
    <div class="form">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'question-form',
            'enableAjaxValidation' => false,
        )); ?>
        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->textField($model, 'theme', array('size' => 30, 'maxlength' => 255, 'placeholder' => 'Тема', 'id' => 'theme', 'class' => 'inputs')); ?>
            <?php echo $form->error($model, 'theme'); ?>
        </div>

        <div class="row">
            <?php echo $form->textField($model, 'fio', array('size' => 30, 'maxlength' => 255, 'placeholder' => 'ФИО', 'id' => 'fio', 'class' => 'inputs')); ?>
            <?php echo $form->error($model, 'fio'); ?>
        </div>

        <div class="row">
            <?php echo $form->textField($model, 'email', array('size' => 30, 'maxlength' => 255, 'placeholder' => 'Ваш Email', 'id' => 'email', 'class' => 'inputs')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>
        <?php if (!$model->isNewRecord): ?>
            <div class="row">
                <?php echo $form->labelEx($model, 'actual'); ?>
                <?php echo $form->checkBox($model, 'actual'); ?>
                <?php echo $form->error($model, 'actual'); ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <?php echo $form->textArea($model, 'question', array('rows' => 6, 'cols' => 50, 'placeholder' => 'Вопрос', 'id' => 'quest', 'class' => 'inputs')); ?>
            <?php echo $form->error($model, 'question'); ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#qa-btn').click(function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: '/admin/question/asq',
                        data: $('#question-form').serialize(),
                        dataType: 'json',
                        beforeSend: function () {
                            $(".loading").show();
                            $('#errors').html('');
                        },
                        success: function (data) {
                            $(".loading").hide();
                            if (data.code === 400) {
                                $.each(data.errors,function(key,val){
                                    $('#errors').show().append('' +val +'<br>');
                                });
                            }
                            else if(data.code === 300){
                                $('.flash-success').show().append('' +data.message +'<br>').delay(5000).fadeOut(700);
                            }
                        }
                    });
                });
            });
        </script>
        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Задать вопрос' : 'Сохранить', array('id' => 'qa-btn')); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
    <!-- form -->

    <div id="qm">
        <img src="/images/qm.png" width="150" height="170">
    </div>
</div>