<style>
.slider-wrap{
    position: relative;
    overflow: hidden;
    height: 300px;
}
.main-slider{
    position: absolute;
    /* width: 175%;
    left: 0; */
    display: flex;
    align-items: start;
    justify-content: start;
    left: 0;
    top: 0;
    transition: 0.4s  ease-out;
}
.item{
    width: 332px;
    display: inline-block;
    position: relative;
    height: 300px;
    background-color: aqua;
    border: 1px solid red;
    
}

.text{
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    font-size: 30px;
    display: inline-block;
   
}
.text>img{
		height: 250px;
		width: 300px;
		object-fit:cover;
	}
.btn-area{
    position: absolute;
    left: 50%;
    top: 50%;
}
.slider-control{
    
    border: none;
    background-color: royalblue;
    padding: 5px;
    height: 50px;
    width: 50px;
    color: #fff;
    font-size: 25px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.4se;
    border-radius: 5px;

}
.slider-control:hover{
    background-color: rgb(0, 58, 231);
}


</style> 
<div class="container">
	
	<div class="slider-wrap" item-display-desktop="4", item-display-tablat="3", item-display-mobile="1" >
            <div class="main-slider" id="main-slider">
				  <?php
                    $category_name = get_cat_name('6');
                    $category_id = get_cat_ID($category_name);
                    $my_query = new WP_Query("showposts=5&cat=$category_id&orderby=ID&order=DASC");
                    if($my_query->have_posts() ) :
                    while ($my_query->have_posts()) : $my_query->the_post();?>
						<div class="item">
							<div class="text"> 
					
									<?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-start'));?> 
									<div class="card-tem">
										
										<h5 class="custom-card-title">
											 <?php the_title();?>
										</h5>
									</div>
			
							</div>
						</div>
				<?php endwhile; endif;?>
                
    
            </div>
            <div class="btn-area">
                <button type="button" class="slider-control" onclick="prev()">
                    <i class="fa-solid fa-angle-left"></i> 
                </button>
                <button type="button" class="slider-control" onclick="next()"> 
                    <i class="fa-solid fa-angle-right"></i> 
                </button>
            </div>
    
        </div>
</div>
<script>
        var mainSlider = document.getElementById('main-slider');
        var item = mainSlider.getElementsByClassName('item');

        function next(){
            mainSlider.append(item[0]);
        }
        function  prev(){
            mainSlider.prepend(item[item.length-1]);
        }
      
	
</script>