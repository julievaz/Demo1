<?php
/* @var $this OpportunityController */
/* @var $model Opportunity */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opportunity-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oppID'); ?>
		<?php echo $form->textField($model,'oppID'); ?>
		<?php echo $form->error($model,'oppID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgID'); ?>
		<?php echo $form->dropDownList($model,'orgID',Organizations::model()->getOrgOptions()); ?>
		<?php echo $form->error($model,'orgID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nameID'); ?>
		<?php echo $form->textField($model,'nameID'); ?>
		<?php echo $form->error($model,'nameID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'svcOpp'); ?>
		<?php echo $form->textArea($model,'svcOpp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'svcOpp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'svcLoc'); ?>
		<?php echo $form->textField($model,'svcLoc',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'svcLoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip'); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'need'); ?>
		<?php echo $form->textArea($model,'need',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'need'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateTime'); ?>
		<?php echo $form->textField($model,'dateTime'); ?>
		<?php echo $form->error($model,'dateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'participants'); ?>
		<?php echo $form->textField($model,'participants'); ?>
		<?php echo $form->error($model,'participants'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->