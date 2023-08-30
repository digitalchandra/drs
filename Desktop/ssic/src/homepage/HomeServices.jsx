import axios from 'axios'
import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'
import '../style/Style.css'

export default function HomeServices() {

    const [services, setServices] = useState()

    useEffect(()=>{
        let url=('https://ptccollection.com/wp-json/wp/v2/posts')
        axios.get(url).then((res)=>{
            setServices(res.data)
        })
    },[])

  return (
    <>
    <div className="services">
        <div className="container">
            
                <div className="services-title">
                    <h2> TOP DESTINATION </h2>
                    <p>Take Advantage of Our Top-Notch Student Services from Highly Qualified Education Counselors and Visa Expert Teams</p>
                </div>
                <div className="row">
                {
                    services?.map((services)=>{
                        return(
                            <>
                        
                            <div className="col-md-3">
                            <div class="card bg-dark-border text-white">
                                    <img src={services.fimg_url} alt="" className='img-fluid' />
                                <div class="card-img-overlay img-fornt">
                                    <div className="card-title-control">
                                     <h5 class="card-title">{services.title.rendered}</h5>
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
    </>
  )
}
