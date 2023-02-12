try{
    let data = fetch("https://github.com/public-apis/public-apis#jobs")
    data.then((value)=>{
        console.log(value.status)
        return value.json()
    }).then((value2)=>{
        console.log(value2)
    })
}catch(error){
    console.log(error)
}