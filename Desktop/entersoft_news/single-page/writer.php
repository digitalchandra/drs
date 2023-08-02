 <div class="row ">
							<div class="col-md-6">
						<div class="author-singe-page">
								<div class="auth-image-single">
									<?php 
										$author = get_field('author');
										if( $author ) {
											$authorImage = get_the_post_thumbnail_url( $author->ID);
										}
										else{
										//No 
										}
									?>
									<img src="<?php echo $authorImage ?? ''; ?>" alt="<?php echo $author->post_title; ?>" />

								</div>
								<div class="auth-name-single">
										<?php echo $author->post_title;?> 
								</div>	
							
							</div>
							</div>
                       
							<div class="col-md-6 social-1">
									<div class="single-social">
										<?php dynamic_sidebar('social');?>
								
								</div>
							</div>
						
							
                        </div>