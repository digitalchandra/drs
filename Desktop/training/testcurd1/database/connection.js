const e = require('express');
const mongoose = require('mongoose');

const connectDB = ()=>{
    mongoose.connect(process.env.MANGODB_CONNECTION_STIRNG,(err)=>{
        if(err){
            console.log(err)
        }else{
            console.log("Database Connected Successfully")
        }
    })

}
module.exports = connectDB