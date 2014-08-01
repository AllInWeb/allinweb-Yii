<?php
/* @var $this QuestionController */
/* @var $model Question */
?>

<h1>Редактировать вопрос <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>