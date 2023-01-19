import React from 'react'
import { useState, useEffect } from 'react'
import axios from 'axios';
import '../pages/Dashboard.css'
import Topnav from '../components/Topnav';
import SideNav from '../components/SideNav';
import { Link } from 'react-router-dom';

export default function Dashboard() {
    const [item, setItem] =useState([]);
    const [isLoading, setLoading] = useState();
    const [isError, setError] = useState();

    useEffect(()=>{ 

    const loadItems = async()=>{
          try{
            const items = await axios.get("http://localhost:4000/api/items")
            setItem(items.data.reverse());
            setLoading(false)
          }catch(err){
            setError(true)
            setLoading(false)
          }
  }
        loadItems();
    },[])


  return (
    <div className="container-fluid">
      <div className="row">
          <div className="col-md-3">
          <SideNav/>
          </div>
          <div className="col-md-9">
        <Topnav/>
          <table className="table-primary">
            <thead className="thead-dark">
                <tr className="tablehead">
                     <th> ID </th>
                    <th> Title </th>
                    <th> Edit </th>
                    <th> Delete</th>
                </tr>
            </thead>
      
            <tbody>
            <tr className="table-data">
              {isLoading && <h3> Loading..</h3>}
              {!isLoading && isError && <h3> Some Error Occered...</h3> }
              {!isLoading && !isError && item &&
                   
                    item.map((itemProduct,index)=>{
                      return(
                        <tr key={index}>
                            <td> {itemProduct._id}</td>
                        <td> {itemProduct.title}</td>
                        <td> {itemProduct.id}</td>
                        <td className="update"> <Link to={`/updateitems/${itemProduct._id}`}> Update </Link> </td>
                        <td className="delete"> <a href=""> Delete </a> </td>
                        </tr>
                      )
                       
                  
                    })
                  
              }
                 
                
                </tr>
            </tbody>
   

          </table>
          </div>
      </div>
    </div>
  )
}
