import React from 'react'
import {Facebook, Tiktok, Youtube} from 'react-bootstrap-icons'
export default function Footer() {
  return (
    <>
       <div className="footer">
         <div className="container">
          <div className="row">

            <div className="col-md-4">
                <div className="footer-info">
                  <h5>
                    Siba Sankar Cunsultency
                  </h5>
                  <p>Address: </p>
                  <p>Contact: </p>
                  <p> Email: </p>
                </div>
            </div>
            <div className="col-md-4">
                <div className="imp-link">
                    <h5>
                    Important Link 
                    </h5>
                </div>
            </div>
            <div className="col-md-4">
                <div className="social">
                  <h5> Connect With Social Media</h5>
                  <Facebook/> <Tiktok/> <Youtube/>
                </div>
            </div>
          </div>

         </div>
     
       </div>
       <div className="copy-right">
           <p> Copy Right content Here</p>
         </div>
    </>
  )
}
