const logData =(req, res, next)=>{
    console.log("this is the middleware function ");
    next();
}
module.exports = {logData};