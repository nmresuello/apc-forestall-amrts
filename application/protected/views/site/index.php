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
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/Chrysanthemum.jpg', 'alt 1');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/Desert.jpg', 'alt 2');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/Koala.jpg', 'alt 3');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/Lighthouse.jpg', 'alt 4');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/Penguins.jpg', 'alt 5');
  ?>
  </div>
<h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

