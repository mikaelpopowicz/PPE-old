<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>
		<?php
		if (!isset($title)) {
		?>
		Mon super site
		<?php
		} else { echo $title; } ?>
	</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez vos cours du BTS SIO 2ème année">
    <meta name="author" content="Popowicz Mikael">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/css/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/assets/css/style.css">
    <link rel="stylesheet" href="/css/assets/css/headers/header1.css">
    <link rel="stylesheet" href="/css/assets/plugins/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/css/assets/css/style_responsive.css">
    <link rel="shortcut icon" href="/images/favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="/css/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">    	
    <link rel="stylesheet" href="/css/assets/plugins/parallax-slider/css/parallax-slider.css" type="text/css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="/css/assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="/css/assets/css/themes/headers/default.html" id="style_color-header-1">
</head>	

<body>  

	<!--=== Top ===-->    
	<div class="top">
	    <div class="container">         
	        <ul class="loginbar pull-right">
	            <li><i class="icon-globe"></i><a>Languages <i class="icon-sort-up"></i></a>
	                <ul class="nav-list">
	                    <li class="active"><a href="#">Français</a> <i class="icon-ok"></i></li>	
	                </ul>
	            </li>   
	            <li class="devider">&nbsp;</li>
				<?php
				if ($user->isAuthenticated()) {
				?>
				<li><strong><?php echo $user->getUser();?></strong></li>
				<li class="devider">&nbsp;</li>
				<li><i class="icon-user"></i><a href="#"> Mon espace membre</a></li>
				<?php
				} else {
				?>
	            <li><a href="#" class="login-btn">Aide</a></li>  
	            <li class="devider">&nbsp;</li>
	            <li><a href="#" class="login-btn">Connexion</a></li>
				<?php
				}
				?>
	        </ul>
	    </div>      
	</div><!--/top-->
	<!--=== End Top ===-->    

	<!--=== Header ===-->
	<div class="header">               
	    <div class="container"> 
	        <!-- Logo -->       
	        <div class="logo">                                             
	            <a href="/"><img id="logo-header" src="/css/assets/img/logo1-default.png" alt="Logo"></a>
	        </div><!-- /logo -->        
                                    
	        <!-- Menu -->       
	        <div class="navbar">                                
	            <div class="navbar-inner">                                  
	                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </a><!-- /nav-collapse -->                                  
	                <div class="nav-collapse collapse">                                     
	                    <ul class="nav top-2">
	                        <li class="<?php echo $class_accueil;?>">
	                            <a href="/">Accueil</a>                      
	                        </li>
	                        <li class="<?php echo $class_cours;?>">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cours
	                                <b class="caret"></b>                            
	                            </a>
	                            <ul class="dropdown-menu">
									<?php
									foreach ($matieres as $key) {
										$class = "class_".$key['libelle'];
										echo '<li class="'.$$class.'"><a href="/cours/'.$key->libelle().'">'.$key->libelle().'</a></li>';
									}
									?>
	                            </ul>
	                            <b class="caret-out"></b>                        
	                        </li>
	                        <li class="<?php echo $class_travaux;?>">
	                            <a href="/travaux-slam">Travaux SLAM</a>
	                        </li>
	                        <li class="<?php echo $class_tutos;?>">
	                            <a href="/tutos">Tutos
	                            </a>                      
	                        </li>
	                        <li class="<?php echo $class_contact;?>">
	                            <a href="/contact">Contact
	                            </a>                     
	                        </li>
	                        <li><a class="search"><i class="icon-search search-btn"></i></a></li>                               
	                    </ul>
	                    <div class="search-open">
	                        <div class="input-append">
	                            <form>
	                                <input type="text" class="span3" placeholder="Search" />
	                                <button type="submit" class="btn-u">Go</button>
	                            </form>
	                        </div>
	                    </div>
	                </div><!-- /nav-collapse -->                                
	            </div><!-- /navbar-inner -->
	        </div><!-- /navbar -->                          
	    </div><!-- /container -->               
	</div><!--/header -->      
	<!--=== End Header ===-->

	<!--=== Content ===-->
	<?php echo $content; ?>
	<!--=== End Content ===-->
	
	<!--=== Footer ===-->
	<div class="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
	                <!-- A propos -->
			        <div class="headline"><h3>A propos</h3></div>	
					<p class="margin-bottom-25">Ce site vous est proposé par le <a href="http://iris-bde.fr">BDE ESCAPE</a>.<br />
						Un site par les élèves pour les élèves.</p>
				</div>
			
				<div class="span6">
					<!-- Newsletter -->
			        <div class="headline"><h3>Newsletter</h3></div>	
					<p>Recevez des notifications sur les nouveaux articles</p>
					<form class="form-inline">
						<div class="input-append">
							<input type="text" placeholder="Email" class="input-medium">
							<button class="btn-u">S'incrire</button>
						</div>
					</form>							
				</div><!--/span6-->				
			</div><!--/row-fluid-->	
		</div><!--/container-->	
	</div><!--/footer-->	
	<!--=== End Footer ===-->

	<!--=== Copyright ===-->
	<div class="copyright">
		<div class="container">
			<div class="row-fluid">
				<div class="span8">						
		            <p>2013 &copy; Mika-p. Tous droits réservés.</p>
				</div>
				<div class="span4">	
					<a href="/"><img id="logo-footer" src="/css/assets/img/logo2-default.png" class="pull-right" alt="" /></a>
				</div>
			</div><!--/row-fluid-->
		</div><!--/container-->	
	</div><!--/copyright-->	
	<!--=== End Copyright ===-->

	<!-- JS Global Compulsory -->			
	<script type="text/javascript" src="/css/assets/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/css/assets/js/modernizr.custom.js"></script>		
	<script type="text/javascript" src="/css/assets/plugins/bootstrap/js/bootstrap.min.js"></script>	
	<!-- JS Implementing Plugins -->           
	<script type="text/javascript" src="/css/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="/css/assets/plugins/gmap/gmap.js"></script>
	<script type="text/javascript" src="/css/assets/plugins/parallax-slider/js/modernizr.js"></script>
	<script type="text/javascript" src="/css/assets/plugins/parallax-slider/js/jquery.cslider.js"></script> 
	<script type="text/javascript" src="/css/assets/plugins/back-to-top.js"></script>
	
	<script type="text/javascript" src="/js/noty/jquery.noty.js"></script>
    <!-- layouts -->
    <script type="text/javascript" src="/js/noty/layouts/bottom.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/bottomCenter.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/bottomLeft.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/bottomRight.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/center.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/centerLeft.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/centerRight.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/inline.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/top.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/topCenter.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/topLeft.js"></script>
    <script type="text/javascript" src="/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="/js/noty/themes/default.js"></script>
	
	<!-- JS Page Level -->           
	<script type="text/javascript" src="/css/assets/js/app.js"></script>
	<script type="text/javascript" src="/css/assets/js/pages/index.js"></script>
	<script type="text/javascript" src="/css/assets/js/pages/contact.js"></script>
	<script type="text/javascript">
	    jQuery(document).ready(function() {
	      	App.init();
	        App.initSliders();
	        Index.initParallaxSlider();
			Contact.initMap();
	    });
	</script>
	<!--[if lt IE 9]>
	    <script src="assets/js/respond.js"></script>
	<![endif]-->

	<!--=== JavaScript insert code ===-->
	<?php if ($user->hasFlash()) echo $user->getFlash();?>
	<!--===  End JavaScript insert code ===-->
	
</body>
</html>	