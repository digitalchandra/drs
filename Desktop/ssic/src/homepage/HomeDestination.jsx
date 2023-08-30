import React from 'react'
import '../style/Style.css'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios';
import { Link } from 'react-router-dom';

export default function HomeDestination() {
    const [destination, setDestination] = useState();

    useEffect(()=>{
        let url =('https://ptccollection.com/wp-json/wp/v2/posts');
        axios.get(url).then((res)=>{
            setDestination(res.data)
        })
    })

  return (
    <>
    <div className="destination">
        <div className="container">
            <div className="destination-home">
                <span className='destination-title'> Services </span>
                <p>Explore the best study destinations in the world! Learn all about the countries' 
                    top universities, scholarships, cost of living, post-study work rights and mor</p>
            </div>
            <div className="row">
                {
                    destination?.map((destination)=>{
                        return(
                            <>
                            <div className="col-md-3">
                                <div className="destination-card">
                                    <img src={destination.fimg_url} alt="" className='img-fluid' />
                                    <div className="des-card">
                                        <h5>{destination.title.rendered}</h5>
                                        <Link to={destination.link}> 
                                        <button className='btn btn-primary'> Learn More </button>
                                        </Link>
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
