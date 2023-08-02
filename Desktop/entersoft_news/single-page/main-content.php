          <div class="content-start">
                            <div class="single-image">
                          
                               <?php the_post_thumbnail('full', array('class'=>'img-fluid'));?>
                            </div>
                            
         
                            <div class="single-content-body">
                                <?php
                                if(have_posts()){
                                    while(have_posts()){
                                        the_post();
                                        the_content();
                                    }
                                }
                                ?>

                            </div>
					<div class="translator">
						<div class="translator-image">
							
						</div>

					</div>
			  <div class="translate-main">
					<div class="transator-name">
						<?php if( get_field('profile_photo') ): ?>
							<img src="<?php the_field('profile_photo'); ?>" />
						<?php endif; ?>
			
					</div>
			  		<span class="translator-name"> 
					
					<span class="trans-1"><?php echo get_field('select_title');?> : </span>	
					<br>
					
						<?php echo get_field('translate');?> 
					</span>
				</div>
                        </div>