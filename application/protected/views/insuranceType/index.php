<?php
/* @var $this InsuranceTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Insurance Types',
);

$this->menu=array(
	array('label'=>'Create InsuranceType', 'url'=>array('create')),
	array('label'=>'Manage InsuranceType', 'url'=>array('admin')),
);
?>

<h1>Insurance Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
