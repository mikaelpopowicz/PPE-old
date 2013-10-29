<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
	<div class="container">
        <h1 class="color-green pull-left">Liste des matières</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/">Accueil</a> <span class="divider">/</span></li>
            <li class="active">Cours</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
</br></br>
<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid">
	    <div class="headline"><h3>Matières</h3></div>
		<div class="row-fluid servive-block">
			<?php
			$i = 0;
			foreach ($listeMatiere as $matiere) {
			?>
	        <div class="span4">
	            <h4>
					<a href="/cours/<?php echo $matiere['libelle'];?>">
						<?php echo $matiere['libelle'];?>
						<p><i class="<?php echo $matiere['icon'];?>"></i></p>
					</a>
				</h4>
	            
				</a>
	        </div>
			<?php
			$i++;
			if ($i != 0 && $i%3 == 0) {
			?>
		</div>
		<div class="row-fluid servive-block">
			<?php
				}
			}
			?>
	    </div><!--/row-fluid-->
	</div><!--/row-fluid-->        
</div>