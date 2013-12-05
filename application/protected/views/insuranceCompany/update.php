<?php
/* @var $this InsuranceCompanyController */
/* @var $model InsuranceCompany */

$this->breadcrumbs=array(
	'Insurance Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InsuranceCompany', 'url'=>array('index')),
	array('label'=>'Create InsuranceCompany', 'url'=>array('create')),
	array('label'=>'View InsuranceCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InsuranceCompany', 'url'=>array('admin')),
);
?>

<h1>Update InsuranceCompany <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>