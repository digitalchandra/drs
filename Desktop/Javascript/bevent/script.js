let x = function(e){
    // alert("This is the Add event Listner---1 ")
}
let y =  function(e){
    console.log(e.pageX , e.pageY)
    alert("This is the Add event Listner---2 ")
}
btn.addEventListener('click' ,x )

btn.addEventListener('click', y )

let a = prompt("enter a number ")
if(a=="2"){
    btn.removeEventListener('click',x)
}