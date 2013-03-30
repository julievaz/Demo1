<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizations-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orgID'); ?>
		<?php echo $form->textField($model,'orgID'); ?>
		<?php echo $form->error($model,'orgID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgName'); ?>
		<?php echo $form->textField($model,'orgName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'orgName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city1'); ?>
		<?php echo $form->textField($model,'city1',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'city1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state1'); ?>
		<?php echo $form->textField($model,'state1',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'state1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip1'); ?>
		<?php echo $form->textField($model,'zip1'); ?>
		<?php echo $form->error($model,'zip1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgOverview'); ?>
		<?php echo $form->textArea($model,'orgOverview',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'orgOverview'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logistics'); ?>
		<?php echo $form->textArea($model,'logistics',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'logistics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance'); ?>
		<?php echo $form->checkbox($model,'insurance'); ?>
		<?php echo $form->error($model,'insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'procTime'); ?>
		<?php echo $form->textField($model,'procTime',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'procTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details1'); ?>
		<?php echo $form->textArea($model,'details1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'details1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'availability'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array('name'=> 'Availability',
                  'attribute'=> 'availability', 'model'=>$model, 'options'=> array('dateFormat'=>'yy-mm-dd',
                      'altFormat' =>'yy-mm-dd','changeMonth' => true, 'changeYear' => true, 'appendText' => 'yyyy-mm-dd', 
                      ),
                      ));
                        ?>
		<?php echo $form->error($model,'availability'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'background'); ?>
		<?php echo $form->checkbox($model,'background'); ?>
		<?php echo $form->error($model,'background'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details2'); ?>
		<?php echo $form->textArea($model,'details2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'details2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drugTest'); ?>
		<?php echo $form->checkbox($model,'drugTest'); ?>
		<?php echo $form->error($model,'drugTest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textArea($model,'other',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->