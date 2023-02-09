let p = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        console.log("This is the Set time out funtion")
        resolve(10)
    },3000)
})

p.then((value)=>{
    console.log(value)
    let p2 = new Promise((resolve, reject)=>{
       setTimeout(()=>{
        resolve("Promise - 2")
       }, 3000)
    })
    return p2;
}).then((value)=>{
    console.log("Promis Done")
})
