let key = prompt("enter your key value")
let value = prompt("enter your value")
localStorage.setItem(key, value)
console.log(`value is ${key}, Value ${localStorage.getItem(key)} `)

if (key ==  "red"|| key =="blue" ){
    localStorage.removeItem(key)
}
 if (b == 0){
     localStorage.clear(key)
 }

 //local storage 
//  localStorage.removeItem()
//  localStorage.length()
//  localStorage.clear()
//  localStorage.key()