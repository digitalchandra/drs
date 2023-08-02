<?php get_header();?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="SrvKTDLN"></script>
     <section>
	<div class="container-sm">
        <div class="row"> 
          <div class="singe-ads-1">
              <?php dynamic_sidebar('single1');?>
          
          </div>
        </div>
    </div>
            <div class="container-sm">
                <div class="row">
                    <div class="col-lg-9 category-bg">
						
                        <div class="single-header">
                            <h1 class="main_new_heading"> 
                            <?php the_title();?>
                            </h1>
                        </div>
                <div class="clearfix"> </div>
					<hr>
                       <?php get_template_part('single-page/writer');?> 
                      <hr>
              		<?php get_template_part('single-page/main-content');?> 
                        <!--Article Review-->
					<?php get_template_part('single-page/article-review');?> 
  					   <!--Comment-->
					<?php get_template_part('single-page/comment');?> 
						

                    </div>


				   <div class="col-lg-3">
						 <!--Ads-->
						<?php get_template_part('single-page/ads');?> 
				   </div>
                </div>
            </div>

        </section>
<section class="resentmargin">

         <!--Related Post-->
		<?php get_template_part('single-page/releated');?> 
	

</section>


<?php get_footer();?>