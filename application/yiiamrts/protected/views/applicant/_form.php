<?php
/* @var $this ApplicantController */
/* @var $model Applicant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'applicant-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'client_lastname'); ?>
		<?php echo $form->textField($model,'client_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_firstname'); ?>
		<?php echo $form->textField($model,'client_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_middlename'); ?>
		<?php echo $form->textField($model,'client_middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->