<?php
/* @var $this AnswersController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Answers</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
