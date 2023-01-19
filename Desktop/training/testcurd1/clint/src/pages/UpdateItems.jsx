import React from 'react'
import { useState } from 'react';
import SideNav from '../components/SideNav';
import Topnav from '../components/Topnav';
import '../pages/NewPost.css';
import axios from 'axios';
import { useNavigate } from 'react-router-dom';
import {ToastContainer, toast} from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import {useParams} from 'react-router-dom';
import { useEffect } from 'react';


export default function Updateitems() {
    let negivator = useNavigate();
    const {_id} = useParams();

    const [posts, setPosts] = useState({
        title:"",
        price:"",
        rating:"",
        description:""
    });
    const {title,price,rating,description}= posts;


    const onInputChange = e =>{
       setPosts({...posts,[e.target.name]:e.target.value})
    };

    const notify = () => toast("Data Save Successfully !!");
    
 

    const onSumbit= async e =>{
        e.preventDefault() ;
        await axios.post(`http://localhost:4000/api/items${_id}`,posts).then(()=>{
            notify();
        })
        negivator('/')

    }

    useEffect(()=>{
        LoadItems();
    },[]);

    const LoadItems = async() =>{
        const resultitems = await axios.get(`http://localhost:4000/api/items/${_id}`);
        setPosts(resultitems.data)
        console.log(resultitems);
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
                <h3> Update Post</h3>
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
            <button type="submit" className="btn btn-warning">  Update Data ! </button>
            </form>
            </div>
        </div>
    </div>
  )
}
