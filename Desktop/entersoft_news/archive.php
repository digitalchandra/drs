<?php get_header();?>

<div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 category-bg">
                    <!-- Border Start-->
                        <div class=" border-headline">
                            <div class="ads">
                                <?php dynamic_sidebar('top-ads7');?>
                             </div>
                        </div>
                    <!--Border end-->  
                <div class="row">   
                 <?php if(have_posts()): while (have_posts()): the_post(); ?>
                    <div class="col-md-4 cat-margin">
                        
                    <div class="card image-control-1" style="width: auto;">
                            <?php the_post_thumbnail('full', array('class'=>'img-fluid'));?>
                        <div class="card-title category_title">
                            <a href="<?php the_permalink();?>"><?php the_title();?> </a> 
                        </div>
                        <div class="card-body-control ">
                              <?php echo wp_trim_words(get_the_excerpt(), 20, '...' );?>
                    
                         </div>
          
                    </div>
                   </div>
        <?php endwhile; endif;?>

         </div>
				<div class="pagination">
					<?php entersoft_number_pagination(); ?>
				</div>
    </div>
    <div class="col-lg-2">
        <div class="category-bg">
            <div class="single-ads">
                <?php dynamic_sidebar('cat-side');?>
            </div>
   
        </div>
    </div>


</div>
</div>


<?php get_footer();?>

