<?php get_header();?>
<div class="container-sm">
    <div class="row">
        <div class="col-md-6">
            <h2><?php the_title();?></h2>
            <?php the_content();?>
		<div class="quiz" >
			<div class="row">
				<div class="col-md-6 ">
					<div class="login-control">
						<h4>
						OFFICE LOGIN
						</h4>
							   <a href="http://rastrasewak.meshquiz.com/company/login" target="blank"> <button type="button" class="btn btn-sm btn-primary" disabled>Office Login</button> </a>

						</div>
					</div>
			
				<div class="col-md-6 ">
					<div class="login-control">
				<h4>
				TEACHER LOGIN
				</h4>
					   <a href="http://rastrasewak.meshquiz.com/teacher/login" target="blank"> <button type="button" class="btn btn-sm btn-warning" disabled>Teacher Login</button> </a>
				</div>
				</div>
			</div>
			
			
		</div>
        </div>

        <div class="col-md-6 ">
			<div class="login-control-1">
        <h4> Student Login / Register</h4>
        <a href="http://rastrasewak.meshquiz.com/login" target="blank"> <button type="button" class="btn btn-lg btn-success" disabled>TEST YOURSELF</button> </a>
            </div>
		</div>
    </div>
</div>


<?php get_footer();?>

