<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $model InsuranceCompanyDetails */

$this->breadcrumbs=array(
	'Insurance Company Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Insurance Company Details', 'url'=>array('index')),
	array('label'=>'Create Insurance Company Details', 'url'=>array('create')),
	array('label'=>'Update Insurance Company Details', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Insurance Company Details', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Insurance Company Details', 'url'=>array('admin')),
);
?>

<h1>View InsuranceCompanyDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_name',
		'company_address',
		'owner_firstname',
		'owner_middlename',
		'owner_lastname',
		'employee_firstname',
		'employee_middlename',
		'employee_lastname',
		'insurance_company_id',
	),
)); ?>
