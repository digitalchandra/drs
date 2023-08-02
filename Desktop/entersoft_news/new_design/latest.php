<section>
<div class="container">
	<div class="row">
			<?php
                    $category_name = get_cat_name('43');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=2&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
		<div class="col-lg-12">
			<div class="hero-title-1">
				<h1>
				<a href="<?php the_permalink();?>"> <?php the_title();?> </a>
				</h1>
		
				<div class="control-author">
					<div class="front-auth-image">
						<?php 
							$author = get_field('author');
								if( $author ) {
											$authorImage = get_the_post_thumbnail_url( $author->ID);
										}
							?>
						<img src="<?php echo $authorImage ?? ''; ?>" alt="<?php echo $author->post_title; ?>" />
					
					</div>
					<div class="auth-name">
							<?php echo $author->post_title;?> 
					
					</div>	
				</div>
				
			<div class="hero-content">
					
					<a href="<?php the_permalink();?>"> 
						<?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
					</a>
					<p>
						<?php echo wp_trim_words( get_the_content(), 35, '...' );?>
					</p>
				</div>

				
			</div>
		</div>
		<?php endwhile; endif;?>
		
	</div>
	</div>
</section>
<style>
	.hero-title-1{
		text-align: center;
		margin-top: 40px;
		background-color: #f5f5f5;
		padding: 10px;
		overflow: hidden;
	}
	.hero-title-1 h1 a{
		font-size: 50px;
		color: #004e6b;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
	}
	.control-author{
		display: flex;
		justify-content: center;
		gap: 20px;
	}
	.hero-content{
		margin-top: 30px;
	}
	.hero-content p{
		font-size: 20px;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 500;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
		margin-top: 20px;
	}
	.hero-content img{
		width: 100%;
		height: auto;
		object-fit: cover;
		overflow: hidden;
	}
	.front-auth-image img{
		height: 40px;
		width: 40px;
		border-radius: 100%;
		object-fit: cover;
		overflow: hidden;
	}
	
</style>