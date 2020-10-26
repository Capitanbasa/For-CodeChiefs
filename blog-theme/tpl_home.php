<?php
/*
* Template name: Frontpage
*/
get_header(); ?>

<section class="py-5 featured-post-wrap">
    <div class="container">
        <?php 
        query_posts('posts_per_page=1&cat=361');
        if( have_posts() ) : 
            while( have_posts() ) : the_post(); ?> 
            <?php $postcart_array = get_the_category(get_the_ID());?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
            <?php $post_author_id = get_post_field( 'post_author', get_the_ID());?>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <a href="<?php echo get_permalink(get_the_ID());?>">
                        <h3 class="text-uppercase text-sm-center text-md-left "><?php the_title();/*3*/ ?></h3>
                    </a>
                    <p>BY <a href="<?php echo get_author_posts_url($post_author_id);?>" class="text-uppercase readmore"><?php echo get_the_author_meta('display_name', $post_author_id);?></a> <?php //echo the_time('M d, Y') ?></p>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="readmore">READ MORE</a></p>
                </div>
            </div>
        <?php endwhile; endif;  ?>
        <?php wp_reset_query();?>
    </div>
</section>
<?php
    $mostppopular_args    = array(
        'numberposts' => 3,  /* get 4 posts, or set -1 to display all posts */
        'orderby'     => 'meta_value',  /* this will look at the meta_key you set below */
        'meta_key'    => 'post_views_count',
        'order'       => 'DESC',
        'post_type'   => 'post'
    );
    $most_post = get_posts( $mostppopular_args );

?>
<section class="most-popular-post-wrap py-5">
    <div class="container">
        <h3 class="text-center">MOST POPULAR</h3>
        <div class="row">
            <?php if( $most_post) : ?>
                <?php foreach( $most_post as $post) :  setup_postdata($post);?>
                    
                    <?php $postcart_array = get_the_category($post->ID);?>
                    <?php $featured_img_url = get_the_post_thumbnail_url($post->ID,'full');?>
                    <div class="col-md-4">
                        <img src="<?php echo $featured_img_url;?>" alt="" class="img-fluid py-4">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <h6 class="text-uppercase text-sm-center text-md-left"><?php echo $post->post_title;?></h5>
                        </a>
                        <p>BY <a href="<?php echo get_author_posts_url($post->post_author);?>" class="text-uppercase readmore"><?php echo get_the_author_meta('display_name', $post->post_author);?></a>   <?php //echo date('M d, Y',strtotime($post->post_date)); ?> <span class="cat-badge small"><?php echo $postcart_array[0]->name;?></span></p>
                        <p class="small"><?php echo get_the_excerpt(); ?></p>
                        <p class="small"><a href="<?php echo get_permalink($post->ID);?>" class="readmore">READ MORE</a></p>
                    </div>
                <?php endforeach; wp_reset_postdata();?>
                
            <?php endif; ?>
            <?php wp_reset_query();?>
        </div>
    </div>
</section>
<?php 
    $latest_args = array(
        'numberposts' => 3,  /* get 4 posts, or set -1 to display all posts */
        'orderby'     => 'date',  /* this will look at the meta_key you set below */
        'order'       => 'DESC',
        'post_type'   => 'post'
    );
    $latest_post = get_posts( $latest_args );
?>
<section class="latest-post-wrap py-5">
    <div class="container">
        <h3 class="text-center">LATEST</h3>
        <div class="row">
            <?php if( $latest_post) : ?>
                <?php foreach( $latest_post as $post) :  setup_postdata($post);?>
                    <?php $postcart_array = get_the_category($post->ID);?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                    <div class="col-md-4">
                        <img src="<?php echo $featured_img_url;?>" alt="" class="img-fluid py-4">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <h6 class="text-uppercase text-sm-center text-md-left"><?php echo $post->post_title;?></h5>
                        </a>
                        <p>BY <a href="<?php echo get_author_posts_url($post->post_author);?>" class="text-uppercase readmore"><?php echo get_the_author_meta('display_name', $post->post_author);?></a>  <?php //echo date('M d, Y',strtotime($post->post_date)); ?> <span class="cat-badge small"><?php echo $postcart_array[0]->name;?></span></p>
                        <p class="small"><?php echo sal_get_the_excerpt($post->ID); ?></p>
                        <p class="small"><a href="<?php echo get_permalink($post->ID);?>" class="readmore">READ MORE</a></p>
                    </div>
                <?php endforeach; wp_reset_postdata();?>
            <?php endif; ?>
            <?php wp_reset_query();?>
        </div>
    </div>
</section>


<?php get_footer();?>
