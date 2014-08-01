<?php
/* @var $this CarouselController */
/* @var $model Carousel */

$this->breadcrumbs = array(
    'Carousels' => array('index'),
    $model->id,
);
$this->menu = array(
    array('label' => 'List Carousel',   'url' => array('index')),
    array('label' => 'Create Carousel', 'url' => array('create')),
    array('label' => 'Update Carousel', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Carousel', 'url' => '#', 'linkOptions'=>array('submit' => array('delete','id' => $model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label' => 'Manage Carousel', 'url' => array('admin')),
);
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
