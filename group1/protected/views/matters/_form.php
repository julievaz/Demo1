<?php
/* @var $this MattersController */
/* @var $model Matters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matters-form',
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
		<?php echo $form->labelEx($model,'health'); ?>
		<?php echo $form->textField($model,'health',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'health'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'money'); ?>
		<?php echo $form->textField($model,'money',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'career'); ?>
		<?php echo $form->textField($model,'career',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'career'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'environment'); ?>
		<?php echo $form->textField($model,'environment',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'environment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->