<?php
/* @var $this PaymentController */
/* @var $model Payment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'paymenttype'); ?>
		<?php echo $form->textField($model,'paymenttype',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'paymenttype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receipt'); ?>
		<?php echo $form->textField($model,'receipt',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'receipt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentamount'); ?>
		<?php echo $form->textField($model,'paymentamount',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'paymentamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commission_id'); ?>
		<?php echo $form->textField($model,'commission_id'); ?>
		<?php echo $form->error($model,'commission_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->