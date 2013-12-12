<?php
/* @var $this InsuranceTypeController */
/* @var $model InsuranceType */

$this->breadcrumbs=array(
	'Insurance Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InsuranceType', 'url'=>array('index')),
	array('label'=>'Create InsuranceType', 'url'=>array('create')),
	array('label'=>'Update InsuranceType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InsuranceType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InsuranceType', 'url'=>array('admin')),
);
?>

<h1>View InsuranceType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'insurance_name',
		'description',
	),
)); ?>
