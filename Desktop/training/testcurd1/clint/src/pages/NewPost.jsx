import React from 'react'
import { useState } from 'react';
import SideNav from '../components/SideNav';
import Topnav from '../components/Topnav';
import '../pages/NewPost.css';
import axios from 'axios';
import { useNavigate } from 'react-router-dom';
import {ToastContainer, toast} from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';


export default function NewPost() {
    let negivator = useNavigate();

    const [posts, setPosts] = useState({
        title:"",
        price:"",
        rating:"",
        description:"",
        image:""
    });


    
    const {title,price,rating,description}= posts;


    const onInputChange = e =>{
       setPosts({...posts,[e.target.name]:e.target.value})
    };

    const notify = () => toast("Data Save Successfully !!");
    
   


    const onSumbit= async e =>{
        e.preventDefault() ;
        const formData = new FormData();
        formData.append('image',posts.image );
        formData.append('title', posts.title);
        formData.append('price', posts.price );
        formData.append('description', posts.description);
        await axios.post("http://localhost:4000/api/items",formData).then(()=>{
            notify();
        })
        negivator('/')

    }

    const handlePhoto = (e)=>{
        setPosts({...posts, image: e.target.files[0]});
        console.log(posts.image);
    }

  return (
    <div className="container-fluid">
        <div className="row">
            <div className="col-md-3">
                <SideNav/>
            </div>
            <div className="col-md-9">
                <Topnav/>
                <ToastContainer/>
            <form onSubmit={e=>onSumbit(e)}>
            <div className="mb-3 addpostcontent" >
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="exampleFormControlInput1" 
                    placeholder="Title Here"
                    name="title"
                    value={title}
                    onChange = {e=>onInputChange(e)}
                />
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                      <input 
                    type="text" 
                    class="form-control" 
                    id="exampleFormControlInput1" 
                    placeholder="Price"
                    name="price"
                    value={price}
                    onChange = {e=>onInputChange(e)}
                    />
                <label for="exampleFormControlInput1" class="form-label">Rating</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="exampleFormControlInput1" 
                    placeholder="Rating"
                    name="rating"
                    value={rating}
                    onChange = {e=>onInputChange(e)}
                />
                <input 
                    type="file" 
                    class="form-control" 
                    accept=".png, .jpeg, .jpg"
                    id="exampleFormControlInput1" 
                    name="image"
                    onChange = {handlePhoto}
                />
    
            </div>
            <div class="mb-3 addpostcontent">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea 
                    class="form-control" 
                    id="exampleFormControlTextarea1" 
                    rows="8"
                    name="description"
                    value={description}
                    onChange = {e=>onInputChange(e)}
                    >

                    </textarea>
            </div>
            <button type="submit" className="btn btn-primary">  Save Data ! </button>
            </form>
            </div>
        </div>
    </div>
  )
}
