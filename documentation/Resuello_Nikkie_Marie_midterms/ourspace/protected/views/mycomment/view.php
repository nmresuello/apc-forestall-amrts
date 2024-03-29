<?php
/* @var $this MycommentController */
/* @var $model Mycomment */

$this->breadcrumbs=array(
	'Mycomments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mycomment', 'url'=>array('index')),
	array('label'=>'Create Mycomment', 'url'=>array('create')),
	array('label'=>'Update Mycomment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mycomment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mycomment', 'url'=>array('admin')),
);
?>

<h1>View Mycomment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'myaddress',
		'author',
		'body',
		'created_at',
	),
)); ?>
