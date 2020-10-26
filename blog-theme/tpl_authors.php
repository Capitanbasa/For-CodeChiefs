<?php
/*
* Template name: Authors
*/
get_header();?>
<section>
	<div class="container py-5">
        <?php while ( have_posts() ) : the_post(); $postid = get_the_ID();?>
            <div class="row py-2">
                <div class="col-md-12">
                    <h2 class="text-uppercase text-center"><?php the_title();?></h2>
                </div>
            </div>
        
            <div class="row py-3">
                <div class="col-md-2 d-flex"></div>
                <div class="col-md-2 d-flex align-items-center px-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar-judah.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h5 class="text-left">JUDAH HIRSCH</h5>
                        <p>Judah is the founder and CEO of Salarium. He writes thought-provoking articles on Human Resources, Financial Technology and Blockchain for Inside Salarium.  Outside of his responsibilities in Salarium, Judah spends his time working on various companies and projects, sitting on the board of and mentoring start-ups.</p>
                        <p><a href="<?php echo site_url();?>/author/jhirsch/" class="readmore">READ ARTICLE</a></p>
                    </div>    
                </div>
                <div class="col-md-2 d-flex"></div>
            </div>
            <div class="row py-3">
                <div class="col-md-2 d-flex"></div>
                <div class="col-md-2 d-flex align-items-center px-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar-tp.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h5 class="text-left">THERESE PEMPENA</h5>
                        <p>Therese is a content writer with years of experience writing about a wide range of topics across many industries. As the resident copywriter of Salarium, she writes about payroll, employment, and other topics under HR. Her hobbies include playing video games, reading books and listening to music.</p>
                        <p><a href="<?php echo site_url();?>/author/tpempena/" class="readmore">READ ARTICLE</a></p>
                    </div>    
                </div>
                <div class="col-md-2 d-flex"></div>
            </div>
            <div class="row py-3">
                <div class="col-md-2 d-flex"></div>
                <div class="col-md-2 d-flex align-items-center px-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar-avan.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h5 class="text-left">AVAN TAN</h5>
                        <p>He writes content with the intent to make HR more capable of contributing to business goals through best practices and utilization of technology. He is an advocate of work-life balance, a photography enthusiast, loves the outdoors, gaming, and sports.</p>
                        <p><a href="<?php echo site_url();?>/author/avantan/" class="readmore">READ ARTICLE</a></p>
                    </div>    
                </div>
                <div class="col-md-2 d-flex"></div>
            </div>
        <?php endwhile; wp_reset_query(); ?>    
	</div>
</section>
<?php get_footer();?>
