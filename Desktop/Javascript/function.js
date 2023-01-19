// function Simple(){
//     console.log("this is the Simple function ");
//     return 'this is the return function';
// }
// let a = Simple();

let marks={
    ram:69,
    shyam: 9,
    hari: 40,
    rohan: 90,

}

for(let a=0; a<Object.keys(marks).length; a++ ){
    console.log("the marks of :" + Object.keys(marks)[a].length + "is=>"+ marks[Object.keys(marks)[a]])
}