<?php
/* @var $this OpportunityController */
/* @var $model Opportunity */

$this->breadcrumbs=array(
	'Opportunities'=>array('index'),
	$model->oppID=>array('view','id'=>$model->oppID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opportunity', 'url'=>array('index')),
	array('label'=>'Create Opportunity', 'url'=>array('create')),
	array('label'=>'View Opportunity', 'url'=>array('view', 'id'=>$model->oppID)),
	array('label'=>'Manage Opportunity', 'url'=>array('admin')),
);
?>

<h1>Update Opportunity <?php echo $model->oppID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>