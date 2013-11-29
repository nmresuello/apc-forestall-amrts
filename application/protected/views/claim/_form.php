<?php
/* @var $this ClaimController */
/* @var $model Claim */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'claim-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_id'); ?>
		<?php echo $form->dropDownList($model, 'policy_id', CHtml::listData(
            payment::model()->findAll(), 'id', 'name'),
            array('prompt' => 'Select a policy'));?>
		<?php echo $form->error($model,'policy_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_accident'); ?>
		<?php echo $form->textField($model,'type_of_accident',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type_of_accident'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insured_items'); ?>
		<?php echo $form->textField($model,'insured_items',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insured_items'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'date',
                    'name'=>'date',
                    'options'=>array(
                        'dateFormat'=>'yy-mm-dd', 
                                'changeMonth'=> true,
                                'changeYear'=>true,
                        'showAnim'=>'fold', 
                        'showOn'=>'button', 
                        'buttonImage'=>Yii::app()->request->baseUrl.'/calendar.png',
                        'buttonImageOnly'=>true,
                        'yearRange'=>'1960:2020',
                    ),
                    'htmlOptions'=>array(
                        'style'=>'width:80px;vertical-align:top'
                    ),
                        ));
                ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->