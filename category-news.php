<!-- Llamado del header de novedades-->

	<?php get_header('news'); ?>

<!--Titulo-->

	<div class="col-12 text-center mt-4">
		<h2>Nuestras Noticias</h2>
	</div>

<!--Apertura contenedor de la categoría news (noticias)-->

	<div class="row d-flex justify-content-center">

<!--Llamada del loop de WP-->

	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->

			<div class="card trj-noticias text-center mt-1 col-12 col-md-3 ml-2 mb-2">
			<a class="link-tarjeta" href="<?php permalink_link(); ?>" style="text-decoration: none;">
		  <div class="card-body">
		    <h4 class="card-title"><?php 	the_title(); ?></h4>
		    <?php 	the_post_thumbnail('thumbnail') ?>
		    <p class="card-text"><?php 	the_excerpt(); ?></p>
		  </div>
		  	</a>
		  </div>

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?> 

	</div>


<!--Paginación-->

	<div class="col-12 text-center mt-3">
		<?php 	echo paginate_links(); ?>
	</div>


<!--Llamada del footer-->
	<?php get_footer(); ?>
