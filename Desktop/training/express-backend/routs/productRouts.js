const express = require('express');
const router = express.Router();
const productData = require('../data/products.json');
const {logData} = require('../middleware/logger');
const {returnAllProduct,
    returnSingleProduct, 
    createProduct, 
    updateProduct, 
    deleteProduct
} =require('../controllers/productControllers');


//Query sting 
router.get('/',logData, returnAllProduct);

// router.get('/', logData, (req,res)=>{
//     const {category} = req.query;
//     if(category){
//         const filteredProducts = productData.filter((product)=>{
//             return product.category === category
//         }) 
//         if(filteredProducts.length !==0){
//             res.json(filteredProducts)
//         } else{
//             res.send("category not fonund")
//         }
//     } else{
//         res.json(productData)
//     }
// });



//Route Params 
router.get("/:productID", returnSingleProduct);
// router.get('/api/products/2',(req,res)=>{
//     res.json(productData[1]);
// })
//------------------------nov-10-------
router.post("/", createProduct);

router.patch("/productID",updateProduct);

router.delete("/:ProductID",deleteProduct);


module.exports=router;