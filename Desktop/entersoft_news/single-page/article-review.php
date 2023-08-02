<div class="articlereview">
			

			<div class ="review-article">
				<h5>
					सम्पादकीय टिप्पणी
				</h5>
			</div>
		
			<?php if( have_rows('article_review_new') ): ?>
				<div class="row">
				<?php while( have_rows('article_review_new') ): the_row(); 
					$image = get_sub_field('article_review_person_image');
					?>
					
					<div class="col-md-3 ">
						<div class="a-author">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<span class="review-title"><?php the_sub_field('name_of_article_reviewer'); ?></span>
						</div>
					</div>
					<div class="col-md-9">
						<span class="review-content">
							<?php the_sub_field('article_review_content'); ?>
						</span>
					</div>
						
					<hr>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
			
			<!------ Article Revews  -->
	
				
						
					</div>
<style>
	.review-article{
		background: #004e6bad;
   		padding: 5px;
	}
	.review-article h5{
		color:#fff;
	}
</style>