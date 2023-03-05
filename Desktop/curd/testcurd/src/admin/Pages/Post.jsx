import React from 'react'
import './Post.css';
import AdminNav from '../Navigation/AdminNav'
import TopNav from '../Navigation/TopNav'
import { useNavigate } from 'react-router-dom';
import axios from 'axios'
import { useState } from 'react';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';


export default function Post() {
  let navigate= useNavigate();
  const[posts, setPosts] = useState({
    title:"",
    seotitle:"",
    meta:"",
    tag:"",
    fulltext:"",
    profile: ""

  })
  const{title, seotitle, meta, tag, fulltext, profile} = posts;

  const onInputChange = event =>{
    setPosts({...posts,[event.target.name]: event.target.value})
  }
  const notify = () => toast("Your Data Added succssfully !!")
  
  const onSubmit = async event =>{
    event.preventDefault();
    await axios.post("http://localhost:3001/posts",posts).then(()=>{
      notify();
    });
    navigate.push("dashboard")
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
          <h3> ADD NEW <i class="fa-solid fa-pen-field"></i></h3>
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
                      onChange ={event => onInputChange(event)}
                      />
                  < div class="form-group">
                    <lable for="image"> Profile Image</lable>
                    <input type="file"
                    placeholder="upload image"
                    name="profile"/>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" 
                    id="exampleFormControlTextarea1" 
                    rows="3"
                    name="fulltext"
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
