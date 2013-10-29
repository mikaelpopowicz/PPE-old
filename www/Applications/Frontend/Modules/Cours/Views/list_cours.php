<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
	<div class="container">
        <h1 class="color-green pull-left">Liste des cours</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/">Accueil</a> <span class="divider">/</span></li>
            <li><a href="/cours">Cours</a> <span class="divider">/</span></li>
            <li class="active"><?php echo $matiere;?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid blog-page">    
        <!-- Left Sidebar -->
    	<div class="span9">
			<?php
			//echo '<pre>';print_r($listeCours);echo '</pre>';
			if (!empty($listeCours)){
				foreach ($listeCours as $cours) {
			?>
        	<div class="blog margin-bottom-30">
            	<h3><?php echo $cours['titre']?></h3>
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> <?php echo $cours['dateAjout']->format('d/m/Y à H\hi');?></li>
                	<li><i class="icon-pencil"></i> <?php echo $cours['auteur'];?></li>
                	<li><i class="icon-comments"></i> 24 Comments</li>
                </ul>
				<ul class="unstyled inline blog-tags"></ul>
                <p><?php echo $cours['description'];?></p>
                <p><a class="btn-u btn-u-small" href="/cours/<?php echo $matiere;?>/<?php echo $cours['id']?>">En lire plus</a></p>
            </div><!--/blog-->
			<?php
				}
			} else {
				echo "</br></br><h2>Il n'y a pas encore de cours dans cette section</h2>";
			}
			?>
			
        </div><!--/span9-->

        <!-- Right Sidebar -->
    	<div class="span3">

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3>Derniers articles</h3></div>
                <dl class="dl-horizontal">
                    <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                    <dd>
                        <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                    </dd>
                </dl>
            </div><!--/posts-->

        	<!-- Blog Tags -->
        	<div class="headline"><h3>Tags</h3></div>
            <ul class="unstyled inline blog-tags">
            	<li><a href="#"><i class="icon-tags"></i> Business</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Music</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Internet</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Money</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Google</a></li>
            	<li><a href="#"><i class="icon-tags"></i> TV Shows</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Education</a></li>
            	<li><a href="#"><i class="icon-tags"></i> People</a></li>
            	<li><a href="#"><i class="icon-tags"></i> People</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Math</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Photos</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Electronics</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Apple</a></li>
            	<li><a href="#"><i class="icon-tags"></i> Canada</a></li>
            </ul>

        </div><!--/span3-->
    </div><!--/row-fluid-->        
</div><!--/container-->		
<!--=== End Content Part ===-->