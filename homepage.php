<?php /* Template Name: homepage */ ?>


<?php get_header(); ?>


<div class="page-bg">               
    <div class="animation-wrapper">
		<div class="particle particle-1"></div>
		<div class="particle particle-2"></div>
		<div class="particle particle-3"></div>
		<div class="particle particle-4"></div>
	</div>
</div>

<span class="hero-slider">
<?php super_hero_slider(113); ?> 
</span>




	    <!-- Tour Section -->
    <section id="tour" class="tour-section content-section text-center">
        <div class="container">
			<row>
            <div class="col-lg-8 col-md-10 mx-auto">

                <div class="tour-promo">
                    
                    <h1>TOUR<br>2018</h1>
					
                    
                    <ul class='circle-container'>
                        <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/austria.svg" alt="austria flag" /></li>
                        <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/brazil.svg" alt="brazil flag" /></li>
                        <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/canada.svg" alt="canada flag" /></li>
                         <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/france.svg" alt="france flag" /></li>
                         <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/germany.svg" alt="germany flag" /></li>
                         <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/korea.svg" alt="korea flag" /></li>
                         <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/uk.svg" alt="uk flag" /></li>
                         <li><img class="circle-img" src="<?php bloginfo('template_url'); ?>/img/america.svg" alt="american flag" /></li>
                    </ul>
					
                </div>
            </div>
				</row>
			<div class="center-block">
                    <img class="tour-center-edit" src="<?php bloginfo('template_url'); ?>/img/tour-balloon.png">
					</div>

        </div>
    </section>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Intro Header -->
<div class="page-header">


    
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