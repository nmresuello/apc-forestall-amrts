<?php
/* @var $this InsuranceCompanyController */
/* @var $model InsuranceCompany */

$this->breadcrumbs=array(
	'Insurance Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InsuranceCompany', 'url'=>array('index')),
	array('label'=>'Create InsuranceCompany', 'url'=>array('create')),
	array('label'=>'Update InsuranceCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InsuranceCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InsuranceCompany', 'url'=>array('admin')),
);
?>

<h1>View InsuranceCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'policy_id',
		'broker_id',
	),
)); ?>
