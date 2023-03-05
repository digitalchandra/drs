import React from 'react'
import './AdminNav.css';
import { Link } from "react-router-dom";


export default function AdminNav() {
  return (
    <>
    <ul className="list-group">
            <li className="list-group-item list-group-item-action list-group-item-primary">
              <Link to="/"> <i class="fa-solid fa-grip-dots"></i> Dashboard  </Link> 
            </li>
            <li className="list-group-item list-group-item-action list-group-item-primary">
                <Link to="/post"> <i class="fa-solid fa-pen"></i> Add New Post </Link> 
            </li>
            <li className="list-group-item list-group-item-action list-group-item-primary">
              <Link to="/post"> <i class="fa-solid fa-gear"></i> Site Setting </Link> 
            </li>

    </ul>
    </>
  )
}
