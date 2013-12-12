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
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_address'); ?>
		<?php echo $form->textField($model,'company_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'company_address'); ?>
	</div>

		<div>
<?php echo $form->labelEx($model,'broker_id'); ?>
<?php echo $form->dropDownList($model, 'broker_id', CHtml::listData(
Broker::model()->findAll(), 'id', 'broker_name'),
array('prompt' => 'Select Broker')
); ?>
<?php echo $form->error($model,'broker_id'); ?>
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->