<?php
/* @var $this BrokerController */
/* @var $model Broker */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Broker', 'url'=>array('index')),
	array('label'=>'Create Broker', 'url'=>array('create')),
	array('label'=>'View Broker', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Broker', 'url'=>array('admin')),
);
?>

<h1>Update Broker <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>