import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import banner from '../images/website.jpg'
import Slider from 'react-slick';
import banner2 from '../images/banenr.jpg'

export default function HomeSlider() {
    const [slider, setSlider] = useState()

    useEffect(()=>{
        let url =('https://ptccollection.com/wp-json/wl/v1/posts?per_page=3')
        axios.get(url).then((res)=>{
            setSlider(res.data)
        });
    },[])
    
    var settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
      };

  return (
    <>
      <Slider{...settings}> 
    {
        slider?.map((slider)=>{
            return(
                <>
                    <div className="slider">
                            <img src={slider.featured_image.large} alt="" className='img-fluid'/>
                          
                    </div>
        
                </>
            )
        })
    }
  </Slider>
    </>
  )
}
