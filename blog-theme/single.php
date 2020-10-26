<?php get_header();?>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <?php while ( have_posts() ) : the_post(); $postid = get_the_ID();?>
                <?php $featured_img_url = get_the_post_thumbnail_url($postid,'full'); ?>
                <?php $post_author_id = get_post_field( 'post_author', $postid);?>
                <?php $postcart_array = get_the_category($postid);?>
                <h4 class="text-uppercase text-sm-center text-md-left"><?php the_title();?></h4>
                <p style="margin-bottom:5px;">BY <a href="<?php echo get_author_posts_url($post_author_id);?>" class="text-uppercase readmore"><?php echo get_the_author_meta('display_name', $post_author_id);?></a>   <?php //echo date('M d, Y',strtotime(get_the_date())); ?> <span class="cat-badge small"><?php echo $postcart_array[0]->name;?></span></p>
                <p class="sal-tags"><?php the_tags('',', ',''); ?></p>
                <img src="<?php echo $featured_img_url;?>" alt="" class="img-fluid py-2">
                <div class="sal-content-wrap">
                        <?php the_content();?>
                </div>
                <div class="sal-comments-wrap">
                    <?php comments_template(); ?>
                </div>
            <?php endwhile;?>
            <?php wp_reset_query();?>
            </div>
            <div class="col-md-4">
                <?php
                    $mostppopular_args    = array(
                        'numberposts' => 2,  /* get 4 posts, or set -1 to display all posts */
                        'orderby'     => 'meta_value',  /* this will look at the meta_key you set below */
                        'meta_key'    => 'post_views_count',
                        'order'       => 'DESC',
                        'post_type'   => 'post'
                    );
                    $most_post = get_posts( $mostppopular_args );
                ?>
                <div class="row py-3 px-3 sal-gray-bg">
                    <h6 class="text-left">MOST POPULAR</h6>
                    <?php if( $most_post) : ?>
                        <?php foreach( $most_post as $post) :  ?>
                            <?php $postcart_array = get_the_category($post->ID);?>
                            <?php $featured_img_url = get_the_post_thumbnail_url($post->ID,'full');?>
                            <div class="col-md-12 my-2">
                                <img src="<?php echo $featured_img_url;?>" alt="" class="img-fluid py-4">
                                <a href="<?php echo get_permalink($post->ID);?>">
                                    <h6 class="text-uppercase text-sm-center text-md-left"><?php echo $post->post_title;?></h5>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php wp_reset_query();?>
                </div>
                
                <?php
                if ( is_active_sidebar( 'salarium-side-bar' ) ) : ?>
                    <div class="row my-5 py-3 sal-gray-bg">
                        <div class="col-md-12 sal-widget-wrap">
                            <?php dynamic_sidebar( 'salarium-side-bar' ); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>