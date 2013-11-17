<?php
/* @var $this AssuredController */
/* @var $model Assured */

$this->breadcrumbs=array(
	'Assureds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Assured', 'url'=>array('index')),
	array('label'=>'Manage Assured', 'url'=>array('admin')),
);
?>

<h1>Create Assured</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>