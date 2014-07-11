<?php
/* @var $this QuestionController */
/* @var $model Question */
?>

<h1>Create Question</h1>

<?php $this->renderPartial('application.modules.admin.views.question._form', array('model'=>$model,'questions'=>$questions)); ?>