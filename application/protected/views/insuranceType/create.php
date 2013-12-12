<?php
/* @var $this InsuranceTypeController */
/* @var $model InsuranceType */

$this->breadcrumbs=array(
	'Insurance Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InsuranceType', 'url'=>array('index')),
	array('label'=>'Manage InsuranceType', 'url'=>array('admin')),
);
?>

<h1>Create InsuranceType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>