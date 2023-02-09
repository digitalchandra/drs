async function tesasynce(){


let p = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        resolve("Promise -0 ")

    },2000)
})

let p1 = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        resolve("Promise -1 ")
        
    },4000)
})

let setPormies = await p;
let setPromies1 = await p1;
return[setPormies, setPromies1]
}

console.log("this is the Asyn and wait function")
let test1 = tesasynce()
test1.then((value)=>{
    console.log(value)
})
