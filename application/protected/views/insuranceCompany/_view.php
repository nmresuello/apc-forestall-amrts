<?php
/* @var $this InsuranceCompanyController */
/* @var $data InsuranceCompany */
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

		<b><?php echo CHtml::encode($data->getAttributeLabel('broker_id')); ?>:</b>
	<?php echo CHtml::encode($data->broker->broker_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_id')); ?>:</b>
	<?php echo CHtml::encode($data->policy_id); ?>
	<br />


</div>