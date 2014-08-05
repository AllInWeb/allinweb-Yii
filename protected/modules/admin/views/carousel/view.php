<?php
/* @var $this CarouselController */
/* @var $model Carousel */
?>

<h1>View Carousel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'image',
        'description',
        'price',
        'days',
    ),
)); ?>
