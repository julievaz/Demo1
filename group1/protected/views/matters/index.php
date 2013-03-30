<?php
/* @var $this MattersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Matters',
);

$this->menu=array(
	array('label'=>'Create Matters', 'url'=>array('create')),
	array('label'=>'Manage Matters', 'url'=>array('admin')),
);
?>

<h1>Matters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
