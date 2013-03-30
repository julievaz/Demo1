<?php
/* @var $this MattersController */
/* @var $data Matters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oppID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oppID), array('view', 'id'=>$data->oppID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('health')); ?>:</b>
	<?php echo CHtml::encode($data->health); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('money')); ?>:</b>
	<?php echo CHtml::encode($data->money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('career')); ?>:</b>
	<?php echo CHtml::encode($data->career); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education')); ?>:</b>
	<?php echo CHtml::encode($data->education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('environment')); ?>:</b>
	<?php echo CHtml::encode($data->environment); ?>
	<br />


</div>