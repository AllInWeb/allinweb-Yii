<?php
/* @var $this QuestionController */
/* @var $model Question */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#question-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1>Управление вопросами</h1>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search', array(
    'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'           => 'question-grid',
    'dataProvider' => $model->search(),
    'filter'       => $model,
    'columns'      => array(
        'id',
        'theme',
        'fio',
        'email',
        'question',
        'date',
        array(
            'class'   => 'CButtonColumn',
            'template'=> '{answer}{update}{delete}',
            'buttons' => array(
                'answer' => array(
                    'label'   => 'Ответить',
                    'options' => array('class'=>'glyphicon glyphicon-check'),
                    'url'     => 'Yii::app()->createUrl("admin/answers/create", array("question_id" => $data->id))',
                    'visible' => '$data->answered == 0'
                )
            )
        ),
    ),
));?>