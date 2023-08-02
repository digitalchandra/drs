<div class="container">
	<hr>
	 <div class="ads ads-control">
			<?php dynamic_sidebar('ads8');?>
	</div>
	<div class="row">
		<div class="col-md-6">
				 <div class="ads ads-control">
			<?php dynamic_sidebar('ads9');?>
		</div>
		</div>
		<div class="col-md-6">
		<div class="ads ads-control">
			<?php dynamic_sidebar('ads10');?>
		</div>
		</div>

	</div>
<hr>
</div>
		<div class="content_head">
			<span class="write-border"> <hr> </span>
			<span class="cat_head" > <?php echo get_cat_name('25');?> </span>
			<span class="left-border" > <hr> </span>
		</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
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
						
							<div class="art-author">
									<?php 
										$author = get_field('author');
											if( $author ) {
														$authorImage = get_the_post_thumbnail_url( $author->ID);
													}
										?>
								<img src="<?php echo $authorImage ?? ''; ?>" alt="<?php echo $author->post_title; ?>" />
							
								<span class="art-card-text-author">
								
									<?php echo $author->post_title;?> 	
								</span>
						</div>
					</div>
					<?php endwhile; endif;?>
				</div>
		</div>
	</div>
	<div class="art-new-cat">
	<div class="row">
		<div class="col-md-8">
			 <?php
                    $category_name = get_cat_name('24');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=2&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
			<div class="card new-analysis ana-control">
				<div class="card bg-dark text-white">
					
					 <?php the_post_thumbnail('full', array('class' => 'card-img img-fluid rounded-start '));?> 
					  <div class="card-img-overlay">
					
					  </div>
					</div>
				<div class="art-content-control">
						  <h5 class="art-card-title"> 
							  <a href="<?php the_permalink();?>"> 
								<?php the_title();?> 
							  </a>
						  </h5>
						
								<div class="art-author-1">
									<?php 
										$author = get_field('author');
											if( $author ) {
														$authorImage = get_the_post_thumbnail_url( $author->ID);
													}
										?>
							
							
								<span class="art-card-text-author-1">
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
				<div class="art-ads">
				 <?php dynamic_sidebar('ads11');?>
				</div>
				<div class="art-ads">
				 <?php dynamic_sidebar('ads12');?>
				</div>
			</div>
		

	
		</div>
		<div class="seemore1">
			<a href="<?php echo get_category_link('24');?>"> थप हेर्नुहोस् </a>
			<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		</div>
	</div>
</div>
<style>
	.ana-control:nth-child(1){
		display:none;
	}
	.art{
		display:flex;
	}
	.art-content{
		width:70%;
		margin-left: -50px;
   		 background-color: #00aeef;
		padding: 20px;
		text-align:center;
		 margin-top: 50px;
    	margin-bottom: 50px;
	}
	.art-content h3>a{
	    color: #fff;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 35px;

	}
	.art-new-cat{
		margin-top:20px;
	}

	.art-card-title{
		
	}
	.art-card-title a{
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 25px;
		color: #004e6b;
	}
	.art-content-control{
		padding: 5px;
	}
	.art-author{
		color:#fff;
		padding: 10px;
		text-align:center;
	}
	.art-author img{
		height: 50px; 
		width: 50px;
		border-radius:100%;
		border: 2px solid #00baff;
	}
	.art-card-text-author{
		color:#fff;
		font-family: mukta,sans-serif;
    	font-size: 1.2rem;
	}
	
</style>