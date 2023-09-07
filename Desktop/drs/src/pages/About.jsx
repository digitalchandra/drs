import React from 'react'
import Header from '../component/Header'
import Footer from '../component/Footer'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios'


export default function About() {
  const [about, setAbout] = useState([])

  useEffect(()=>{
    let url=('https://drs.edu.np/wp-json/wp/v2/aboutus/101')
    axios.get(url).then((res)=>{
      setAbout(res.data)
    })
  },[])


  return (
    <>
    <Header/>
    {
      about?.map((about)=>{
        return(
          <>
            <div className="about-banner">
            <div className="card">
              <img src={about.thumbnial} alt={about.title.rendered} className='img-fluid' />
              <div className="card-overlay">
                <div className="about-us">
                  <h5 className='card-title'> {about.title.rendered} </h5>
                </div>
              </div>
            </div>
            </div>
          </>
        )
      })
    }
  


    <Footer/>
    </>
  )
}
