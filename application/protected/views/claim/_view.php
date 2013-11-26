<?php
/* @var $this ClaimController */
/* @var $data Claim */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_id')); ?>:</b>
	<?php echo CHtml::encode($data->policy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_accident')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_accident); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insured_items')); ?>:</b>
	<?php echo CHtml::encode($data->insured_items); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>