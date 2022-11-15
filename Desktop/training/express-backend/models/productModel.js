const mongoose = require('mongoose');

const productSchema = mongoose.Schema({
    title:{
        type:String,
        required: [true,"Title Required"],
        minlength: [10,"Title lenght should be more than 10 characters"],
        maxlenght: [250,"The Title lenth not more than 250 characters "]

    },
    price:{
        type:Number,
        required: [true,"price is required"],
        min:[1,"price should be at least Rs 1"]
    },
    category:String,
    image:String,
    rating:{
        rate:String,
        count:Number,
    }
    
});

const ProductModule = mongoose.model('product',productSchema);
module.exports = ProductModule;