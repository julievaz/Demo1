<?php
/* @var $this OpportunityController */
/* @var $model Opportunity */

$this->breadcrumbs=array(
	'Opportunities'=>array('index'),
	$model->oppID,
);

$this->menu=array(
	array('label'=>'List Opportunity', 'url'=>array('index')),
	array('label'=>'Create Opportunity', 'url'=>array('create')),
	array('label'=>'Update Opportunity', 'url'=>array('update', 'id'=>$model->oppID)),
	array('label'=>'Delete Opportunity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oppID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opportunity', 'url'=>array('admin')),
);
?>

<h1>View Opportunity #<?php echo $model->oppID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oppID',
		'orgID',
		'nameID',
		'svcOpp',
		'svcLoc',
		'city',
		'state',
		'zip',
		'need',
		'dateTime',
		'participants',
	),
)); ?>
