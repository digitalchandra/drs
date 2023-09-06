import React from 'react'
import './Blog.css'
import Header from '../../component/Header'
import Footer from '../../component/Footer'
import Testbanner from '../../images/2.jpg'
import {ClockHistory} from 'react-bootstrap-icons'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios'

export default function Blog() {

        const [blog, setBlog] = useState()

        useEffect(()=>{
            let url=('https://drs.edu.np/wp-json/wp/v2/posts?categories=6')
            axios.get(url).then((res)=>{
                setBlog(res.data)
            
            })
        },[])

  return (

    <>
    <Header/>

        <div className="blog-banner">
            <div class="card text-white">
            <img class="card-img" src={Testbanner} alt="Card image"/>
                <div class="card-img-overlay destination-banner">
                    <div className="aborad">
                        <h5 class="abroad-card-title"> Latest Update </h5>
                        <p class="abroad-short">Find the our gureenty Cources about differet Test Preparation</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div className="container">
            <div className="row">
                {
                    blog?.map((blog)=>{
                        return(
                            <>
                                <div className="blog-content">
                                    <div className="blog-img">
                                        <img src={blog.fimg_url} alt={blog.title.rendered} className='img-fluid' />
                                    </div>
                                    <div className="blog-conent">
                                    
                                        <h3> {blog.title.rendered} </h3>
                                        <span> <ClockHistory/> Latest Update: {blog.modified}</span>
                                        <p>
                                                {blog.excerpt.rendered}
                                        </p>
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
