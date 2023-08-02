	<section>
		
		<div class="container">
			<hr>
			<div class="row">
				<div class="ads ads-control">
					 <?php dynamic_sidebar('ads6');?>
				</div>
			</div>
			<hr>
		</div>
	</section>
	<div class="content_head">
		<span class="write-border"> <hr> </span>
		<span class="cat_head" > <?php echo get_cat_name('24');?> </span>
		<span class="left-border" > <hr> </span>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			 <?php
                    $category_name = get_cat_name('24');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
			<div class="card new-analysis">
				<div class="card bg-dark text-white">
					
					 <?php the_post_thumbnail('full', array('class' => 'card-img img-fluid rounded-start '));?> 
					  <div class="card-img-overlay">
						
					  </div>
					</div>
			<div class="card-body">
				<h5 class="analysis-card-title"> 
							<a href="<?php the_permalink();?>"> <?php the_title();?></a>
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
					<p class="creation-content-short">
							<?php echo wp_trim_words( get_the_content(), 25, '...' );?>
					</p>
			</div>
			</div>
			<?php endwhile; endif;?>
		</div>
		<div class="col-md-4">
				 <?php
                    $category_name = get_cat_name('31');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=2&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
				
					<div class="new-card">
						<div clas="new-image " >
							  <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
						</div>
						<div class="new-content">
							<a href="<?php the_permalink();?>"> <?php the_title();?>  </a>
							<br>
							<span class="card-text-author">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								<?php echo get_field('author_name');?>
							</span>
							<p class="creation-content-short">
								<?php echo wp_trim_words( get_the_content(), 7, '...' );?>
							</p>
						</div>
					</div>
					 <?php endwhile; endif?>
		</div>
	</div>
	
<div class="poem-2">
		<div class="row">
		 <?php
                    $category_name = get_cat_name('32');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=2&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
		<div class="col-md-6">
			<div class="card">
			<div class="poem-card ">
				 <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?>
			</div>
			<div class="poem-card-body">
				 <a href="<?php the_permalink();?>"><?php the_title();?> </a> <br>
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
	
		</div>
		<?php endwhile; endif;?>
		

		
	</div>
	</div>
		<div class="seemore1">
			<a href="<?php echo get_category_link('24');?>"> थप हेर्नुहोस् </a>
			<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		</div>
</div>
<style>
	.poem-2{
		margin-top:20px;
	}
	.poem-card{
		height: 350px;
		width: auto;
		object-fit: cover;
		overflow: hidden;
	}
	.poem-card-body{
		padding:10px;
	}
	.poem-card-body a{
		color: #00aeef;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 25px;
	}
	.analysis-card-title{
		margin-bottom: 0.5rem;
		color:#004e6b;
	
	}
	.analysis-card-title a{
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 25px;
		color:#004e6b;
	}
	.card-text-author{
		color:#004e6b;
	}
	.fa-pencil-square-o{
		color:#004e6b; 
	}
	.ads-control{
		margin-top: 15px;
	}
</style>