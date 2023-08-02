<?php /* Custom Search*/
get_header()?>

<?php 
if($_GET['search_text'] && !empty($_GET['search_text']))
{
    $text= $_GET['search_text'];
}
if($_GET['type'] && !empty($_GET['type']))
{
    $type= $_GET['type'];
}
?>

<div class="container-sm">
    <div class="row">
        <?php $arg=get_page('1920');?>
        <?php
        $args= array(
            'post_type' => $type,
            'posts_per_page'=> -1,
            's'=> $text
        );
        
        $query = new WP_Query($args);
        while($query -> have_posts()): $query -> the_post();
        ?>
        <div class="post clearfix">
          <h5> <?php get_the_title();?></h5>  
            <strong>
                <?php 
                if(get_post_type() == 'post') {echo 'Post';} ?>
            </strong>
        </div>

    <?php endwhile; wp_reset_query();?>
    </div>
</div>

<?php get_footer();?>