<?php
/* @var $this PolicyController */
/* @var $data Policy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_dateissued')); ?>:</b>
	<?php echo CHtml::encode($data->policy_dateissued); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_attachment_details')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_attachment_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_date_expiration')); ?>:</b>
	<?php echo CHtml::encode($data->policy_date_expiration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_coverage')); ?>:</b>
	<?php echo CHtml::encode($data->policy_coverage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insureditems')); ?>:</b>
	<?php echo CHtml::encode($data->insureditems); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termprice')); ?>:</b>
	<?php echo CHtml::encode($data->termprice); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_company_id')); ?>:</b>
	<?php echo CHtml::encode($data->insuranceCompany->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assured_id')); ?>:</b>
	<?php echo CHtml::encode($data->assured->client_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->insuranceType->insurance_name); ?>
	<br />

	

</div>