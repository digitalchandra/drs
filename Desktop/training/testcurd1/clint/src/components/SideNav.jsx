import React from 'react'
import { Link } from 'react-router-dom'


export default function SideNav() {
  return (
    <>

             <div className="accordion" id="accordionExample">
              <div className="accordion-item">
                <h2 className="accordion-header" id="headingOne">
                  <button className="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               
                  <strong> Dashboard</strong>
                  </button>
                </h2>
                  <div id="collapseOne" className="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div className="accordion-body">
                      <strong>
                     
                      <Link to="/"> Dashboard</Link>
                    
                      </strong>
                    </div>
                  </div>
              </div>

              <div className="accordion-item">
                <h2 className="accordion-header" id="headingTwo">
                  <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong> Category 1</strong>
                  </button>
                </h2>
                <div id="collapseTwo" className="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div className="accordion-body">
                 <ul>
                   <li> <Link to="/addpost"> Add new post</Link>
                  </li>
                  <li><Link to="/"> All Post </Link></li>
                 </ul>
                  </div>
                </div>
              </div>

              <div className="accordion-item">
                <h2 className="accordion-header" id="headingThree">
                  <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Category - 2
                  </button>
                </h2>
                <div id="collapseThree" className="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div className="accordion-body">
                    <strong>
                    <ul>
                      <li> <Link to="/addpost"> Add new post</Link>
                      </li>
                      <li><Link to="/"> All Post </Link></li>
                    </ul>
                    </strong>
                  </div>
                </div>
              </div>

              <div className="accordion-item">
                <h2 className="accordion-header" id="headingFour">
                  <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Site Setting
                  </button>
                </h2>
                <div id="collapseFour" className="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div className="accordion-body">
                    <stong>
                      <ul>
                        <li> <Link to={'/'}> Homepage </Link></li>
                        <li> <Link to={'/'}> Abou Us  </Link></li>
                        <li> <Link to={'/'}> Contact Us </Link></li>
                        <li> <Link to={'/'}> Footer </Link></li>
                        <li> <Link to={'/'}> Header </Link></li>

                      </ul>
                    </stong>
                  </div>
                </div>
              </div>

            </div>


    </>
  )
}
