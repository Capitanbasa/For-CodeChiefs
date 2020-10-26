<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 **/

get_header();?>
<section class="py-5">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php the_archive_title( '<h3 class="text-center">', '</h3>' ); ?>
        <?php endif; ?>
        <div class="row">
            <?php
            if ( have_posts() ) : ?>
                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post(); $postid = get_the_ID();?>
                    <?php $postcart_array = get_the_category($postid);?>
                    <?php $featured_img_url = get_the_post_thumbnail_url($postid,'full');?>
                    <div class="col-md-4">
                        <img src="<?php echo $featured_img_url;?>" alt="" class="img-fluid py-4">
                        <a href="<?php echo get_permalink($postid);?>">
                            <h6 class="text-uppercase text-sm-center text-md-left"><?php echo $post->post_title;?></h5>
                        </a>
                        <p>BY <a href="<?php echo get_author_posts_url($post->post_author);?>" class="text-uppercase readmore"><?php echo get_the_author_meta('display_name', $post->post_author);?></a>   | <?php echo date('M d, Y',strtotime($post->post_date)); ?> <span class="cat-badge small"><?php echo $postcart_array[0]->name;?></span></p>
                        <p class="small"><?php echo excerpt_limit(30); ?></p>
                        <p class="small"><a href="<?php echo get_permalink($post->ID);?>" class="readmore">READ MORE</a></p>
                    </div>
                <?php endwhile;?>
                <div class="col-md-12 text-center my-5 sal-pagination-wrap">
                    <?php posts_nav_link();?>
                </div>
                
            <?php endif;?>
        </div>
    </div>
</section>
<?php get_footer();?>
