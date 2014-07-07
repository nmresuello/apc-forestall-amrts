<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array(
                            'label'=>'Home', 
                            'url'=>array('/site/index'),
                            'linkOptions'=>array(
                                "data-description"=>"our home page"
                            )
                        ),
                       				
                          								
						array(
						'label'=>'Policy', 
						'linkOptions'=>array("data-description"=>""),
						'url'=>array('/policy'), 
						'visible'),	
						
						array(
                            'label'=>'Assured', 
                            'url'=>array('/assured'),
                            'linkOptions'=>array(
                                "data-description"=>""
                            )
                        ),
						
						array(
                            'label'=>'Insurance Company', 
                            'url'=>array('/insuranceCompany'),
                            'linkOptions'=>array(
                                "data-description"=>""
                            )
                        ),
						
						array(
                            'label'=>'Claim', 
                            'url'=>array('/claim'),
                            'linkOptions'=>array(
                                "data-description"=>""
                            )
                        ),
						
						
						array(
                            'label'=>'Payment', 
                            'url'=>array('/payment'),
                            'linkOptions'=>array(
                                "data-description"=>""
                            )
                        ),
						
						array(
                            'label'=>'Commission', 
                            'url'=>array('/Commission'),
                            'linkOptions'=>array(
                                "data-description"=>""
                            )
                        ),
						
						 array(
                            'label'=>'About', 
                            'url'=>array('/site/page', 'view'=>'about'),
                            'linkOptions'=>array(
                                "data-description"=>""
                            )
                        ),
								
                        array(
                            'label'=>'Login', 
                            'url'=>array('/site/login'), 
                            'visible'=>Yii::app()->user->isGuest,
                            'linkOptions'=>array(
                                "data-description"=>"",
                                'class'=>'login-link'
                            )
                        ),
                        array(
                            'label'=>Yii::app()->session['Fullname'], 
                            'url'=>array('#'),
                            'visible'=>!Yii::app()->user->isGuest,
                            'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
                            'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"Administrator"),
                            'items'=>array(
                                array(
                                    'label'=>'Logout',
                                    'url'=>array('/site/logout'),
                                    ),
                                ),
                           
                        ),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->