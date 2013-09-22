<?php
/* @var $this BrokerController */
/* @var $model Broker */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Broker', 'url'=>array('index')),
	array('label'=>'Create Broker', 'url'=>array('create')),
	array('label'=>'Update Broker', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Broker', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Broker', 'url'=>array('admin')),
);
?>

<h1>View Broker #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner_firstname',
		'owner_lastname',
		'owner_middlename',
		'employee_firstname',
		'employee_middlename',
		'employee_lastname',
		'broker_address',
		'broker_name',
	),
)); ?>
