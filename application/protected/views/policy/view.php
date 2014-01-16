<?php
/* @var $this PolicyController */
/* @var $model Policy */

$this->breadcrumbs=array(
	'Policies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Policy', 'url'=>array('index')),
	array('label'=>'Create Policy', 'url'=>array('create')),
	array('label'=>'Update Policy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Policy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Policy', 'url'=>array('admin')),
);
?>

<h1>View Policy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'policy_dateissued',
		'insurance_attachment_details',
		'policy_date_expiration',
		'policy_coverage',
		'insureditems',
		'termprice',
		'insurance_company_id',
		'assured_id',
		'insurance_type_id',
		'attachment'
	),
)); ?>

<img src="/Cambay/uploads/<?= $model->attachment ?>" alt="Attachment Image" height=100 width=100 />

