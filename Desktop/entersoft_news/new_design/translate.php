	
<section>
	
	<div class="container">
	<hr>
		<div class="row">
			<div class="ads">
				<?php dynamic_sidebar('ads13');?>
			</div>
		</div>	
	<hr>
	</div>
	
</section> 
<div class="container">
	<div class="row">
		<div class="content_head">
			<span class="write-border"> <hr> </span>
			<span class="cat_head" > <?php echo get_cat_name('26');?> </span>
			<span class="left-border" > <hr> </span>
		</div>
		<div class="col-md-6">
				<?php
                    $category_name = get_cat_name('26');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=3&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
			<div class="new-trans">
				<div class="trans-image">
				<?php the_post_thumbnail('full', array('class' => 'img-fluid'));?> 
				</div>
				<div class="trans-title">
					<h3>
						 <a href="<?php the_permalink();?>"><?php the_title();?> </a> 
					</h3>
				
						<div class="auth-control">
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
						</div>
					<p>
						<?php echo wp_trim_words( get_the_content(),30, '...' );?>
					</p>
				</div>
			</div>
			<?php endwhile; endif;?>
	
		</div>
			<div class="col-md-6">
				<?php
                    $category_name = get_cat_name('26');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
				
				<div class="card bg-white text-white">
				  <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?> 
				  <div class="card-img-overlay">
			
				  </div>
					<div class="translate-c-1">
						<h5 class="art-card-title">
							<a href="<?php the_permalink();?>">
								<?php the_title();?> 
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
					
						<p class="translate-content">
						<?php echo wp_trim_words( get_the_content(),10, '...' );?>
						</p>
					</div>
				</div>
				
				<?php endwhile; endif;?>
		</div>
			<div class="seemore1">
					<a href="<?php echo get_category_link('26');?>"> थप हेर्नुहोस् </a>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</div>
	</div>
</div>
<style>
	.new-trans{
		    display: flex;
			background-color: #e3e3e3;
			padding: 5px;
			height: 240px;
			width: auto;
			overflow: hidden;
			margin-bottom: 10px
	}
	.new-trans:nth-child(1){
		display:none;
	}
	
	.trans-image{
		width: 240px;
		height: auto;
		object-fit: cover;
		overflow: hidden;
	}
	.trans-image>img{
		height: 240px;
		width: 240px;
		object-fit: cover;
	}
	.trans-title{
		padding: 0px 10px;
		width: 350px;
    	overflow: hidden;
    	cursor: pointer;
   
  
	}
	.trans-title h3 a{
		text-decoration: none; 
    	font-weight: 600; 
		font-size: 25px;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
	}
	.translate-c-1{
		padding:5px;
	}
	.translate-content{
		text-decoration: none; 
    	font-weight: 400; 
		font-size: 17px;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
	}
</style>