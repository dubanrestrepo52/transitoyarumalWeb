<?php 	get_header( 'news' ) ?>
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<h3 class="text-center"><?php 	the_title() ?></h3>
<div>	
		<?php 	the_content() ?>
</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
</div>
<?php get_footer() ?>