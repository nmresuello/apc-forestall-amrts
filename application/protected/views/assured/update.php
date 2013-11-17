<?php
/* @var $this AssuredController */
/* @var $model Assured */

$this->breadcrumbs=array(
	'Assureds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Assured', 'url'=>array('index')),
	array('label'=>'Create Assured', 'url'=>array('create')),
	array('label'=>'View Assured', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Assured', 'url'=>array('admin')),
);
?>

<h1>Update Assured <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>