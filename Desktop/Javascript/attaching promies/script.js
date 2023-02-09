let a = new Promise((resolve, reject)=>{
  setTimeout(() => {
    console.log("promis not Resolve")
    resolve(5)
  }, 2000);
})
a.then(()=>{
   setTimeout(() => {
    console.log("promis resolved now after 4 second")
   }, 2000);
})

//promis Chaining 

a.then(()=>{
    let b = new Promise((resolve, reject)=>{
        setTimeout(() => {
            console.log("this is the promis chainging after - 6 second ")
            resolve(100000)
        }, 6000);
    }).then((value)=>{
        console.log(value)
    })
})