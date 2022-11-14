
const express = require ('express');
const PORT = 4000;
const productRouter = require('./routs/productRouts');
const hbs = require('hbs')
const productData = require('./data/products.json')
const {logData} = require('./middleware/logger');
require('dotenv').config();
const connectDatabae = require('./database/connection.js');
const connectDatabase = require('./database/connection.js');
// createomg a server 
const app = express();

// Setting view engine 
app.set('view engine', 'hbs')

hbs.registerPartials('./views/pritials')

// serving static file 
app.use(express.static('./public'));

//middleware for postmant 
app.use(express.json())


//connect database with Mongodb 
connectDatabase()

// Custom Middleware Function 

//Routs 
app.get('/',(req, res)=>{
   // res.send("Hello Form express Server");
    //res.download('./package.json');
    // const obj ={
    //     name:"Chandra Shrestha"
    // }
    // res.json(obj);
    res.send("welcome to ecommerce API");


})

// file send hbs to html 
// SSR Route 
app.get('/products',(req, res)=>{
    res.render('index',{title:"online Store ", productData});
})


// custom Middleware Function 
//---- frist case run every time 
   // app.use(logData); 

   // second case---> for certian time 
   //app.use('/api/products', logData); 

   // for specific roter at this time we use on productRouts.js 

//


 app.use('/api/products/',productRouter);

//Error Handeling 
app.get('*', (req,res)=>{
    res.status(404).send("<h2> SORRY PAGE NOT FOUND ! </h2>")
})


// trun on server 
app.listen(PORT,()=>{
    console.log(`Server Started at port ${PORT}`)
})