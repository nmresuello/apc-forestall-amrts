<?php
/* @var $this AssuredController */
/* @var $model Assured */

$this->breadcrumbs=array(
	'Assureds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Assured', 'url'=>array('index')),
	array('label'=>'Create Assured', 'url'=>array('create')),
	array('label'=>'Update Assured', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Assured', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assured', 'url'=>array('admin')),
);
?>

<h1>View Assured #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client_lastname',
		'client_firstname',
		'client_middlename',
		'gender',
		'address',
		'age',
		'email_add',
		'contact_number',
	),
)); ?>
