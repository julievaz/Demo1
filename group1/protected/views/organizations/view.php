<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	$model->orgID,
);

$this->menu=array(
	array('label'=>'List Organizations', 'url'=>array('index')),
	array('label'=>'Create Organizations', 'url'=>array('create')),
	array('label'=>'Update Organizations', 'url'=>array('update', 'id'=>$model->orgID)),
	array('label'=>'Delete Organizations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orgID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Organizations', 'url'=>array('admin')),
);
?>

<h1>View Organizations #<?php echo $model->orgID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orgID',
		'orgName',
		'address',
		'city1',
		'state1',
		'zip1',
		'website',
		'orgOverview',
		'logistics',
		'insurance',
		'procTime',
		'details1',
		'availability',
		'background',
		'details2',
		'drugTest',
		'other',
		'comments',
	),
)); ?>
