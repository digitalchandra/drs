
<section>
<div class="container second-creative">
				<div class="row">
					 <?php
						$category_name = get_cat_name('8');
						$category_id = get_cat_ID($category_name);
						$my_query = new WP_Query("showposts=3&cat=$category_id&orderby=ID&order=DASC");
						if($my_query->have_posts() ) :
						while ($my_query->have_posts()) : $my_query->the_post();?>
					<div class="col-md-4">
						<div class="newnews-img card">
						  <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
						  <div class="newnews-card card-body">
								  <h5 class="newnews-card-title">
									  <a href="<?php the_permalink();?>">
										  <?php the_title();?> Test
									  </a>
								  </h5>
							<p class="card-text">
							  <?php echo wp_trim_words( get_the_content(), 15, '...' );?>
							</p>
						  </div>
						</div>
					</div>
					<?php endwhile; endif?>
				</div>
				<div class="seemore1">
					<a href="<?php echo get_category_link('8');?>"> थप हेर्नुहोस् </a>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</div>
			</div> 
</section>
<style>
	.newnews-card-title a{
		font-size: 20px;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
	}
	.newnews-card{
		font-size: 18px;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 400;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
	}
	.newnews-img img{
		height: 250px;
		width: 100%;
		object-fit: cover;
	}
	.seemore1{
		display: flex;
		justify-content: right;
		margin-top: 20px;
		gap:7px;
	}
	.seemore1 a{
		font-size: 18px;
		text-decoration: none;
		font-weight: 500;
		font-family:'Mukta', sans-serif;
	}
	.fa-angle-double-right{
		color: #0d6efd;
		font-size: 27px;
		
	}
	.peom-2{
		margin-top:20px;
	}
</style>