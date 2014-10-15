<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */
?>

<h1>View Portfolio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'image',
        'description',
    ),
)); ?>
