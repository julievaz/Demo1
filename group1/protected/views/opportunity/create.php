<?php
/* @var $this OpportunityController */
/* @var $model Opportunity */

$this->breadcrumbs=array(
	'Opportunities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opportunity', 'url'=>array('index')),
	array('label'=>'Manage Opportunity', 'url'=>array('admin')),
);
?>

<h1>Create Opportunity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>