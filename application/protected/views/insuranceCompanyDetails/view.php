<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $model InsuranceCompanyDetails */

$this->breadcrumbs=array(
	'Insurance Company Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InsuranceCompanyDetails', 'url'=>array('index')),
	array('label'=>'Create InsuranceCompanyDetails', 'url'=>array('create')),
	array('label'=>'Update InsuranceCompanyDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InsuranceCompanyDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InsuranceCompanyDetails', 'url'=>array('admin')),
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
