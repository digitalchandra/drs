
<!--Second Section News End-->

<section>
  <div class="container">
    <div class="row">
      <div class="ads">
    <?php dynamic_sidebar('ads9');?>
    </div>
    </div>
  </div>
</section>
<!--News Section 2 end-->


<div class="clearfix"></div>


<!--Card News start form here-------------------------------------------------------------------->



<!--Card News start form here-------------------------------------------------------------------->
<div class="container">
    <div class="row news_section_background">
	<div class="seperator">
        <ul class="sep-cat">
         			  <li class="name-cat-contrl"> <a href="<?php get_category_link('26');?>">   <?php echo get_cat_name('26');?></a></li>  
          <li class="line-control"> 
             <hr> </li>
      </ul>
      </div>
    <?php
                    $category_name = get_cat_name('26');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=6&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>   
        <div class="col-md-3">
            <div class="card card-image-control-1">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?> 
            <div class="card-body-loksewa">
                <h5 class="card-title-control-loksewa"> <a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php /*<?php echo wp_trim_words(get_the_title(), 3);?>  */?></a> </h5>
               <?php /*<p class="card-text"><?php echo wp_trim_words( get_the_content(), 7, '...' );?></p>*/?>
                <p class="card-text"><small class="text-muted">
               <?php /* <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?> */?>
                </small></p>
            </div>
            </div>
        </div>
        <?php endwhile; endif?>
    </div>
</div>
