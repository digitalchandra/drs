<div class="container">
	<div class="content_head">
		<span class="write-border"> <hr> </span>
		<span class="cat_head" > <?php echo get_cat_name('5');?> </span>
		<span class="left-border" > <hr> </span>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				  <?php
                    $category_name = get_cat_name('10');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
				<div class="col-md-7">
					   
					<div class="card bg-light text-white">
					  <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
					
						<div class="creative-title-section">
						<h5 class="creative-card-title">
							<a href="<?php the_permalink();?>"> <?php the_title();?> </a>  
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
							<?php echo wp_trim_words( get_the_content(), 20, '...' );?>
							</p>
						</div>
					</div>
				</div>
				 <?php endwhile; endif?>
				<div class="col-md-5">
				 <?php
                    $category_name = get_cat_name('10');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=4&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
				
					<div class="new-card">
						<div clas="new-image " >
							  <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
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
									<?php echo wp_trim_words( get_the_content(), 15, '...' );?>
								</p>
						</div>
					</div>
					 <?php endwhile; endif?>
				</div>
				
			</div>


		</div>

	</div>
</div>

<style>
	.content_head{
		display: flex;
		justify-content: center;
		margin-bottom: 25px;
		margin-top: 60px;
	}
	.write-border hr{
		    border: 2px solid #00aeef;
    		width: 150px;
		    margin-top: 27px !important;
	}
	.left-border hr{
		    border: 2px solid #00aeef;
    		width: 150px;
		    margin-top: 27px !important;
	}
	.cat_head{
		font-size: 35px;
		padding: 0px 6px;
		color: #004e6b;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
	}
	.new-card{
		
		padding: 0px;
		margin-bottom:10px;
	}
	.new-card{
		    margin-bottom: 5px;
			background-color: #e3e3e3;
			overflow: hidden;
	}

	.new-content{
		    background: #f5f5f5;
			width: 100%;
			padding: 10px;
			
	}
	.new-content a{
			color: #00aeef;
			text-decoration: none;
			overflow: hidden;
			cursor: pointer;
			font-weight: 400;
			font-family: 'Mukta', sans-serif;
			font-size: 20px;
	}
	.new-card img{
		height: 150px;
		width: 100%;
		object-fit: cover;
	}
	.second-creative{
		margin-top:20px;
	}

	.creative-card-title{
		margin-bottom: 0.5rem;
	
	
	}
	.creative-card-title a{
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 25px;
		color: #004e6b;
	}
	.creative-title-section{
		padding:5px;
	}
	.creation-content-short{
			color:#000;
		    text-decoration: none;
			overflow: hidden;
			cursor: pointer;
			font-weight: 400;
			font-family: 'Mukta', sans-serif;
			font-size: 18px;
	}
</style>