<?php
/* @var $this TarifController */
/* @var $model Tarif */

$this->breadcrumbs=array(
	'Tarifs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarif', 'url'=>array('index')),
	array('label'=>'Create Tarif', 'url'=>array('create')),
	array('label'=>'View Tarif', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tarif', 'url'=>array('admin')),
);
?>

<h1>Update Tarif <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>