class Laptop{
    constructor(){
        this.name = 'Mac book pro';
        this.space = '256GB';
        this.ram = '50GB';
        this.screen = '16 inch';
        this.price = ' USD 40000';

    }
}

const laptop1 = new Laptop();
const na = new Laptop()

console.log(laptop1.name)
console.log(na.name)
/// Constructor is the speical method for assign properties automatically call web object 
class Car{
    constructor(brand, model, seat, price){
        this.brand = brand;
        this.model = model;
        this.seat = seat;
        this.price = price;
    }
}
let vehical = new Car("Mustang", "2023", " 4 sitter", " $ 4000");
let vehical1 = new Car("Farari", "2022", "2 sitter", "$50000")

console.log(vehical.brand)
console.log(vehical.price)