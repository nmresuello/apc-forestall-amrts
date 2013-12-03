<?php
/* @var $this BrokerController */
/* @var $data Broker */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->owner_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->owner_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->owner_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->employee_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->employee_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->employee_lastname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_address')); ?>:</b>
	<?php echo CHtml::encode($data->broker_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broker_name')); ?>:</b>
	<?php echo CHtml::encode($data->broker_name); ?>
	<br />
*/
	 ?>

</div>