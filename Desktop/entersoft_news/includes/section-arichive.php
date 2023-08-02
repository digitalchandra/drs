<section>
    <div class="container-sm">
        <div class="row">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="col-sm-3">
            <?php echo the_title();?>
            <?php echo the_content();?>
        </div>
        <?php endwhile; else: endif;?>
        </div>
    </div>
</section>


