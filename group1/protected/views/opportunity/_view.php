<?php
/* @var $this OpportunityController */
/* @var $data Opportunity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oppID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oppID), array('view', 'id'=>$data->oppID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgID')); ?>:</b>
	<?php echo CHtml::encode($data->orgID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameID')); ?>:</b>
	<?php echo CHtml::encode($data->nameID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('svcOpp')); ?>:</b>
	<?php echo CHtml::encode($data->svcOpp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('svcLoc')); ?>:</b>
	<?php echo CHtml::encode($data->svcLoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('need')); ?>:</b>
	<?php echo CHtml::encode($data->need); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateTime')); ?>:</b>
	<?php echo CHtml::encode($data->dateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('participants')); ?>:</b>
	<?php echo CHtml::encode($data->participants); ?>
	<br />

	*/ ?>

</div>