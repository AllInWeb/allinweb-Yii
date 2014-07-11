<?php
/* @var $this TarifController */
/* @var $model Tarif */

$this->breadcrumbs=array(
	'Tarifs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tarif', 'url'=>array('index')),
	array('label'=>'Manage Tarif', 'url'=>array('admin')),
);
?>

<h1>Create Tarif</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>