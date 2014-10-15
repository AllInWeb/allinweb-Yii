<?php
/* @var $this QuestionController */
/* @var $model Question */
?>

<h1>View Question #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'theme',
        'fio',
        'email',
        'question',
        'date',
    ),
)); ?>
