<?php
/* @var $this AssuredController */
/* @var $model Assured */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'assured-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Last Name'); ?>
		<?php echo $form->textField($model,'client_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'First Name'); ?>
		<?php echo $form->textField($model,'client_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Middle Name'); ?>
		<?php echo $form->textField($model,'client_middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_middlename'); ?>
	</div>

	<div class="row">
<<<<<<< HEAD
=======
		<?php echo $form->labelEx($model,'Address'); ?>
>>>>>>> d4dd0a70a4cb7a938a7858a85274e7c5a8ecd0ec
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo CHtml::dropDownList('listname', $model,
		array('M' => 'Male', 'F' => 'Female'),
		array('empty' => 'Select Gender'));?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email Add'); ?>
		<?php echo $form->textField($model,'email_add',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact Number'); ?>
		<?php echo $form->textField($model,'contact_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contact_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->