<?php
/* @var $this AssuredController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assured',
);

$this->menu=array(
	array('label'=>'Create Assured', 'url'=>array('create')),
	array('label'=>'Manage Assured', 'url'=>array('admin')),
);
?>

<h1>Assured</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>