import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'
import Header from '../components/Header'
import Footer from '../components/Footer'
import axios from 'axios'

export default function SingleServices() {
const [content, setContent] = useState();

useEffect(()=>{
    let url = ('');
    axios.get(url).then((res)=>{
        setContent(res.data)
    })
},[])

  return (
    <>
    <Header/>
    <div className="singlebanenr">

    </div>
    <div className="container">
        <div className="row">
            <div className="col-md-2">

            </div>
            <div className="col-md-2">
              
              </div>
        </div>
    </div>
    <Footer/>
    </>
  )
}
