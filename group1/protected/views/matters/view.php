<?php
/* @var $this MattersController */
/* @var $model Matters */

$this->breadcrumbs=array(
	'Matters'=>array('index'),
	$model->oppID,
);

$this->menu=array(
	array('label'=>'List Matters', 'url'=>array('index')),
	array('label'=>'Create Matters', 'url'=>array('create')),
	array('label'=>'Update Matters', 'url'=>array('update', 'id'=>$model->oppID)),
	array('label'=>'Delete Matters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oppID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Matters', 'url'=>array('admin')),
);
?>

<h1>View Matters #<?php echo $model->oppID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oppID',
		'health',
		'money',
		'career',
		'education',
		'environment',
	),
)); ?>
