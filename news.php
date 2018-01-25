<div id="news" class="news row d-flex justify-content-center">
	
	<div class="actualidad col-12 pt-4 text-center mt-4 mb-3 pt-5 pl-0 pr-0">
	
		<h2>Actualidad</h2>
	
	</div>
	
	<?php 	query_posts( array('cat'=> 6, 'posts_per_page' => 3)); ?>

 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->

	
	<div class="card trj-noticias text-center mt-1 col-12 col-md-3 ml-2 mb-2 pr-1 pl-1">

		<a class="link-tarjeta" href="<?php permalink_link(); ?>" style="text-decoration: none;">

			<div class="card-body pt-1 pb-1 pl-1 pr-1">
	    		<h4 class="card-title"><?php 	the_title(); ?></h4>
	    		<?php 	the_post_thumbnail('thumbnail') ?>
	    		<p class="card-text"><?php 	the_excerpt(); ?></p>
	    		<button href="<?php permalink_link() ?>" class="noti-vm">Ver más</button>
	  		</div>

	  	</a>

	 </div>


	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?> 

	<div class="col-12 text-center mt-3 mb-4">	
			
			<a class="ver-mas-noticias" href="<?php home_url()  ?>/?cat=6" style="text-decoration: none;">Ver todas las noticias</a>
	</div>
	
	
	<div class="redes col-12 text-center justify-content-center d-md-flex justify-content-md-center mt-1 pt-2">

			<ul>
				<li><a href="https://www.facebook.com/AlcaldiaYarumal/" target="blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/TRANSITOYARUMAL" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><button id="telefono" href="" ><i class="fa fa-phone" aria-hidden="true"></i></button></li>
			</ul>

			<div id="tel" class="col-12 col-md-2">
				853 - 63 -36 <br>	
				853 - 78 -89
			</div>

	</div>
			
</div>
	
<!--Sección del mapa-->
	
<div id="maps" class="encuentranos">

	<?php 	query_posts( 'cat=9' ) ?>

	<?php 	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->

		<div class="col-12 text-center mt-md-5 mb-2 pt-md-5 pl-0 pr-0">
			<h2 class="mt-5"><?php 	the_title(); ?></h2>
		</div>

		<div class="map col-12 d-flex justify-content-center pl-0 pr-0">
			<?php 	the_content( $more_link_text = null, $strip_teaser = false ) ?>
		</div>

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?> 
			
			
</div>
		
