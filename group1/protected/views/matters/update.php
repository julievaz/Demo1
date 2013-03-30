<?php
/* @var $this MattersController */
/* @var $model Matters */

$this->breadcrumbs=array(
	'Matters'=>array('index'),
	$model->oppID=>array('view','id'=>$model->oppID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Matters', 'url'=>array('index')),
	array('label'=>'Create Matters', 'url'=>array('create')),
	array('label'=>'View Matters', 'url'=>array('view', 'id'=>$model->oppID)),
	array('label'=>'Manage Matters', 'url'=>array('admin')),
);
?>

<h1>Update Matters <?php echo $model->oppID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>