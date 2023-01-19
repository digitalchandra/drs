
/*
const intrestRate = 0.3;
intrestRate = 1;
console.log(intrestRate);
*/
// Primitive Types / Value types and Refrence type
// Types of Primitives 
// 1. String 
// 2. Number
// 3. Boolean
// 4. undefine 
// 5. null 


// String Primitive 
/*
let name = "Chandra"// String Literal 
let age = 30; // Number Litteral 
let isApproved = true; // boolean literal 
let fristName = undifined; // undifined 
let selectColor = null; // null literal 

// Dynamic Typing 

// Refrence Types 
// 1. Object 
// 2. Array 
// 3. Function 


//Object: 

let person = {
    name : 'Chandra',
    age : 50
};
// Dot Notation 
person.age = 40;
// Bracket Notation 
person['name'] = 'Mary';

console.log(person.name);

let selectedColour=['red','green','brown','#0000'];
selectedColour[2]= 1;
console.log(selectedColour.length);
*/
// FUNCTION 

function greet(name, lastName){
    console.log('Hello'+  name + '' + lastName);
}


greet('Chandra','Shrestha');

// Function Claculation 

function square(number){
    return number * number;
}
console.log(square(50));