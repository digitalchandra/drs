// Create a array and take a number form user and add in to the array .
let a =[1,2,3,4,5]
let b = prompt("enter a number")
b = Number.parseInt(b)
a.push(b)
console.log(a)


// keep adding a number in array untill i !=0 adding number 

let num = [1,2,3,45,67]
let num2;
do{
  num2 = prompt("enter a number");
  num2=Number.parseInt(num2)
  num.push(num2)
} while(num2!=0);
console.log(num);