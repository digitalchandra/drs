
    <div class="container-sm">
        <div class="row"> 
          <div class="ads">
              <?php dynamic_sidebar('ads2');?>
          
          </div>
        </div>
    </div>
<section>
<div class="container">
	<div class="row">
		          <!-- Border Start-->
       <div class="creative">
        <ul class="creative-ul">
            <li class="creative-contrl"> <a href="<?php get_category_link('5');?>">   
				<?php echo get_cat_name('5');?></a>
				<i class="fa fa-angle-double-down" aria-hidden="true"></i>
			</li>  

      	</ul>
      </div>
          <!--Border end-->
	</div>
	 </div>
</section>


<section>
  <div class="container main_n">
    <div class="row news_section_background">

    <div class="col-lx-6 col-md-6 col-sm-6 mb-auto ">
          <!-- Border Start-->
          <div class="seperator">
        <ul class="sep-cat">
                  		 <li class="name-cat-contrl"> <a href="<?php get_category_link('10');?>">   <?php echo get_cat_name('10');?></a></li>  
          <li class="line-control"> 
             <hr> </li>
      </ul>
      </div>
          <!--Border end-->
           <?php
                    $category_name = get_cat_name('10');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=4&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="small-card-news">
            <div class="card-image-control">
               <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> </a>
            </div>
            <div class="card-content-control">
                <h5 class="card-title-control"><a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 7);?>*/?>  </a></h5>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 15, '...' );?> </p>
               <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
            </div>
        </div>
        <?php endwhile; endif?>
  </div>

  <div class="col-lx-6 col-md-6 col-sm-6 mb-auto ">
            <!-- Border Start-->

             <div class="seperator">
              <ul class="sep-cat">
                        		  <li class="name-cat-contrl"> <a href="<?php get_category_link('42');?>">   <?php echo get_cat_name('42');?></a></li>  
                <li class="line-control"> 
                  <hr> </li>
            </ul>
            </div>
            <!--Border end-->
           <?php
                    $category_name = get_cat_name('42');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=4&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="small-card-news">
            <div class="card-image-control">
              <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> </a>
            </div>
            <div class="card-content-control">
                 <h5 class="card-title-control"><a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 7);?>*/?>  </a></h5>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 15, '...' );?> </p> 
               <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
            </div>
        </div>
        <?php endwhile; endif?>
  </div>


    </div>
  </div>
</section>
<!--tow Colum Category End-->