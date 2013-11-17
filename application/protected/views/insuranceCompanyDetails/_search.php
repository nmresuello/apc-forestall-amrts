<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $model InsuranceCompanyDetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_address'); ?>
		<?php echo $form->textField($model,'company_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner_firstname'); ?>
		<?php echo $form->textField($model,'owner_firstname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner_middlename'); ?>
		<?php echo $form->textField($model,'owner_middlename',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner_lastname'); ?>
		<?php echo $form->textField($model,'owner_lastname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_firstname'); ?>
		<?php echo $form->textField($model,'employee_firstname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_middlename'); ?>
		<?php echo $form->textField($model,'employee_middlename',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_lastname'); ?>
		<?php echo $form->textField($model,'employee_lastname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_company_id'); ?>
		<?php echo $form->textField($model,'insurance_company_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->