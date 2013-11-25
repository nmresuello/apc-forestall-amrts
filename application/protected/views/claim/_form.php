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

	<div class="row">
		<?php echo $form->labelEx($model,'policy_id'); ?>
		<?php echo $form->textField($model,'policy_id'); ?>
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
		<?php echo $form->labelEx($model,'middlename'); ?>
		<?php echo $form->textField($model,'middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->