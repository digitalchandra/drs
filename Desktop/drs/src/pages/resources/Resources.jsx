import React from 'react'
import './resources.css'
import Catbanner from '../../images/1.jpg'
import Header from '../../component/Header'
import Footer from '../../component/Footer'
import {CloudArrowDown, FilePdfFill} from 'react-bootstrap-icons'
export default function Resources() {
  return (
    <>
    <Header/>
        <div className="resources-banner">
            <div class="card text-white">
            <img class="card-img" src={Catbanner} alt="Card image"/>
                <div class="card-img-overlay destination-banner">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
      
        <section>

        <div className="container">
           <div className='resourcebox'>
            <div className="row">
                    <div className="col-md-10 ">
                        <div className="file">
                            <FilePdfFill/>
                            File Name 
                        </div>
                    
                    </div>
                    <div className="col-md-2">
                            <button className='btn btn-primary'><CloudArrowDown/> Download </button>
                    </div>
                </div>
           </div>
           <div className='resourcebox'>
            <div className="row">
                    <div className="col-md-10 ">
                        <div className="file">
                            <FilePdfFill/>
                            File Name 
                        </div>
                    
                    </div>
                    <div className="col-md-2">
                            <button className='btn btn-primary'><CloudArrowDown/> Download </button>
                    </div>
                </div>
           </div>
        </div>
            
        </section>
    <Footer/>
    </>
  )
}
