<?php
/* @var $this UserController */
/* @var $user User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),

);
?>

<h1>Create User</h1>

<?php echo $this->renderPartial('_form', array('user'=>$user, 'person'=>$person)); ?>