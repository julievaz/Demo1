<?php
/* @var $this OpportunityController */
/* @var $model Opportunity */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'oppID'); ?>
		<?php echo $form->textField($model,'oppID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orgID'); ?>
		<?php echo $form->textField($model,'orgID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameID'); ?>
		<?php echo $form->textField($model,'nameID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'svcOpp'); ?>
		<?php echo $form->textArea($model,'svcOpp',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'svcLoc'); ?>
		<?php echo $form->textField($model,'svcLoc',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zip'); ?>
		<?php echo $form->textField($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'need'); ?>
		<?php echo $form->textArea($model,'need',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateTime'); ?>
		<?php echo $form->textField($model,'dateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'participants'); ?>
		<?php echo $form->textField($model,'participants'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->