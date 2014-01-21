<?php
/* @var $this PaymentController */
/* @var $data Payment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymenttype')); ?>:</b>
	<?php echo CHtml::encode($data->paymenttype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receipt')); ?>:</b>
	<?php echo CHtml::encode($data->receipt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentamount')); ?>:</b>
	<?php echo CHtml::encode($data->paymentamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commission_id')); ?>:</b>
	<?php echo CHtml::encode($data->commission->amount); ?>
	<br />
	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_id')); ?>:</b>
	<?php echo CHtml::encode($data->policy->policy_dateissued); ?>
	<br />


</div>