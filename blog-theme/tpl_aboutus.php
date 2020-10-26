<?php
/*
* Template name: About Us
*/
get_header();?>
<section>
	<div class="container py-5">
		<?php while ( have_posts() ) : the_post(); $postid = get_the_ID();?>
            <div class="row">
                <div class="col-md-6 align-items-center align-middle card-group">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inside-salarium-about-us.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 align-items-center align-middle card-group">
                    <div>
                        <h3 class="text-uppercase text-sm-center text-md-left"><?php the_title();?></h1>
                        <?php the_content();?>
                    </div>    

                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>    
	</div>
</section>
<?php get_footer();?>
