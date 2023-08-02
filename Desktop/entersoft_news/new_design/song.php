<section class="peom-2">
<div class="container">
	<div class="row">
			 <?php
						$category_name = get_cat_name('7');
						$category_id = get_cat_ID($category_name);
						$my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
						if($my_query->have_posts() ) :
						while ($my_query->have_posts()) : $my_query->the_post();?>
		<div class="col-md-3">
			<div class="card song-card-1">
						<div class="slide-col">
							<div class="poem-auth">
									<?php 
										$author = get_field('author');
										if( $author ) {
											$authorImage = get_the_post_thumbnail_url( $author->ID);
										}
										else{
											echo "author details not found";
										}
									?>
								<img src="<?php echo $authorImage ?? ''; ?>" alt="<?php echo $author->post_title; ?>" />
								
							</div>
							<div class="slide-title">
							 		<a href="<?php the_permalink();?>">
										 <?php echo $author->post_title;?> 
									</a>
							</div>
							<div class="poem-tag">
								<h4>
									<a href="<?php echo get_category_link('7');?>"> 	
										<?php echo get_cat_name('');?> 
									</a>
								
								</h4>
							</div>
							
						</div>
						<div class="poem-title-2">
								<a href="<?php the_permalink();?>"> <?php the_title();?>	 </a>
						</div>
				<div class="slide-content">
					<?php echo the_field('poem');?>
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>
	
					 <?php
						$category_name = get_cat_name('8');
						$category_id = get_cat_ID($category_name);
						$my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
						if($my_query->have_posts() ) :
						while ($my_query->have_posts()) : $my_query->the_post();?>
		<div class="col-md-3">
			<div class="card song-card-1">
						<div class="slide-col">
							<div class="poem-auth">
									<?php 
										$author = get_field('author');
										if( $author ) {
											$authorImage = get_the_post_thumbnail_url( $author->ID);
										}
										else{
											echo "author details not found";
										}
									?>
								<img src="<?php echo $authorImage ?? ''; ?>" alt="<?php echo $author->post_title; ?>" />
								
							</div>
							<div class="slide-title">
							 		<a href="<?php the_permalink();?>">
										<?php echo $author->post_title;?> 
									</a>
							</div>
							<div class="poem-tag">
								<h4>
								<a href="<?php echo get_category_link('8');?>"> 	
										<?php echo get_cat_name('');?> 
									</a>
								</h4>
							</div>
							
						</div>
					<div class="poem-title-2">
						<a href="<?php the_permalink();?>"> <?php the_title();?>	 </a>
					</div>
				<div class="slide-content">
						<?php echo the_field('poem');?>
				</div>
			</div>
			
		</div>
	<?php endwhile; endif;?>
		
					 <?php
						$category_name = get_cat_name('13');
						$category_id = get_cat_ID($category_name);
						$my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
						if($my_query->have_posts() ) :
						while ($my_query->have_posts()) : $my_query->the_post();?>
		<div class="col-md-3">
			<div class="card song-card-1">
								<div class="slide-col">
							<div class="poem-auth">
									<?php 
										$author = get_field('author');
										if( $author ) {
											$authorImage = get_the_post_thumbnail_url( $author->ID);
										}
										else{
											echo "author details not found";
										}
									?>
								<img src="<?php echo $authorImage ?? ''; ?>" alt="<?php echo $author->post_title; ?>" />

								
							</div>
							<div class="slide-title">
							 		<a href="<?php the_permalink();?>">
										<?php echo $author->post_title;?> 
									</a>
							</div>
							<div class="poem-tag">
								<h4>
									<a href="<?php echo get_category_link('13');?>"> 	
										<?php echo get_cat_name('');?> 
									</a>
								</h4>
							</div>
							
						</div>
					<div class="poem-title-2">
						<a href="<?php the_permalink();?>"> <?php the_title();?>	 </a>
					</div>
				<div class="slide-content">
						<?php echo the_field('poem');?>
				</div>
			</div>
			
		</div>
		<?php endwhile; endif;?>

		<div class="col-md-3">
		<div class="side-ads">
			<?php dynamic_sidebar('ads3');?>
		</div>	
		</div>
	
		
	</div>
	</div>

</section>

