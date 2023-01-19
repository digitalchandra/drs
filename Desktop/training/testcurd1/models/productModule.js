import mongoose from "mongoose";

const productSchema = mongoose.Schema({
    title:{
        type:String,
        required:[true,"Title Should be require"],
        minlenght:[5,"Title Should be minimum 5 characters"],
        maxlenght:[250,"Title Should no more than 250 words"]
    },
    slug:String,

    description:{
        type:String,
        
    },
    price:{
        type:String,
        required:[true,"Price Should Require"]
    },
    
})
