<?php
/* @var $this TarifController */
/* @var $model Tarif */

$this->breadcrumbs=array(
	'Tarifs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tarif', 'url'=>array('index')),
	array('label'=>'Create Tarif', 'url'=>array('create')),
	array('label'=>'Update Tarif', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tarif', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarif', 'url'=>array('admin')),
);
?>

<h1>View Tarif #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'price',
		'period',
		'map',
		'comments',
		'basket',
		'qa',
	),
)); ?>
