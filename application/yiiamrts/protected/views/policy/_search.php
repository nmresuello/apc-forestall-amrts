<?php
/* @var $this PolicyController */
/* @var $model Policy */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id:'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date Issued:'); ?>
		<?php echo $form->textField($model,'policy_dateissued'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Insurance Type:'); ?>
		<?php echo $form->textField($model,'insurance_type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Attachement Details:'); ?>
		<?php echo $form->textField($model,'insurance_attachment_details',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Expiration Date:'); ?>
		<?php echo $form->textField($model,'policy_date_expiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Policy Coverage:'); ?>
		<?php echo $form->textField($model,'policy_coverage',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Insured Items:'); ?>
		<?php echo $form->textField($model,'insureditems',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Term Price:'); ?>
		<?php echo $form->textField($model,'termprice',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_id'); ?>
		<?php echo $form->textField($model,'payment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_company_id'); ?>
		<?php echo $form->textField($model,'insurance_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->