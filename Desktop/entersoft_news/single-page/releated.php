<div class="container-sm">
	<div class="row category-bg">
   
        <h3>
				अन्य पठनीय सामाग्री
		</h3>
        <?php
            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'showposts' => 10, 'post__not_in' => array($post->ID) ) );
            if( $related ) foreach( $related as $post ) {
            setup_postdata($post);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <div class="col-sm-3">
            <div class="recent-content">
                <!--------------image--------------->
            <img class="img-fluid" width="auto" height="200" src="<?php echo $image[0];?>" sizes="(max-width: 300) 100vw, 200px" />
                      
                            <!---------title-------->
            <h3 class="recentpost_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            </div>
        </div>            
         <?php }
					wp_reset_postdata(); ?>
       
        </div>
    </div>