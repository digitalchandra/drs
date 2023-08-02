<!---Main News start-->
    <section>
      <div class="container-sm">
        <div class="row news_section_background">
			<!-- Border Start-->
			<div class="seperator">
				<ul class="sep-cat">
				  <li class="name-cat-contrl"> <a href="<?php get_category_link('5');?>">   <?php echo get_cat_name('5');?></a></li> 
					
				  <li class="line-control"> 
					 <hr> </li>
			  </ul>
			  </div>
		
 		 <!--Border end-->
 <?php
                    $category_name = get_cat_name('5');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>   
           
          <div class="col-lg-6 top_div col-12 ">
          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?> </a>
            <h1 class="main_new_heading"> <a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h1>
			
          </div>
        <?php endwhile; endif;?>
        
 
          <div class="col-lg-6 col-12 ">
            <div class="row">
                 <?php
                    $category_name = get_cat_name('4');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=5&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>   
              <div class="col-md-6 nrn-control">
                  
              <a href="<?php the_permalink(); ?>">  <?php the_post_thumbnail('full', array('class' => 'section-image'));?> </a>
                <h3 class="news_medium_header"> <a href="<?php the_permalink();?>"><p >
					<?php
				echo wp_trim_words( get_the_title(), 7, '...' );
				?>
			  </p> </a> </h3>
               <?php /*  <ul>
                     <li> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></li>
                 </ul> */?>
              </div>
            <?php endwhile; endif;?>
            

            </div>
          </div>
        </div>
      </div>
      
    </section>

<!--Main News End-->

<!-------------Main News Category---------->
<div class="container-sm">
    <div class="row">

        <div class="col-lg-12">
 <?php
                    $category_name = get_cat_name('22');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>   
            <div class="headline">
                <h1 class="main-headline-news"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </h1>
                <div class="auth_time">
                    <ul>
<!--                         <li> <i class="fa fa-user" aria-hidden="true"></i> <?php echo get_the_author_nickname();?></li>  &nbsp; &nbsp; -->
                       <?php /* <li> <i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo the_time();?></li> */?>
                    </ul>
                </div>

                <div class="clearfix"></div>
               <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full', array('class' => 'img-fluid main-news-image'));?></a> 
            </div>
        
        <?php endwhile; endif;?>
        </div>

        </div>
        
    </div>

		<div class="main-news-control-1 ">
			<div class="container-sm ">
				<div class ="row headline">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-md-7">
				<?php
                    $category_name = get_cat_name('22');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=1&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>   
								<div class="card bg-dark text-white news-news-control">
								     <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full', array('class' => 'img-fluid main-news-image'));?></a>
								  <div class="card-img-overlay card-img-background">
									<h3 class="card-title  card_coutom_title"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h3>
								
								  </div>
								</div>
							<?php endwhile; endif;?>
							</div>
							<div class="col-md-5">
							<?php
										$category_name = get_cat_name('22');
										$category_id = get_cat_ID($category_name);
										$my_query = new WP_Query("showposts=4&cat=$category_id&orderby=ID&order=DASC");
										if($my_query->have_posts() ) :
										while ($my_query->have_posts()) : $my_query->the_post();?>
							<div class="small-card-news news-second-control-1">

								<div class="card-image-control">
								<?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
								</div>
								<div class="card-content-control">
								  <h5 class="card-title-control"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 3);?>  */?></a> </h5>
								 <?php /* <p><?php echo wp_trim_words( get_the_content(), 7, '...' );?> </p>*/?>
								 <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
								</div>
							</div>
							<?php endwhile; endif?>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						  <li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
							 <i class="fa fa-bar-chart" aria-hidden="true"></i> लोकप्रिय
							  </button>
						  </li>
	
						  <li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
							  <i class="fa fa-spinner" aria-hidden="true"></i> 
								ताजा
							  </button>
						  </li>
						</ul>
						
						<div class="tab-content" id="pills-tabContent">
						  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							   <?php dynamic_sidebar('popularpost');?>
							</div>
						
						  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							 <?php dynamic_sidebar('resentpost');?>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		


<!------------------- Headline end --------------------------------------------------------->