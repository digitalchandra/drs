<!----------------------------------------Province-------------------------------------->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
							<div class="seperator">
				<ul class="sep-cat">
				  <li class="name-cat-contrl"> <a href="<?php get_category_link('24');?>">    <?php echo get_cat_name('24');?></a></li> 
					
				  <li class="line-control"> 
					 <hr> </li>
			  </ul>
			  </div>
				<div class="province">
					<?php
                    $category_name = get_cat_name('24');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
					<div class="province-image">
						<div class="province-news-photo">
							<a href="<?php the_permalink();?>"> <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?>  </a>
						</div>
					</div>
					<div class="province-title">
							<h4>
								<a href="<?php the_permalink();?>"> <?php the_title();?> </a>
							</h4>
						<p>
						<?php echo wp_trim_words( get_the_content(), 30, '...' );?>
						</p>
					</div>
					<?php endwhile; endif;?>
				</div>
				<div class="row">
					<?php
                    $category_name = get_cat_name('31');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=7&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
					
					<div class="col-md-6 small-card-news-control">
						<div class="small-card-news ">

								<div class="card-image-control">
								<?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
								</div>
								<div class="card-content-control">
								  <h5 class="card-title-control"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 3);?>  */?></a> </h5>
								  <p><?php echo wp_trim_words( get_the_content(), 11, '...' );?> </p>
								 <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
								</div>
							</div>
					</div>
					<?php endwhile; endif;?>
				</div>
				
			</div>
			<div class="col-lg-3">
				
				<section>
				  <div class="container">
					<div class="row">
					  <div class="ads">
					 <?php dynamic_sidebar('ads5');?>
					</div>
					</div>
				  </div>
				</section>
				
				
				<section>
				  <div class="container">
					<div class="row">
					  <div class="ads">
					 <?php dynamic_sidebar('ads6');?>
					</div>
					</div>
				  </div>
				</section>
			</div>
		</div>
		
	</div>

</section>



<!----------------------------------------Province--- End----------------------------------->
