<footer class="footer">

	
      <section>
        <div class="container-sm">
            <div class="row">
              <div class="col-sm-4 footer-info">
                <h4>सम्पर्क</h4>
				  <?php dynamic_sidebar('footer-logo');?>
                  <?php dynamic_sidebar('footer-contact');?>
              </div>  

              <div class="col-sm-4 footer-info">
                <h4> सामाजिक सञ्जाल  </h4> 
               <?php dynamic_sidebar('footer-econtact');?>
				  <div class="social-n">
					  <span class="social-media-1">
					   <a href="https://www.facebook.com/niroopanpage" target="_blank">
						 <i class="fa fa-facebook-square" aria-hidden="true"> </i> 
				  		</a>
					  </span>
					  <span class="social-content">
					  	<span class="social-content"> Like us on Facebook </span>
					  </span>
					   
				  </div>
				    <div class="social-n">
					  <span class="social-media-1">
					     <a href="https://twitter.com/niroopan_nepal" target="_blank">
							 <i class="fa fa-twitter-square" aria-hidden="true"></i> 
				 		 </a>
				  		
					  </span>
					  <span class="social-content">
					  	<span class="social-content"> Follow us on Twitter </span>
					  </span>
					   
				  </div>
				    <div class="social-n">
					  <span class="social-media-1">
					       <a href="https://www.instagram.com/niroopan_nepal/" target="_blank"> 
							 <i class="fa fa-instagram" aria-hidden="true"></i>
				  			</a>
					  </span>
					  <span class="social-content">
					  	<span class="social-content"> Follow us on Instagram </span>
					  </span>
					   
				  </div>
				    <div class="social-n">
					  <span class="social-media-1">
					   	 <a href="https://www.youtube.com/" target="_blank">
							 <i class="fa fa-youtube-play" aria-hidden="true"></i>
						  </a>
					  </span>
					  <span class="social-content">
					  	<span class="social-content"> Subscribe on Youtube</span>
					  </span>
					   
				  </div>
				           
              </div>
		
			<div class="col-sm-4 footer-info">
                <h4>  मेनु </h4> 
                       <div class="socialicon">
						   <?php dynamic_sidebar('footer_menu');?>
             
                     </div>
				<div class="site-editor">
					   <?php dynamic_sidebar('site-editor');?>
				</div>
              </div>
          
            </div>
        </div>
      </section>

      <section class="footer-copyright">
        <div class="container">
          <div class="row">
            <hr>
            <div class="col-lg-12">
                <div class="copyright">
					<?php dynamic_sidebar('');?> <?php echo date('Y'); ?> www.niroopan.com सर्वाधिकार सुरक्षित   
                    
                </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
</body>

<?php wp_footer();?>

</html>