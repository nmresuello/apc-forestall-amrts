<?php
/* @var $this BrokerController */
/* @var $model Broker */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'broker-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_firstname'); ?>
		<?php echo $form->textField($model,'owner_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'owner_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_lastname'); ?>
		<?php echo $form->textField($model,'owner_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'owner_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_middlename'); ?>
		<?php echo $form->textField($model,'owner_middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'owner_middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_firstname'); ?>
		<?php echo $form->textField($model,'employee_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_middlename'); ?>
		<?php echo $form->textField($model,'employee_middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_lastname'); ?>
		<?php echo $form->textField($model,'employee_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'broker_address'); ?>
		<?php echo $form->textField($model,'broker_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'broker_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'broker_name'); ?>
		<?php echo $form->textField($model,'broker_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'broker_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->