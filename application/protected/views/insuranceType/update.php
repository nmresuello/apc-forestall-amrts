<?php
/* @var $this InsuranceTypeController */
/* @var $model InsuranceType */

$this->breadcrumbs=array(
	'Insurance Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InsuranceType', 'url'=>array('index')),
	array('label'=>'Create InsuranceType', 'url'=>array('create')),
	array('label'=>'View InsuranceType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InsuranceType', 'url'=>array('admin')),
);
?>

<h1>Update InsuranceType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>