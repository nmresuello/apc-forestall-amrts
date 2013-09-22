<?php
/* @var $this InsuranceCompanyController */
/* @var $model InsuranceCompany */
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
		<?php echo $form->label($model,'policy_id'); ?>
		<?php echo $form->textField($model,'policy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'broker_id'); ?>
		<?php echo $form->textField($model,'broker_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->