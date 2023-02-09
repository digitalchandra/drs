let p = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        resolve("Promis- 0")
    },2000)
})

let p1 = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        resolve("Promis- 1")
    },3000)
})

let p2 = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        resolve("promies - 2")
        // reject(new Error(" Promise Rejected - 2"))
    },5000)
})

// p.then((value)=>{
//     console.log(value)
// })

// p1.then((value)=>{
//     console.log(value)
// })

// p2.then((value)=>{
//     console.log(value)
// })
// this Promise.all method can able to print all value and print depend the maxmimum time function 
// let promise_all = Promise.all([p,p1,p2])

// promise_all.then((test)=>{
//     console.log(test)
// })

//------------------------promise.allSettled ---------------

// promise.all only print data when all promis is correct when one promies get error all promiese can not print the value 
// so in this case 



// let promise_status = Promise.allSettled ([p,p1,p2])
// promise_status.then((value)=>{
//     console.log(value)
// })

//------------------------Promise.race---------
// promise.race compaire the time and which is short time this will be print 
// it print only one value which has short time 
// when it found error it print error and stop.


// let promise_race = Promise.race([p,p1,p2])
// promise_race.then((value)=>{
//     console.log(value)
// })


//------------------------Promise.any---------
// promise givs frist resolve value it dos't care eroor or reject 
// 

// let promise_any = Promise.any([p,p1,p2])
// promise_any.then((value)=>{
//     console.log(value)
// })


//------------------------Promise.reject---------

let promise_reject = Promise.reject([p,p1,p2])
promise_reject.then((value)=>{
    console.log(value)
})


//------------------------Promise.resolve---------

let promise_resolve = Promise.resolve([p,p1,p2])
promise_resolve.then((value)=>{
    console.log(value)
})
