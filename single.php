<?php get_header('news'); ?>

<div class="container">
<div class="row">

	<div class="col-lg-9 pr-4 pl-lg-0">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<h2 class="text-center"><?php 	the_title() ?></h2>
		<hr>
		<div class="text-justify"><?php 	the_content() ?></div>
			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>

		<div class="col-lg-3">

		<h2 class="titulo-consejos">Consejos</h2>

		<div id="slider-consejos">
			
				<?php 	query_posts( array('cat'=> 10)); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<div class="border rounded pl-3 pr-3">
				<h4 class="text-center"><?php the_title( $before = '', $after = '', $echo = true ) ?></h4>
				<div class="d-flex justify-content-center"><?php the_post_thumbnail( $size = 'thumbnail', $attr = '' ) ?></div>
				<p class="text-justify"><?php the_content( $more_link_text = null, $strip_teaser = false ) ?></p>
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?> 
			
		</div>
	</div>	
</div>
 
</div>
<?php 	get_footer() ?>