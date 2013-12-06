<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $data InsuranceCompanyDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_address')); ?>:</b>
	<?php echo CHtml::encode($data->company_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->owner_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->owner_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->owner_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->employee_firstname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->employee_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->employee_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_company_id')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_company_id); ?>
	<br />

	*/ ?>

</div>