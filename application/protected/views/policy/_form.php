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
		<?php echo $form->labelEx($model,'Date Issued'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'policy_dateissued',
                    'name'=>'policy_dateissued',
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

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_type'); ?>
		<?php echo $form->textField($model,'insurance_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insurance_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Attachment Details'); ?>
		<?php echo $form->textField($model,'insurance_attachment_details',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insurance_attachment_details'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'Date Expiration'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'policy_date_expiration',
                    'name'=>'policy_date_expiration',
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

	<div class="row">
		<?php echo $form->labelEx($model,'policy_coverage'); ?>
		<?php echo $form->textField($model,'policy_coverage',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'policy_coverage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Insured Items'); ?>
		<?php echo $form->textField($model,'insureditems',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'insureditems'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Term Price'); ?>
		<?php echo $form->textField($model,'termprice',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'termprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_company_id'); ?>
		<?php echo $form->dropDownList($model, 'insurance_company_id', CHtml::listData(
            insurancecompany::model()->findAll(), 'id', 'company_name'),
            array('prompt' => 'Select Insurance Company')); ?>
		<?php echo $form->error($model,'insurance_company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assured_id'); ?>
		<?php echo $form->dropDownList($model, 'assured_id', CHtml::listData(
            assured::model()->findAll(), 'id', 'client_firstname'),
            array('prompt' => 'Select Assured'));?>
		<?php echo $form->error($model,'assured_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->