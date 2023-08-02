<section>
<div class="container">
	<div class="row">
		<div class="slide-control">
				    <div class="owl-carousel owl-theme">
						  <?php
                    $category_name = get_cat_name('6');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=10&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
						<div class="item slide-item style="width:350px"">

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
									<a href="<?php echo get_category_link('6');?>">
										<?php echo get_cat_name('6');?>
									</a>
								</h4>
							</div>
					
						</div>
						<div class="poem-title-2">
							<a href="<?php the_permalink();?>"> <?php the_title();?>	 </a>
						</div>
						<span class="line">
							<hr>
						
						</span>
						<div class="slide-content widget widget_block widget_text">
							<?php echo get_field('poem');?>

						</div>
						</div>
					<?php endwhile; endif;?>
			
					</div>
			
		</div>
	</div>
	</div>
</section>

<style>
	.slide-control{
		padding: 20px;
		background-color: #006185;
		margin-top: 20px;
	}
	.slide-item{
		background-color: #f5f5f5;
    	padding: 0px;
		height: 340px;
	}
	.slide-title{
		width: 298px;
   		margin-top: 20px;
    	font-size: 20px;
	}
	.slide-title a{
		font-size: 20px;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
		top: 30%;
    	position: relative;
	}
	.slide-title h5 a{
		color: #00aeef;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		font-size: 25px;
	}
	.owl-next{
		background-color: #00aeef;
		width: 30px;
		height: 30px;
		color: #fff;
	}
	.owl-prev{
		background-color: #00aeef;
		width: 30px;
		height: 30px;
		color: #fff;
	}
	.slide-col{
		display: flex;
		gap:10px;
		padding: 0px 0px 0px 10px;
	}
	.poem-auth{
		width: 100px;
		margin-top: 20px;
		justify-content: center;
		display: flex;
	}
	.poem-auth a{
		margin-left: 10px;
		font-size: 20px;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
		
	}
	.poem-auth img{
		height: 100px;
		width: 100px !important;
		object-fit: cover;
		border: 1px solid #006185;
		border-radius: 100%;
	}
	.slide-content{
		width: auto;
		padding: 10px 40px;
		margin-top: 0px;
		font-size: 17px;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 400;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
	}
	.poem-tag{
		
		margin-top: 20px;
	}
	.poem-tag h4 a{
		color: #fff;
		font-size: 18px;
		text-decoration:none;

	}
	.poem-tag h4{
		background-color: #006185;
		padding: 5px 10px;
		color:#fff;
	}
	.song-card-1{
		height:325px;
		
	}
	.poem-title-2 {
		text-align:center;
		margin-top: 20px;
	}
	.poem-title-2 a{
		padding: 0px 25px;
		font-size: 25px;
		text-decoration: none;
		overflow: hidden;
		cursor: pointer;
		font-weight: 600;
		font-family: 'Mukta', sans-serif;
		color: #004e6b;
	}
	.line{
		display:flex;
		justify-content:center;
	}
	.line hr{
		width:70%;
		border: 1px solid #006185;
	}
</style>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})


</script>