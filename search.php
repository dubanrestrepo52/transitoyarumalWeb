<?php 	get_header( 'news' ) ?>

<div class="container">
<?php 	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->

<div class="cont-search col-12 border rounded mb-3 pb-4">
<h3>	
<?php 	the_title( $before = '', $after = '', $echo = true ) ?>
</h3>
<?php 	the_excerpt() ?>

<a class="ver-mas-search" href="<?php 	the_permalink() ?>">Ver más...</a>

</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?> 

</div>

<div class="col-12 text-center mt-3">
	<?php 	echo paginate_links(); ?>
</div>
<?php 	get_footer() ?>