import React from 'react'
import './Post.css';
import AdminNav from '../Navigation/AdminNav'
import TopNav from '../Navigation/TopNav'
import { useNavigate, useParams } from 'react-router-dom';
import axios from 'axios'
import { useState, useEffect } from 'react';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';


export default function Editpost() {
  let navigate= useNavigate();
  const {id} = useParams();

  const[post, setPosts] = useState({
    title:"",
    seotitle:"",
    meta:"",
    tag:"",
    fulltext:"",
    profile: ""

  })
  // Lode Page content on code


  const loadPosts = async()=>{
    const restult = await axios.get(`http://localhost:3001/posts/${id}`)
    setPosts(restult.data);
  }
  // Display Data 
  useEffect(()=>{
    loadPosts(); 
  },[]);


const{title, slug, seotitle, meta, tag, fulltext} = post;

  const onInputChange = event =>{
    setPosts({...post,[event.target.name]: event.target.value})
  }

  // Notification
  const notify = () => toast("Post Update Successfully !!")

  const onSubmit = async event =>{
    event.preventDefault();
    await axios.put(`http://localhost:3001/posts/${id}`,post).then(()=>{
      notify();
    });
  }
 
  return (
    <div className="post">
      <TopNav/>
      <div className="container-fluid">
        <div className="row">
          <div className="col-md-2">
            <AdminNav/>
          </div>
          <div className="col-md-10">
          <div className="addnew">
          <h3> Edit Post  <i class="fa-solid fa-pen-field"></i></h3>
          </div>
          <div className="row">
            <ToastContainer/>
            <div className="col-md-6 post-control">

                <form onSubmit={event=>onSubmit(event)}>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input 
                      type="text" 
                      class="form-control" 
                      id="exampleInputEmail1" 
                      aria-describedby="emailHelp" 
                      placeholder="Enter Post Title"
                      name="title"
                      value={title}
                      onChange ={event => onInputChange(event)}
                      />
                
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">SEO Title </label>
                      <input type="text" 
                      class="form-control" 
                      id="exampleInputEmail1" 
                      aria-describedby="emailHelp" 
                      placeholder="Enter Post Title"
                      name="seotitle"
                      value={seotitle}
                      onChange ={event => onInputChange(event)}
                      />
                
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1"> Tags </label>
                      <input type="text" 
                      class="form-control" 
                      id="exampleInputEmail1" 
                      aria-describedby="emailHelp" 
                      placeholder="Tags"
                      name="tag"
                      value={tag}
                      onChange ={event => onInputChange(event)}
                      />
                  <div class="form-group">
                      <label for="exampleInputEmail1">Slug</label>
                      <input type="text" 
                      class="form-control" 
                      id="exampleInputEmail1" 
                      aria-describedby="emailHelp" 
                      placeholder="Slug "
                      name="slug"
                      value={slug}
                      onChange ={event => onInputChange(event)}
                      />
                
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1"> Meta Description </label>
                      <input type="text" 
                      class="form-control" 
                      id="exampleInputEmail1" 
                      aria-describedby="emailHelp" 
                      placeholder="Meta Description"
                      name="meta"
                      value={meta}
                      onChange ={event => onInputChange(event)}
                      />
      
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" 
                    id="exampleFormControlTextarea1" 
                    rows="3"
                    name="fulltext"
                    value={fulltext}
                    onChange ={event => onInputChange(event)}
                    ></textarea>
                  </div>
                  </div>
               
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
            </div>
        </div>
      </div>

    </div>

  )
}
