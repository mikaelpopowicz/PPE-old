<!--=== Slider ===-->
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2><i>L'ENTRAIDE</i> <br /> <i>N'A PAS DE</i> <br /> <i>PRIX</i></h2>
            <p><i>Partagez</i> <br /> <i>contribuez</i> <br /> <i>pour tous</i></p>
            <div class="da-img"><img src="css/assets/plugins/parallax-slider/img/aide.png" alt="" /></div>
        </div>
        <div class="da-slide">
            <h2><i>INTERNET</i> <br /> <i>EST A</i> <br /> <i>VOUS !</i></h2>
            <p><i>N'hésitez pas à fouiller</i> <br /> <i>pour trouvez bien plus</i></p>
            <div class="da-img span6">
            	<img src="css/assets/plugins/parallax-slider/img/nav.png" alt="Navigateurs internet" />
            </div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>		
        </nav>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->

<!--=== Purchase Block ===-->
<div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>Un monde de partage</span>
            <p>Pour avoir il faut donner. N'hésitez pas à partager vos connaissances, les travaux que vous effectuez en cours.</p>
        </div>
        <a href="/cours" class="btn-buy hover-effect">Commencer</a>
    </div>
</div><!--/row-fluid-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container">	
	<!-- Service Blocks -->
	<div class="row-fluid">
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-code"></i>
    			<div class="desc">
    				<h4>SLAM</h4>
                    <p>Retrouvez les cours et exercices en SLAM 3, 4 et 5</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-terminal"></i>
    			<div class="desc">
    				<h4>SISR</h4>
                    <p>Vous pourrez retrouvez aussi les cours SISR une fois la conception du site achevée</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-group"></i>
    			<div class="desc">
    				<h4>Tutos et autres</h4>
                    <p>Vous pourrez aussi partagé vos connaissances personnelles avec des tutos ou autres</p>
    			</div>
    		</div>	
    	</div>			    
	</div><!--/row-fluid-->
	<!-- //End Service Blokcs -->

	<!-- Recent Works -->
	<div class="headline"><h3>Derniers articles</h3></div>
    <ul class="thumbnails">
		<?php
		foreach ($listeCours as $cours) {
		?>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">			
                </div>
                <h3>
					<a class="hover-effect" href="/cours/<?php echo $cours[1];?>/<?php echo $cours[0]['id'];?>">
						<i class="<?php echo $cours[2];?>"></i> <?php echo $cours[0]['titre'];?>
					</a>
				</h3>
                <p><?php echo $cours[0]['description'];?></p>
            </div>
        </li>
		<?php
		}
		?>
    </ul><!--/thumbnails-->
	<!-- //End Recent Works -->
</div><!--/container-->		
<!-- End Content Part -->