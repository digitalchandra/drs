// when we use try catch then error occored on catch section in same case if error occored on catch section 
// at this condition finally will automatic run cord it is not depend on other section it will definitely run

try{
    let a = 0
    a = b_+c
    console.log("this is the test error ")

}catch(error){
    console.log("error occored on try section  ")
}finally{
    console.log("this is finally ")
}

