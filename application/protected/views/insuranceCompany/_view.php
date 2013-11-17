<?php
/* @var $this InsuranceCompanyController */
/* @var $data InsuranceCompany */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_id')); ?>:</b>
	<?php echo CHtml::encode($data->policy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_id')); ?>:</b>
	<?php echo CHtml::encode($data->broker_id); ?>
	<br />


</div>