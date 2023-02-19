// inheritance = usefull for code resuability Reuse properties and methods of an existing class 
//      Children class inherit form parent classes 

class Animal{
    constructor(){
        this.alive = true
    }
    eat(){
        console.log("Animal Eats food ")
    }
}

class Rabbit extends Animal {
    run(){
        console.log("Rabbit Run Fast")
    }
}

class Dear extends Animal{
    jump(){
        console.log("Dear can jump Very High")
    }
}
class Fish extends Animal{
    swim(){
        console.log("fish can swim easly")
    }
}

let r = new Rabbit()

let d = new Dear()

let f = new Fish()

console.log(r.alive)
console.log(d.alive)
console.log(f.alive)

r.eat();

d.jump()
r.run()
f.swim()