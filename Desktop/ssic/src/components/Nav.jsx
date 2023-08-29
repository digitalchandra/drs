import React from 'react'
import { useState } from 'react'
import { useEffect } from 'react'
import axios from 'axios';
import { Link } from 'react-router-dom';
import '../style/Style.css'
export default function Nav() {
    const [nav, setNav]= useState();

    useEffect(()=>{
        let url = ('https://ptccollection.com/wp-json/wp/v2/menu')
        axios.get(url).then((res)=>{
            setNav(res.data)
        });
    },[])


  return (
    <>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {
                    nav?.map((nav)=>{
                        return(
                            <>
                             <li class="nav-item">
                                <Link class="nav-link active" to="/services" aria-current="page" href="#">{nav.title}</Link>
                            </li>
                            </>
                        )
                    })
                
                }
               

            </ul>

            </div>
        </div>
        </nav>
    </>
  )
}
