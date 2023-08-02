
<section>
  <div class="container">
    <div class="row">
      <div class="ads">
     <?php dynamic_sidebar('ads5');?>
    </div>
    </div>
  </div>
</section>

<!--3 Colum Category Start-->

<section>
  <div class="container-sm main_n">
    <div class="row news_section_background">

<div class="col-lx-4 col-md-4 col-sm-4 mb-auto ">
  <!-- Border Start-->

  <div class="seperator">
        <ul class="sep-cat">
          <li class="name-cat-contrl"> <a href="<?php get_category_link('13');?>">  <?php echo get_cat_name('13');?></a></li>  
          <li class="line-control"> 
             <hr> </li>
      </ul>
      </div>

  <!--Border end-->
  
        <?php
                    $category_name = get_cat_name('13');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=5&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="small-card-news">

            <div class="card-image-control">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
            </div>
            <div class="card-content-control">
              <h5 class="card-title-control"> <a href="<?php the_permalink(); ?>"> 
				  <?php the_title();?>  </a> </h5>
               <p><?php echo wp_trim_words( get_the_content(), 7, '...' );?> </p>
         <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
            </div>
        </div>
        <?php endwhile; endif?>
</div>


<div class="col-lx-4 col-md-4 col-sm-4 mb-auto ">
  <!-- Border Start-->
  <div class="seperator">
        <ul class="sep-cat">
                		  <li class="name-cat-contrl"> <a href="<?php get_category_link('14');?>">  <?php echo get_cat_name('14');?></a></li>  
          <li class="line-control"> 
             <hr> </li>
      </ul>
      </div>

  <!--Border end-->
  
        <?php
                    $category_name = get_cat_name('14');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=5&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="small-card-news">

            <div class="card-image-control">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
            </div>
            <div class="card-content-control">
              <h5 class="card-title-control"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 3);?>  */?></a> </h5>
             <p><?php echo wp_trim_words( get_the_content(), 7, '...' );?> </p>
            <?php /*  <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
            </div>
        </div>
        <?php endwhile; endif?>
</div>

        
<div class="col-lx-4 col-md-4 col-sm-4 mb-auto ">
  <!-- Border Start-->
  <div class="seperator">
        <ul class="sep-cat">
                 		  <li class="name-cat-contrl"> <a href="<?php get_category_link('21');?>">   <?php echo get_cat_name('21');?></a></li>  
          <li class="line-control"> 
             <hr> </li>
      </ul>
      </div>

  <!--Border end-->
  
        <?php
                    $category_name = get_cat_name('21');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=5&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="small-card-news">

            <div class="card-image-control">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
            </div>
            <div class="card-content-control">
              <h5 class="card-title-control"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 3);?>  */?></a> </h5>
             <p><?php echo wp_trim_words( get_the_content(), 7, '...' );?> </p>
             <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
            </div>
        </div>
        <?php endwhile; endif?>
</div>


    </div>
  </div>
</section>
<!--3 Colum Category end-->