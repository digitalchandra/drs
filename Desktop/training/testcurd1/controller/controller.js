const ItemModule = require('../models/itemModels');

const returnAllItem = async (req,res)=>{
    const item = await ItemModule.find();
    res.json(item);
};

const returnSingleItem = async(req,res)=>{
    const {itemID} = req.params;
    try{
        const itemData = await ItemModule.findById(itemID);
        res.json(itemData)
    } catch(e){
        res.send("Some Error Occored Please Try again")
    }
};

const createItem = async(req,res)=>{
    try{
        const itemData = await ItemModule.create(req.body);
        res.json(itemData)
    }catch(e){
        res.send("Error accoured during the create")
    }
};


const updateItem = async (req,res)=>{
    const {itemID} = req.params;
    try{
        const itemData = await ProductModel.findByIdAndUpdate(itemID, req.body, {new:true})
        res.json(itemData)
        
    }catch(e){
        res.send("Some Error Occored Please Try again")
    }
 };
 

const deleteItem = async (req,res)=>{
    const {itemID} = req.params;
    try{
        const itemData = await ItemModule.findByIdAndDelete(itemID);
        res.json("Delete Sucssfully")
    }catch(e){
        res.send("delete Error")
    }
};

module.exports={returnAllItem, returnSingleItem, createItem,updateItem,deleteItem};
