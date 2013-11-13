<?php
/* @var $this MyaddressController */
/* @var $data Myaddress */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('First Name')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Middle Name')); ?>:</b>
	<?php echo CHtml::encode($data->middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Last Name')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Female/Male')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_addresss')); ?>:</b>
	<?php echo CHtml::encode($data->home_addresss); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('landline')); ?>:</b>
	<?php echo CHtml::encode($data->landline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cellphone')); ?>:</b>
	<?php echo CHtml::encode($data->cellphone); ?>
	<br />

	*/ ?>

</div>