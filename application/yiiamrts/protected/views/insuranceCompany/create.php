<?php
/* @var $this InsuranceCompanyController */
/* @var $model InsuranceCompany */

$this->breadcrumbs=array(
	'Insurance Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InsuranceCompany', 'url'=>array('index')),
	array('label'=>'Manage InsuranceCompany', 'url'=>array('admin')),
);
?>

<h1>Create InsuranceCompany</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>