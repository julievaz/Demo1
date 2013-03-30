<?php
/* @var $this OpportunityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opportunities',
);

$this->menu=array(
	array('label'=>'Create Opportunity', 'url'=>array('create')),
	array('label'=>'Manage Opportunity', 'url'=>array('admin')),
);
?>

<h1>Opportunities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
