<?php
/* @var $this AssuredController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assureds',
);

$this->menu=array(
	array('label'=>'Create Assured', 'url'=>array('create')),
	array('label'=>'Manage Assured', 'url'=>array('admin')),
);
?>

<h1>Assureds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
