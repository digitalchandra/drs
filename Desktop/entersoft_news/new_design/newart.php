<div class="container">
		<div class="art-new-cat">
	<div class="row">
		<div class="col-md-6">
			 <?php
                    $category_name = get_cat_name('16');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
			<div class="new-analysis card">
				<div class="card bg-dark text-white art-img-control">
					
					 <?php the_post_thumbnail('full', array('class' => 'card-img img-fluid rounded-start '));?> 
					  <div class="card-img-overlay">
							<h6>
								<a href="<?php echo get_category_link('16');?>">
									<?php echo get_cat_name('16');?> 
								</a>
						  </h6>
					
					  </div>
				
					</div>
				<div class="art-card-title-1">
				<a href="<?php the_permalink();?>"> 
						<?php the_title();?> 
				</a>
					<br>
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
						<p class="creation-content-short">
							<?php echo wp_trim_words( get_the_content(), 15, '...' );?>
						</p>
				</div>
		
			</div>
			<?php endwhile; endif;?>
		</div>
		<div class="col-md-4">
				 <?php
                    $category_name = get_cat_name('17');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
				
					<div class="card new-card">
						<div clas="card bg-dark text-white new-image " >
						<?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
					<div class="card-img-overlay card-4">
							<h6>
								<a href="<?php echo get_category_link('17');?>">
									<?php echo get_cat_name('17');?> 
								</a>
						  	</h6>
					  </div>
						</div>
						<div class="new-content">
							<a href="<?php the_permalink();?>"> 
							<?php the_title();?> 
							</a>
						<br>
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
							<p class="creation-content-short">
							<?php echo wp_trim_words( get_the_content(), 7, '...' );?>
						</p>
						</div>
					
					</div>
			
			<?php endwhile; endif?>
			
				 <?php
                    $category_name = get_cat_name('19');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
				
					<div class="card new-card">
						<div clas="card bg-dark text-white new-image " >
						<?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
					<div class="card-img-overlay card-4">
							<h6>
								<a href="<?php echo get_category_link('17');?>">
									<?php echo get_cat_name('19');?> 
								</a>
						  	</h6>
					  </div>
						</div>
						<div class="new-content">
							<a href="<?php the_permalink();?>"> 
							<?php the_title();?> 
							</a>
						<br>
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
						<p class="creation-content-short">
							<?php echo wp_trim_words( get_the_content(), 7, '...' );?>
						</p>
						</div>
					</div>
			
		 <?php endwhile; endif?>
			
		</div>
		
			<div class="col-md-2">
				<div class="art-ads">
				 <?php dynamic_sidebar('ads4');?>
				</div>
				<div class="art-ads">
				 <?php dynamic_sidebar('ads5');?>
					
				</div>
			</div>
		

	
		</div>
		
	</div>
</div>
<style>
	.art-img-control img{
		height:400px;
		object-fit: cover;
	}
	.art-card-title-1{
		    padding: 10px 5px;
	}
	.art-card-title-1 a{
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 20px;
		color: #004e6b;
	}
	.author-icon{
		color: #004e6b;
	}
	.card-img-overlay {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
    	padding: 0rem !important;
		border-radius: calc(0.25rem - 1px);
	}
	.card-img-overlay h6{
		margin-top: 20px;
		background-color: #006185;
		padding: 5px;
		width: 15%;
	
	}
	.card-img-overlay h6 a{
		text-decoration:none;
		color: #fff;
		font-size: 17px;
	}
	.card-4 h6{
		margin-top: 20px;
		background-color: #006185;
		padding: 5px;
		width: 40%;
	}

</style>