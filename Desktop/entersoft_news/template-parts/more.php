<section>
  <div class="container">
	<hr>
		<div class="row">
		  <div class="ads">
		  <?php dynamic_sidebar('ads15');?>
		</div>
		</div>
	<hr>
  </div>
</section>

<!--Blog Start From Here-->

  <!--Border end-->

  <div class="container-sm">
    <div class="row news_section_background">
		    <div class="seperator">
				<ul class="sep-cat">
				          		  <li class="name-cat-contrl"> <a href="<?php get_category_link('27');?>">   <?php echo get_cat_name('27');?></a></li>  
				  <li class="line-control"> 
					 <hr> </li>
			  </ul>
			  </div>
                   <?php
                    $category_name = get_cat_name('27');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=3&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
            <div class="col-sm-4 ">
            <div class="card bg-light text-white card-custom-margin-1">
             <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
           
				<div class="child-title">
					<h5 class="child-title-1">
					 <a href="<?php the_permalink(); ?>">
						   <?php  the_title();?>  
					   </a>
				  </h5>
						<div class="front-auth-image">
									<?php 
										$author = get_field('author');
											if( $author ) {
														$authorImage = get_the_post_thumbnail_url( $author->ID);
													}
										?>
							
								<span class="card-text-author">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<?php echo $author->post_title;?> 	
								</span>
						</div>
				<div class="child-content-1">
						<p>
						<?php echo wp_trim_words( get_the_content(), 7, '...' );?>
					</p>
				</div>
				</div>
			
            </div>
        </div>
        <?php endwhile; endif?>
        	<div class="seemore1">
					<a href="<?php echo get_category_link('27');?>"> थप हेर्नुहोस् </a>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</div>
      </div>
    </div>

