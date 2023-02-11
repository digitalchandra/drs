try{
   let a = 80;
   if(a>70){
        throw new ReferenceError("your age is below 90")
   }
  
   
}catch(error){
    console.log(error.message)
    console.log(error.name)
    console.log(error.stack)
}