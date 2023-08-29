import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Slider from 'react-slick';

export default function HomeSlider() {
    const [slider, setSlider] = useState()

    useEffect(()=>{
        let url =('https://ptccollection.com/wp-json/wp/v2/slider')
        axios.get(url).then((res)=>{
            setSlider(res.data)
        });
    },[])
    
    var settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
      };

  return (
    <>
   {
       slider?.map((slider)=>{
           return(
               <>
               <Slider {...settings}>
                <div>
               
                    <p> {slider.title.rendered}</p>
                  
                    <img src='' />
                
                </div>
                
                </Slider>
              
               
               </>
           )
       })
   }
    </>
  )
}
