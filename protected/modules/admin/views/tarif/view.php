<?php
/* @var $this TarifController */
/* @var $model Tarif */
?>

<h1>View Tarif #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
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
