import React from 'react'
import AdminNav from '../Navigation/AdminNav'
import TopNav from '../Navigation/TopNav'
import Allpost from './Allpost'
export default function Dashboard() {
  return (

    <div className="fluid">
      <TopNav/>
      <div className="container-fluid">
      <div className="row">
        <div className="col-lg-2 drawer">
          <AdminNav/>
        </div>
        <div className="col-lg-10">
        <Allpost/>
        </div>
      </div>
      </div>
    </div>

  )
}
