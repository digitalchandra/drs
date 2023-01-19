const express = require('express');
const router = express.Router();
const {
    returnSingleItem,
    returnAllItem,
    createItem,
    updateItem,
    deleteItem
}= require('../controller/controller');


router.get('/', returnAllItem);

router.get('/:itemID',returnSingleItem);

router.post('/',createItem);

router.patch('/:itemID', updateItem);

router.delete('/:itemID',deleteItem)

module.exports=router;