<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $model InsuranceCompanyDetails */

$this->breadcrumbs=array(
	'Insurance Company Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InsuranceCompanyDetails', 'url'=>array('index')),
	array('label'=>'Manage InsuranceCompanyDetails', 'url'=>array('admin')),
);
?>

<h1>Create InsuranceCompanyDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>