<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	
<!--     <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php wp_head();?>
  
</head>


<body>
    <div class="container-sm">
        <div class="row"> 
          <div class="ads">
            <?php if (is_active_sidebar('ads')):?>
                <?php dynamic_sidebar('ads');?>
            <?php endif; ?>

          </div>

        </div>
    </div>
    <section>
        <div class="container-sm">
            <div class="logo-image">
				<a href="<?php echo get_site_url();?>">
                      <?php 
                                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                   
                                  if ( has_custom_logo() ) {
                                      echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                  } else {
                                      echo '<h2>' . get_bloginfo('name') . '</h2>';
                                  }
                
                ?>
				</a>
				
            </div>
        </div>
    </section>
    <!--Social Top head -->
   <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="nepali-date">
                         <?php dynamic_sidebar('npdate');?>
                    </div>
                </div>
                   <div class="col-md-6">
                    <div class="nepali-date">
                          <div class="topsocial">
                         <a href="https://www.facebook.com/niroopanpage" target="_blank">
							 <i class="fa fa-facebook-square" aria-hidden="true"> </i>
						</a>
                         <a href="https://twitter.com/" target="_blank">
							 <i class="fa fa-twitter-square" aria-hidden="true"></i> 
						</a>
                         <a href="https://www.instagram.com/" target="_blank"> 
							 <i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
                         <a href="https://www.youtube.com/" target="_blank">
							 <i class="fa fa-youtube-play" aria-hidden="true"></i>
						</a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--Social Top head end -->
    <section>
		<style>
        .logo-image-1 {
    background-color: white; /* Set the background color to white */
    background-size: contain;
}

    
    </style>
         <nav id="navbar_top" class="navbar  navbar-expand-lg navbar-dark menu-background">
              <div class="container-fluid">
                   <div class="logo-image-1">
						<a href="<?php echo get_site_url();?>">
							  <img class="shadowfilter" src="https://niroopan.com/wp-content/uploads/2023/07/niroopan-logo-new.png" alt="Niroopan official png logo white color"/>
						</a>
					</div>
           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                      wp_nav_menu(array(
                          'theme_location' => 'main-menu',
                          'container' => false,
                          'menu_class' => 'ms-auto menu_margin',
                          'fallback_cb' => '__return_false',
                          'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                          'depth' => 6
                          
                      ));
                    ?>

               
<!--                   <div class="search-box">
				
                       <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    
                  </div>        -->
                </div>
              </div>
            </nav>
		
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                       <div class="collapse input-group mb-3"  id="collapseExample">
            	<?php dynamic_sidebar('search');?>
						   
						  
                    </div> 
                  

                  
                </div>
                
            </div>
        </div>
    </section>
<script>
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 350) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
	/// Copypest Disable 

// $(document).ready(function() {
//     $(window).on("contextmenu",function(e){
//        return false;
//     }); 
// }); 
//  document.onkeydown = function (e) {
//     e = e || window.event;//Get event
//     if (e.ctrlKey) {
//         var c = e.which || e.keyCode;//Get key code
//         switch (c) {
//             case 83://Block Ctrl+S
//             case 87://Block Ctrl+W --Not work in Chrome
//             case 73://Block Ctrl+I
//             case 67: //Block Ctrl+C
//                 e.preventDefault();     
//                 e.stopPropagation();
//             break;
//         }
//     }
// };
// 
// 

	function hidediv(){
		document.getElementsByClassName("wp-widget-group__inner-blocks").style.visibility = "hidden";
	}
	setTimeout("hidediv()",1000)
	

</script>
