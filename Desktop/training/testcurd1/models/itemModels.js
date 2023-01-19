const mongoose = require('mongoose');

const itemSchema = mongoose.Schema({
title:{
    type:String,
    require:true,
    minlenght:[5,"Title Lenght Should be more than 5 caracters"],
    maxlenght:[200,"Title Lenght no more then 200"]
},

description:{
    type:String,
    minlenght:[10, "Description more than 10 characters"]
    
},
price:{
    type:Number,
    required:[true,"price is required"],
    minlenght:[1,"Price Min lenght 1"]
},
 
rating:{
    rate:String,
    count:Number
},
image:{
    type:String
},

slug:String

});

const ItemModule = mongoose.model('item', itemSchema);
module.exports = ItemModule;