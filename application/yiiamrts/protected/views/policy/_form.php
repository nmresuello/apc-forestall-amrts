<?php
/* @var $this PolicyController */
/* @var $model Policy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'policy-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_dateissued'); ?>
		<?php echo $form->textField($model,'policy_dateissued'); ?>
		<?php echo $form->error($model,'policy_dateissued'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_type'); ?>
		<?php echo $form->textField($model,'insurance_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insurance_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_attachment_details'); ?>
		<?php echo $form->textField($model,'insurance_attachment_details',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insurance_attachment_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_date_expiration'); ?>
		<?php echo $form->textField($model,'policy_date_expiration'); ?>
		<?php echo $form->error($model,'policy_date_expiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_coverage'); ?>
		<?php echo $form->textField($model,'policy_coverage',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'policy_coverage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insureditems'); ?>
		<?php echo $form->textField($model,'insureditems',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insureditems'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'termprice'); ?>
		<?php echo $form->textField($model,'termprice',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'termprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_id'); ?>
		<?php echo $form->textField($model,'payment_id'); ?>
		<?php echo $form->error($model,'payment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_company_id'); ?>
		<?php echo $form->textField($model,'insurance_company_id'); ?>
		<?php echo $form->error($model,'insurance_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
		<?php echo $form->error($model,'applicant_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->