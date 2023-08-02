<div class="container">
	    <div class="team-container">
        <!-- Team Member 1 -->
			 <?php
				$loop = new WP_Query(array(
					'post_type'=>'Team',
					'post_status' => 'publish',
					'posts_per_page'=>12
					)
				);?>
			<?php while($loop->have_posts()): $loop->the_post();?> 
				<div class="team-member">
				   <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
					<h3>	<a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </h3>
					<p>Role / Position</p>
					<p>Brief introduction or description.</p>
				</div>
		<?php endwhile; wp_reset_query();?>  
        <!-- Team Member 2 -->
			
        <!-- Add more team members here -->
        <!-- Remember to adjust the paths to the images and customize the information for each member -->
    </div>
</div>

<style>

        /* Main Content Styles */
        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }

        .team-member {
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .team-member img {
            max-width: 100%;
            border-radius: 50%;
        }

        .team-member h3 {
            margin-top: 10px;
        }

        .team-member p {
            font-size: 14px;
        }


   

</style>