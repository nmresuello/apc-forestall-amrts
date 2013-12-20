<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<?php $this->widget('ext.FlexPictureSlider.FlexPictureSlider',
  array(
    'imageBlockSelector' => '#myslider', //the jquery selector
    'widthSlider' => '900', //or you can use jquery '$(window).width()/1.6',
    'heightSlider' => '275', //or you can use jquery '$(window).height()/1.6',
    'slideUnitSize' => 'px', //px or %
    'timeBetweenChangeSlider' => 4000, //the time between displayed sliders in miliseconds
    'timeDelayAnimation' => 1000, //the time before slider starts in miliseconds
    'sliderStartFrom' => 0, //if sliderSuffle is set to true then sliderStartFrom is not nesessary
    'sliderSuffle' => true, //suffle the pictures for random display
   )); 
  ?>
 

  <div id="myslider">
  <?php
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/01.jpg', 'alt 1');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/02.jpg', 'alt 2');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/03.jpg', 'alt 3');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/04.jpg', 'alt 4');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/05.jpg', 'alt 5');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/06.jpg', 'alt 6');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/07.jpg', 'alt 7');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/08.jpg', 'alt 8');
  ?>
  </div>