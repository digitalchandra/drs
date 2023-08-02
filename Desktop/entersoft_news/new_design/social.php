<section class="social-margin">
<div class="container">
	<div class="row">
		<div class="content_head">
			<span class="write-border"> <hr> </span>
			<span class="cat_head" > सामाजिक सञ्जाल </span>
			<span class="left-border" > <hr> </span>
		</div>

		<div class="col-md-12">
			<div class="social-slider">
				<div class="owl-carousel owl-theme">
						 <?php
								$loop = new WP_Query(array(
									'post_type'=>'Social_Media',
									'post_status' => 'publish',
									'posts_per_page'=>12
									)
								);?>
							<?php while($loop->have_posts()): $loop->the_post();?>  
							<div class="item">
							
								<div class="card bg-light">
								<div class="social-image">
									<?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
								</div>
								<div class="social-title">
									<a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> 
									
								</div>
								<div class="social-text-1">
									<?php echo wp_trim_words( get_the_content(), 3, '...' );?>
								</div>
								</div>
							</div>
					
					<?php endwhile; wp_reset_query();?>  
					
				</div>
			</div>
		</div>
	</div>
</div>

</section>


<style>
	.social-mediapost{
		padding: 20px;
		background-color: #00aeef;
		color: #fff;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 35px;
		text-align: center;
		margin-top: 50px;
	}
	.social-margin{
		margin-top:50px;
		margin-bottom: 50px;
		background-color: #004e6b1f;
    	padding: 50px 0px;
	}
	.social-title{
		text-align: center;
		font-size: 20px;
		margin-top: 10px;
	}
	.social-title a{
		text-decoration: none;
		color: #004e6b;
		font-size: 20px;
		font-weight: 500;
	}
	.social-image img{
		    height: auto;
			width: auto;
			object-fit: fill;
	}
	.social-text-1{
		text-align: left;
    	padding: 3px;
	}
</style>
<script>
$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
