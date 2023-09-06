import React from 'react'
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Slider from "react-slick";
import Banner from '../../images/world.png'
import Banner2 from '../../images/website2.jpg'
import Banner3 from '../../images/3.jpg'
export default function Silde() {

  var settings = {
    dots: true,
    infinite: true,
    autoplay : true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1

  };

  return (
  <>
    <Slider {...settings}>
          <div className="div">
             <img src={Banner2} alt="" className='img-fluid' />
          </div>
          <div className="div">
             <img src={Banner} alt="" className='img-fluid' />
          </div>
          <div className="div">
              <img src={Banner3} alt="" className='img-fluid' />
          </div>
   </Slider>

  </>
  )
}
