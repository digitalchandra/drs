import React from 'react'
import './Services.css'
import BannerServices from '../../images/1.jpg'
import ServicesImg from '../../images/card-1.png'
import Header from '../../component/Header';
import Footer from '../../component/Footer'
import { useState } from 'react';
import { useEffect } from 'react';
import axios from 'axios';

export default function Services() {
    const [services, setServices] = useState()

    const [cat, setCat] = useState()


    useEffect(()=>{
        let url=('https://drs.edu.np/wp-json/wp/v2/posts?categories=4')
        axios.get(url).then((res)=>{
            setServices(res.data)
        })
    })

    useEffect(()=>{
        let url=('https://drs.edu.np/wp-json/wp/v2/categories?slug=abroad-study')
        axios.get(url).then((res)=>{
            setCat(res.data)
        })
    })

  return (
    <>
    <Header/>
    <div className="banner">
        
        <div class="card text-white">
        <img class="card-img" src={BannerServices} alt="Card image"/>
            <div class="card-img-overlay destination-banner">
                <div className="aborad">
                    {
                        cat?.map((cat)=>{
                            return(
                                <>
                                  <h5 class="abroad-card-title"> {cat.name}  </h5>
                                    <p class="abroad-short">{cat.description}</p>
                                </>
                            )
                        })
                    }
                   
                    
                </div>
            </div>
        </div>
    
    </div>

    <div className='destination-section'>
        <div className="container">
            <div className="row">
                {
                    services?.map((services)=>{
                        return(
                            <>
                                 <div className="col-md-3">
                                    <div class="card text-white cat-destination ">
                                    <img class="card-img" src={services.fimg_url} alt={services.title.rendered}/>

                                        <div class="card-img-overlay destination-banner">
                                            <div className="desti-country">
                                                <h5 class="card-title"> {services.title.rendered}</h5>
                                            </div>
                                    
                                        </div>
                                    </div>
                                </div>
                            </>
                        )
                    })
                }
           

      
         
                
            </div>
        </div>
    </div>


    <Footer/>
    </>
  )
}
