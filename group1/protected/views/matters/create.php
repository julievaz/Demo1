<?php
/* @var $this MattersController */
/* @var $model Matters */

$this->breadcrumbs=array(
	'Matters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Matters', 'url'=>array('index')),
	array('label'=>'Manage Matters', 'url'=>array('admin')),
);
?>

<h1>Create Matters</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>