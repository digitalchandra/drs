let p = new Promise((resolve, reject)=>{
    console.log("P1 Primise is Pending")
    setTimeout(()=>{
        console.log("P1 This is new promiss")
         resolve(true)
        // reject(new Error("Promise Error"))
    }, 3000)
})

let p1= new Promise((resolve, reject)=>{
    console.log("P2 Primise is Pending")
    setTimeout(()=>{
        // console.log("This is new promiss - P1")
        // resolve(true)
        reject(new Error("Promise Error"))
    }, 3000)
})
    p.then((value)=>{
        console.log(value)
    })
    p1.catch((Error)=>{
        console.log("some error Occored on P1")
    })