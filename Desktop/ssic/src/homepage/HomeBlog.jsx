import axios from 'axios';
import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'

export default function HomeBlog() {
    const [blog, setBlog] = useState();

    useEffect(()=>{
        let url =('https://ptccollection.com/wp-json/wp/v2/posts')
        axios.get(url).then((res)=>{
            setBlog(res.data)
        })
    })
  return (
    <>
    <div className="blog">
        <div className="container">
            <div className='blog-title'>
                <h1>LATEST BLOGS</h1>
                <p>Stay Ahead with the Best - Read Our Latest Blogs Today</p>

            </div>
            <div className="row">
                
                        {
                            blog?.map((blog)=>{
                                return(
                                    <>
                                    <div className="col-md-4">
                                        <div className="blog-back">
                                            <div className="blog-card">
                                                <img src={blog.fimg_url} alt="" className='img-fluid' />
                                                 
                                            </div>
                                            <h5> {blog.title.rendered} </h5>
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
