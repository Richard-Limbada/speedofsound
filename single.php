<?php get_header();?>
<div class=”row”>
<div class=”col-md-8”>
<?php if ( have_posts() ) : while ( have_posts() ) :
the_post(); ?>
<h2><a href=”<?php the_permalink();?>”><?php
the_title();?></a></h2>
<?php the_post_thumbnail(‘large’);
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>