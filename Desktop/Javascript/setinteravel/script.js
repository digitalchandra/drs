 document.write("test")

// let a = setTimeout(function(){
//     alert("this is the function setTimeout")
// },5000)

// let b = prompt("do you want to run setTimeout function")
// if("no"==b){
//     clearTimeout(a)
// }

// console.log(a)

const sum = (a,b)=>{
    console.log("the som of two number is:", a+b)
    return a+b;
}
setTimeout(sum, 5000, 5,7)


//  set time interval 
// setInterval((sum) => {
//     alert("this is the set Time interval function ")
// }, 20000);
