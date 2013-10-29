<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
	<div class="container">
        <h1 class="color-green pull-left">Cours</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/">Accueil</a> <span class="divider">/</span></li>
            <li><a href="/cours">Cours</a> <span class="divider">/</span></li>
			<li><a href="/cours/<?php echo $matiere;?>"><?php echo $matiere;?></a> <span class="divider">/</span></li>
            <li class="active"><?php echo $cours['titre'];?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid blog-page blog-item">
        <!-- Left Sidebar -->
    	<div class="span9">
        	<div class="blog margin-bottom-30">
            	<h3><?php echo $cours['titre'];?></h3>
            	<ul class="unstyled inline blog-info">
                	<li><i class="icon-calendar"></i> <?php echo $cours['dateAjout']->format('d/m/Y à H\hi');?></li>
                	<li><i class="icon-pencil"></i> <?php echo $cours['auteur'];?></li>
                	<li><i class="icon-comments"></i> <a href="#commentaire">24 Commentaires</a></li>
                </ul>
				<ul class="unstyled inline blog-tags"></ul></br>
				<?php echo $cours['contenu'];?>
            </div><!--/blog-->

			<hr />

            <!-- Commentaire -->
            <div class="media" id="commentaire">
            	<h3 class="color-green">Commentaires</h3>
				<?php
				if (!empty($comments)) {
					foreach ($comments as $comment) {
				?>
                <a class="pull-left" href="#">
                </a>
                <div class="media-body">
                	<h4 class="media-heading"><?php echo $comment['auteur']?> <span><?php echo $comment['date']->format('d/m/Y à H\hi');?></span></h4>
                	<p><?php echo $comment['contenu']?></p>
                </div>
				<?php
					}
				}
				?>
                
            </div><!--/media-->
			
            <hr />

            <!-- Leave a Comment -->
            <div class="post-comment">
            	<h3 class="color-green">Laisser un commentaire</h3>
                <form>
                    <label>Nom</label>
                    <input type="text" class="span7" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="text" class="span7" />
                    <label>Message</label>
                    <textarea rows="8" class="span10"></textarea>
                    <p><button type="submit" class="btn-u">Envoyer</button></p>
                </form>
            </div><!--/post-comment-->
        </div><!--/span9-->

        <!-- Right Sidebar -->
    	<div class="span3">
        	<!-- Photo Stream -->
        	<div class="headline"><h3>Derniers commentaires</h3></div>
            <ul class="unstyled blog-ads">
            	<li><a href="#"><img src="assets/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
            	<li><a href="#"><img src="assets/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
            </ul>
        </div><!--/span3-->
    </div><!--/row-fluid-->        
</div><!--/container-->		
<!--=== End Content Part ===-->