let promise = new Promise (function(resolve, reject){
    console.log("this is the new promish ")
    resolve(56)

})

console.log("Hello Test")
console.log(promise)
setTimeout(function(){
    console.log("This function is set-2")
},3000)
console.log("Test"+"Chandra Always Test")