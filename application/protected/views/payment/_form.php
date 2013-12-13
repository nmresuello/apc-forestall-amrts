<?php
/* @var $this PaymentController */
/* @var $model Payment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'paymenttype'); ?>
		<?php echo $form->textField($model,'paymenttype',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'paymenttype'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'receipt'); ?>
		<?php echo $form->textField($model,'receipt',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'receipt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentamount'); ?>
		<?php echo $form->textField($model,'paymentamount',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'paymentamount'); ?>
	</div>

		<div>
<?php echo $form->labelEx($model,'commission_id'); ?>
<?php echo $form->dropDownList($model, 'commission_id', CHtml::listData(
Commission::model()->findAll(), 'id', 'amount'),
array('prompt' => 'Select Commission')
); ?>
<?php echo $form->error($model,'commission_id'); ?>
</div>


<div class="row">
		<?php echo $form->labelEx($model,'policy_id'); ?>
		<?php echo $form->dropDownList($model, 'policy_id', CHtml::listData(
            policy::model()->findAll(), 'id', 'policy_coverage'),
            array('prompt' => 'Select policy'));?>
		<?php echo $form->error($model,'policy_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->