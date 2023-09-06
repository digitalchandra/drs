import React from 'react'
import './Category.css' 
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios' 

export default function Destination() {
  const [destination, setDestination]=  useState()
   
  useEffect(()=>{
    let url=('https://drs.edu.np/wp-json/wp/v2/posts?categories=3')
    axios.get(url).then((res)=>{
      setDestination(res.data)
    })
  },[])

  return (
    <>
    <div className=" destination-home">
      <div className="destination-1">
        
        <div className="container">
          <span className='destionation-t'> DESTINITION </span>
          <div className="row">
            {
                destination?.map((destination)=>{
                  return(
                    <>
                      <div className="col-md-3 dest-card">
                        <div className="card text-white dest-img">
                          <img src={destination.fimg_url} alt="" />
                            <div className="card-img-overlay img-back destination-banner ">
                            <h4 class="card-title"> {destination.title.rendered}  </h4>
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
      
    </div>
    </>
  )
}
