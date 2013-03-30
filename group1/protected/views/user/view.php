<?php
/* @var $this UserController */
/* @var $user User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$user->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$user->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$user->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View User #<?php echo $user->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$user,
	'attributes'=>array(
		'username',
            array(
                'name' =>'person_fname',
                'header'=>'First Name',
                'value'=>$user->person->fname,
                ),
            array(
                 'name' =>'person_lname',
                'header'=>'Last Name',
                'value'=>$user->person->lname,
                ),
   
	),
)); ?>
