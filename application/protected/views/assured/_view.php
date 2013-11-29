<?php
/* @var $this AssuredController */
/* @var $data Assured */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->client_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->client_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->client_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email_add')); ?>:</b>
	<?php echo CHtml::encode($data->email_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->contact_number); ?>
	<br />

	*/ ?>

</div>