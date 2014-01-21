<?php
/* @var $this CommissionController */
/* @var $model Commission */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commission-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php  $this->widget('CMultiFileUpload',array(
			'model'=>$model,
	  	    'attribute' => 'attachment',
		    'accept'=> 'jpeg|jpg|gif|png',
			'denied'=>'Only jpeg,jpg,gif and png are allowed',
	       'max'=>7,
	       'remove'=>'[remove]',
	       'duplicate'=>'Already Selected',
	    ));?>
	 </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>
	-->
	<div class="row">
		<?php echo $form->labelEx($model,'receipt'); ?>
		<?php echo $form->textField($model,'receipt',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'receipt'); ?>
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


