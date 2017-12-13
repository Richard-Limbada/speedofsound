<?php get_header(); ?>





	
	

<div class="page-bg">               
    <div class="animation-wrapper">
		<div class="particle particle-1"></div>
		<div class="particle particle-2"></div>
		<div class="particle particle-3"></div>
		<div class="particle particle-4"></div>
	</div>
</div>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Intro Header -->
<div class="page-header">

    <div class="main-head" style='background:url("<?php
  $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
  echo $src[0]; ?>"); background-size: cover'>
        
        
            
        
                        <h1 class="main-heading"><?php the_title(); ?></h1>
                        
   </div>
    
    
    
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    
                    <?php the_content(); ?>
                        <?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
	<section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    
                   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgetized-Area") ) : ?>
<?php endif;?>

                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
                                              
                                              

<?php get_footer(); ?>