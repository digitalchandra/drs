    <?php if (have_postes()):while(have_post()) : the_post();?>
            <div class="col-sm-3">
                <?php get_the_post_thumbnail('full', array('class'=>'img-fluid'));?>
                <h1> <?php the_title();?></h1>
                <?php the_content();?>
            </div>
    <?php endwhile; else: endif;?>