<?php
/* @var $this ClaimController */
/* @var $model Claim */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'claim-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<d<div class="row">
		<?php echo $form->labelEx($model,'policy_id'); ?>
		<?php echo $form->dropDownList($model, 'policy_id', CHtml::listData(
            claim::model()->findAll(), 'id', 'insurance_type'),
            array('prompt' => 'Select Policy'));?>
		<?php echo $form->error($model,'policy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_accident'); ?>
		<?php echo $form->textField($model,'type_of_accident',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type_of_accident'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insured_items'); ?>
		<?php echo $form->textArea($model,'insured_items',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'insured_items'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->