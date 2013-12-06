<?php
/* @var $this InsuranceCompanyDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Insurance Company Details',
);

$this->menu=array(
	array('label'=>'Create InsuranceCompanyDetails', 'url'=>array('create')),
	array('label'=>'Manage InsuranceCompanyDetails', 'url'=>array('admin')),
);
?>

<h1>Insurance Company Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
