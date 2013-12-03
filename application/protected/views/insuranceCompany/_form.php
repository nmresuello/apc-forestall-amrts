<?php
/* @var $this InsuranceCompanyController */
/* @var $model InsuranceCompany */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'insurance-company-form',
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
		<?php echo $form->labelEx($model,'broker_id'); ?>
		<?php echo $form->textField($model,'broker_id'); ?>
		<?php echo $form->error($model,'broker_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->