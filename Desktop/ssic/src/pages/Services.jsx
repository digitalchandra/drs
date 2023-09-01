import React from 'react'
import Header from '../components/Header' 
import Footer from '../components/Footer'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios'
import { Link } from 'react-router-dom'

export default function Services() {
   
  const [services, setServices] = useState()

  useEffect(()=>{
    let url=('https://ptccollection.com/wp-json/wp/v2/posts?per_page=10');
    axios.get(url).then((res)=>{
      setServices(res.data)
    })
  })

  return (
    <>

    <Header/>
    <div className="cat-banner">
      <div className="cat-banner-title">
            <h3> Category Title</h3>
      </div>
         
    </div>

     <div className="container">
        <div className="row">
          {
            services?.map((services)=>{
              return(
                <>
                 <div className="col-md-3 services-cat-card ">
                  <div class="card text-white cat-control">
                    <img class="card-img" src={services.fimg_url} alt="Card image" className='img-fluid' />
                    <div class="card-img-overlay cat-over-image">
                     <Link to={services.id}>  <h5 class="card-title"> {services.title.rendered} </h5></Link>
                      
                    </div>
                  </div>
                  </div>
                </>
              )
            })
          }
     
        </div> 
      </div>   
        
    <Footer/>
    </>
  )
}
