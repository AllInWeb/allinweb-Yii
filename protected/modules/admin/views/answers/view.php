<?php
/* @var $this AnswersController */
/* @var $model Answers */
?>

<h1>View Answers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'body',
        'question_id',
    ),
)); ?>