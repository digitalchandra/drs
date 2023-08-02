<?php
get_header();
?>
<?php get_template_part('new_design/latest'); ?>
<?php get_template_part('new_design/news'); ?>

<!--card News end-->
<section>
  <div class="container">
	  <hr>
		<div class="row">
		  <div class="ads ads-control">
		  <?php dynamic_sidebar('ads2');?>
		</div>
		</div>
	<hr>
  </div>
</section>
<?php get_template_part('new_design/creation');?> 
<?php get_template_part('new_design/slide');?> 
<?php get_template_part('new_design/song');?> 
<?php get_template_part('new_design/newart');?> 

<?php get_template_part('new_design/analysis');?> 
<?php get_template_part('new_design/social');?> 
<?php get_template_part('new_design/art');?> 
<?php get_template_part('new_design/translate');?> 
<!-- <?php get_template_part('new_design/poem');?>  -->
<?php get_template_part('template-parts/children');?> 
<?php get_template_part('template-parts/more');?> 

<?php get_footer();?>