<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>
<style>
    #qm {
        /*float: left;*/
        /*margin-top: -200px ;*/
    }

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
</style>
<div class="loading">
    <img src="/images/loading.gif" width="30" height="30">
</div>
<div class="flash-success">
</div>
<div id="errors">
</div>
<div id="inserted-form">
    <div class="form">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'question-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,

        )); ?>
        <?php echo $form->errorSummary($model); ?>
        <!--        <pre>-->
        <!--    --><?php //var_dump(Tarif::model()->attributeLabels());?>
        <!--</pre>-->
        <div class="row">
            <!--        --><?php //echo $form->labelEx($model, 'theme'); ?>
            <?php echo $form->textField($model, 'theme', array('size' => 30, 'maxlength' => 255, 'placeholder' => 'Тема', 'id' => 'theme', 'class' => 'inputs')); ?>
            <?php echo $form->error($model, 'theme'); ?>
        </div>

        <div class="row">
            <!--        --><?php //echo $form->labelEx($model, 'fio'); ?>
            <?php echo $form->textField($model, 'fio', array('size' => 30, 'maxlength' => 255, 'placeholder' => 'ФИО', 'id' => 'fio', 'class' => 'inputs')); ?>
            <?php echo $form->error($model, 'fio'); ?>
        </div>

        <div class="row">
            <!--        --><?php //echo $form->labelEx($model, 'email'); ?>
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
            <!--        --><?php //echo $form->labelEx($model, 'question'); ?>
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

//alert('Ваш вопрос успешно задан!');

                                    $('.flash-success').show().append('' +data.message +'<br>').delay(5000).fadeOut(700);


//                                $(".flash-success").append('<h3>'+JSON.stringify(data.message)+'</h3>');
//                                alert(JSON.stringify(data.message));

                            }
//                            else{
//                                var i ='Ваш вопрос успешно задан!';
//                                $(i).appendTo('.flash-success');
//                            }
                            //  $(".flash-success").html('sfsdfs');
//                            $.jsonParse();
                            // $(".flash-success").append($(data).each());
                            // $(".flash-success").append(data.message).show().delay(5000).fadeOut(700);
                            // $(".flash-success").html(data).show().delay(5000).fadeOut(700);


                        }
                    });
                    //endajax

//                    $('.inputs').each(function () {
//                        if (!$(this).val()) {
//                            xhr.abort();
//                            $(".flash-success").hide();
//                            $(this).addClass('empty');
//                            var placeholder = $(this).attr('placeholder');
//                            $('#errors').append("<span>Поле " + placeholder + " не должно быть пустым!</span><br>");
//
//                        }
//                    });


                    /**
                     * Валидация адреса email
                     */

//                    var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
//                    if (!pattern.test($('#email').val())) {
//                        $('#errors').append("<span>Неправильно введен E-mail !</span><br>");
//                        xhr.abort();
//                    }
                });
            });

            //            $(document).ready(function () {
            //
            //                $('#qa-btn').click(function (e) {
            //                    e.preventDefault();
            //
            //
            //                    var xhr = $.ajax({
            //                        type: 'POST',
            //                        url: '/admin/question/asq',
            //                        data: $('#question-form').serialize(),
            //                        dataType: 'html',
            //                        beforeSend: function () {
            //                            $(".loading").show()
            //                            $('.inputs').each(function () {
            //                                $(this).removeClass('empty');
            //
            //                            });
            //                            $('#errors').html('');
            //                        },
            //                        success: function (data) {
            //                            $(".flash-success").html(data).show().delay(5000).fadeOut(700);
            //
            //                            $(".loading").hide();
            //                        }
            //                    });//endajax
            //
            //                    $('.inputs').each(function () {
            //                        if (!$(this).val()) {
            //                            xhr.abort();
            //                            $(".flash-success").hide();
            //                            $(this).addClass('empty');
            //                            var placeholder = $(this).attr('placeholder');
            //                            $('#errors').append("<span>Поле " + placeholder + " не должно быть пустым!</span><br>");
            //
            //                        }
            //                    });
            //
            //
            //                    /**
            //                     * Валидация адреса email
            //                     */
            //
            //                    var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
            //                    if (!pattern.test($('#email').val())) {
            //                        $('#errors').append("<span>Неправильно введен E-mail !</span><br>");
            //                        xhr.abort();
            //                    }
            //                });
            //            });
        </script>
        <!--        <p id="error_message"></p>-->
        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Задать вопрос' : 'Сохранить', array('id' => 'qa-btn')); ?>
            <?php //echo CHtml::Button('Задать вопрос',array('onclick'=>'send();')); ?>
        </div>
        <?php $this->endWidget(); ?>

    </div>
    <!-- form -->

    <div id="qm">
        <img src="/images/qm.png" width="150" height="170">
    </div>
</div>