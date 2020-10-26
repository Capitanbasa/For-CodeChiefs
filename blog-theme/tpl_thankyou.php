<?php
/*
* Template name: Thank You
*/
get_header();?>
<section>
	<div class="container py-5">
        <?php while ( have_posts() ) : the_post(); $postid = get_the_ID();?>        
            <div class="row py-3">
                <div class="col-md-2 d-flex"></div>
                <div class="col-md-8 d-flex align-items-center px-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inside-salarium-thank-you.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-2 d-flex"></div>
            </div>
        <?php endwhile; wp_reset_query(); ?>    
	</div>
</section>
<?php get_footer('nosignup');?>

