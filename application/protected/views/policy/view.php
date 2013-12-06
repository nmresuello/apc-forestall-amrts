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
		'insurance_type',
		'insurance_attachment_details',
		'policy_date_expiration',
		'policy_coverage',
		'insureditems',
		'termprice',
		'insurance_company_id',
		'assured_id',
	),
));

	$sql = Attachment::model()->findAll('member_id='.$model->id);
	foreach ($sql as $a) {
	echo "<img src='".Yii::app()->baseUrl."/uploads/".$a->filename."' width='50' height='50'/><br/>";
	}


 ?>
