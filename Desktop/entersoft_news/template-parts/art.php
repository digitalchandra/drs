<!---Entreatment Start Here-->

<section>
  <div class="container">
    <div class="row">
      <div class="ads">
     <?php dynamic_sidebar('ads7');?>
    </div>
    </div>
  </div>
</section>

<div class="container-sm">
    <div class="row news_section_background">
		<div class="seperator">
        <ul class="sep-cat">
          		  <li class="name-cat-contrl"> <a href="<?php get_category_link('25');?>">   <?php echo get_cat_name('25');?></a></li>  
          <li class="line-control"> 
             <hr> </li>
      </ul>
      </div>
                   <?php
                    $category_name = get_cat_name('26');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=4&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="col-sm-3">
            <div class="card bg-dark text-white card-custom-margin">
         <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
              <div class="card-img-overlay card-img-background">
                  <h5 class="card-title card_coutom_title"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h5>
           
                  <?php /* <p class="card-text"><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo the_time();?></small></p> */?>
              </div>
            </div>
 
        </div>
        <?php endwhile; endif?>
        
      </div>
    </div>

<!---Entertement End Here-->