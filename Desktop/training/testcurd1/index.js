const express = require('express');
const PORT = 4000;
const app = express();
require('dotenv').config();
const connectDB = require('./database/connection');
const router = require('./route/routes');
const cors = require('cors');
const multer = require('multer')
const upload = multer({ dest: 'uploads/' })



connectDB();


app.use(cors());
app.use(express.json());

app.use('/api/items',upload.single('image'),router);



app.get('/',(req,res)=>{
    res.send("Test Project")
});

app.get('*',(req,res)=>{
    res.status(404).send("<h2>Page Not Found: 404 Error");
});

app.listen(PORT,()=>{
    console.log(`Server Start at port: ${PORT}`)
});