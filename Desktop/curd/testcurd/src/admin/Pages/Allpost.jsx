import React from 'react'
import {useState, useEffect } from 'react'
import axios from 'axios'
import { set } from 'react-hook-form';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import { Link } from 'react-router-dom';

export default function Allpost() {

  const [posts, setPost] = useState([]);

  const postLode = async()=>{
    const result =await axios.get("http://localhost:3001/posts")
    setPost(result.data.reverse());

  }
// Notification 

  const notofy =()=>toast("Post Edit Succssfully !!");

// Data Load
  useEffect(()=>{
    postLode();
  },[]);

  // Delete Funcion 
   const deletePost = async id=>{
     await axios.delete(`http://localhost:3001/posts/${id}`).then(()=>{
       notofy();
     });
     postLode();
   }
   
  return (
    <div>
        <table className="table table-striped">
  <thead>
    <ToastContainer/>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Post Title</th>
      <th scope="col">Meta</th>
      <th scope="col">SEO title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {
      posts?.map((posts, index)=>{
        return(
          <tr>
          <th key={index} scope="row"> {index+1}</th>
          <td>{posts.title}</td>
          <td>{posts.seotitle}</td>
          <td>{posts.meta}</td>
          <td>
            < Link to={`/editpost/${posts.id}`} className="btn btn-primary"> <i className="fa-solid fa-pen"></i> </Link>
            <button onClick={()=> deletePost(posts.id)} className="btn btn-primary"><i className="fa-solid fa-trash-can"></i> </button>
    
          </td>
        </tr>
        )
      })
    }

  </tbody>
</table>
    </div>
  )
}
