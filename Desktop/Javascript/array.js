// let a =[5,4,3,6,4]
// console.log(a[2]);

//Array Methods 
// 1. toSting 
    // let num = [1,2,3,4,5]
    // let a = num.toString()
    // console.log(a)

// 2. join 

// let a = ['ram', 'shyam', 'hari', 'gita']
// let b = a.join("+");
// console.log(b)

// 3. pop (it remove last array item this means pop method)

// let a=[1,2,4,5,6,7,8]
//  a.pop()
// console.log(a)

// Array Push (adding new element on last of array)
// let b = [1,2,3,4,5,6]
// let c =b.push(40);
// console.log(b,c)

//Array Shift (remove frist element and return )
// let a = [1,2,3,4,5,6]
// let b = a.shift()
// console.log(a,b)

// delete array 

// let a = [1,2,3,4,5,6,7,8,90];
// delete a[7]
// console.log(a)

// Array Concatinate (combination of 2 array/ marge array)

// let a= [10,20,30,40]
// let b = [11,12,13,14]
// let c = a.concat(b)
// console.log(c)

//array sort function alwauy short data if we need accending order the we need to use compaire()
let compare = (c,d)=>{
    return c-d;
}

let a =[1,121,32,3434,545,65,12,434,4655,4,2]
a.sort(compare);
console.log(a);
