<?php
/* @var $this OrganizationsController */
/* @var $data Organizations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orgID), array('view', 'id'=>$data->orgID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgName')); ?>:</b>
	<?php echo CHtml::encode($data->orgName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city1')); ?>:</b>
	<?php echo CHtml::encode($data->city1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state1')); ?>:</b>
	<?php echo CHtml::encode($data->state1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip1')); ?>:</b>
	<?php echo CHtml::encode($data->zip1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('orgOverview')); ?>:</b>
	<?php echo CHtml::encode($data->orgOverview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logistics')); ?>:</b>
	<?php echo CHtml::encode($data->logistics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance')); ?>:</b>
	<?php echo CHtml::encode($data->insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('procTime')); ?>:</b>
	<?php echo CHtml::encode($data->procTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details1')); ?>:</b>
	<?php echo CHtml::encode($data->details1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('availability')); ?>:</b>
	<?php echo CHtml::encode($data->availability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('background')); ?>:</b>
	<?php echo CHtml::encode($data->background); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details2')); ?>:</b>
	<?php echo CHtml::encode($data->details2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drugTest')); ?>:</b>
	<?php echo CHtml::encode($data->drugTest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	*/ ?>

</div>