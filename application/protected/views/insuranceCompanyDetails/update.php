<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $model InsuranceCompanyDetails */

$this->breadcrumbs=array(
	'Insurance Company Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InsuranceCompanyDetails', 'url'=>array('index')),
	array('label'=>'Create InsuranceCompanyDetails', 'url'=>array('create')),
	array('label'=>'View InsuranceCompanyDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InsuranceCompanyDetails', 'url'=>array('admin')),
);
?>

<h1>Update InsuranceCompanyDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>