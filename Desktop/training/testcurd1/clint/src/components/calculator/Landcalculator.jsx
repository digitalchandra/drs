import React from 'react'
import { useState } from 'react' 


export default function Landcalculator() {

    const [aana, setAana] = useState(1);
    const [ropani] = useState(0.0625);
    const [paisa, setPaisa] = useState(0.25);
    const [total, setTotal] = useState();


    function handleAana (e){
        setAana(e.target.value);
        showResult()
        
    }

    function showResult (){
        setTotal(aana * ropani)
        
    }
    function showAnna(){
        setPaisa(aana/0.25)
    }


  return (
    <div className="container">
    <form>
        <div className="row">
            <div className="col-md-3">
                <label for="exampleInputEmail1" class="form-label">Anna </label>
                <input 
                type="email" 
                class="form-control" 
                id="exampleInputEmail1" 
                value={aana}
                onChange={handleAana}
                />
                <div  class="form-text">We'll never share your email with anyone else.</div>
            </div>

   
            <div className="col-md-3">
                <label for="exampleInputEmail1" class="form-label"> Ropani </label>
                <br/>
               <button className="btn btn-primary" onClick={showResult}> Calculate Ropani </button> {total} Ropani 
            </div>

    

            

        </div>
    </form>

    <form>
        <div className="row">
            <div className="col-md-3">
                <label for="exampleInputEmail1" class="form-label">Anna </label>
                <input 
                type="email" 
                class="form-control" 
                id="exampleInputEmail1" 
                value={aana}
                onChange={handleAana}
                />
                <div  class="form-text">We'll never share your email with anyone else.</div>
            </div>

   
            <div className="col-md-3">
                <label for="exampleInputEmail1" class="form-label"> Ropani </label>
                <br/>
               <button className="btn btn-primary" > Calculate Ropani </button> {total} Ropani 
            </div>

            <div className="col-md-3">
                <label for="exampleInputEmail1" class="form-label"> Paisa </label>
                <br/>
               <button className="btn btn-primary" onClick={showAnna}> Calculate Pisa </button> {paisa} Pisa 
            </div>

            

        </div>
    </form>
     
    </div>
  )
}
