<?php get_header();?>

<div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 category-bg">
     
                <div class="row">   
                 <?php if(have_posts()): while (have_posts()): the_post(); ?>
                    <div class="col-md-3 ">
                        
                    <div class="card social-archive" >
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



</div>
</div>


<?php get_footer();?>

