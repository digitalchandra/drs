import React from 'react'
import './Category.css'
import ClintImage from '../../images/card-1.png'
import { StarFill} from 'react-bootstrap-icons'
export default function Clint() {
  return (
    <>
    <div className="container">
        <div className='clint-title'> What Our Clint Says</div>
        <div className="clint-review">
            <div className="row">
                <div className="col-md-4">
                    <div className='review-box'> 
                    <div className="clint-name">
                        <div className="profile">
                            <img src={ClintImage} alt="" />
                        </div>
                        <div className="clint-name">
                            <span className='name-clint'> Name of the Clint </span>
                        </div>
                     
                    </div>
                    <div className="clint-says">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        </p>
                        <div className='review'>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                        </div>
                    </div>
                    </div>
                </div>
                <div className="col-md-4">
                <div className='review-box'> 
                    <div className="clint-name">
                        <div className="profile">
                            <img src={ClintImage} alt="" />
                        </div>
                        <div className="clint-name">
                            <span className='name-clint'> Name of the Clint </span>
                        </div>
                    </div>
                    
                    <div className="clint-says">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        </p>
                        <div className='review'>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                        </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-4 ">
                <div className='review-box'> 
                    <div className="clint-name">
                        <div className="profile">
                            <img src={ClintImage} alt="" />
                        </div>
                        <div className="clint-name">
                            <span className='name-clint'> Name of the Clint </span>
                        </div>
                     
                    </div>
                    <div className="clint-says">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        </p>
                        <div className='review'>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                            <StarFill/>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
       
    </div>
    </>
  )
}
