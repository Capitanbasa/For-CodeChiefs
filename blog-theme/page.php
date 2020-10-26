<?php
/**
 * The template for displaying all pages
 *
 */
get_header();?>
<section>
	<div class="container py-5">
		<?php while ( have_posts() ) : the_post(); $postid = get_the_ID();?>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase text-sm-center text-md-left "><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>    
	</div>
</section>
<?php get_footer();?>