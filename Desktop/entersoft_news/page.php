<?php get_header();?>
<div class="container">
    <div class="row">
       <?php if (have_posts()){
            while(have_posts()){
                the_title();
                the_post();
                get_template_part('template-parts/content','page');
            }
        } ?> 
    </div>
</div>


<?php get_footer();?>