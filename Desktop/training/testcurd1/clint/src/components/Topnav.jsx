import React from 'react'
export default function Topnav() {
  return (
    <>

        <nav className="navbar bg-primary">
        <div className="container-fluid">
            <a className="navbar-brand" href="#">Navbar</a>

        <form class="d-flex" role="search">
            <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button className="btn btn-outline-success" type="submit">Search</button>

        </form>
        <div className="profile-image">
            <p> Profile</p>
        </div>
        </div>
        </nav>


    </>
  )
}
