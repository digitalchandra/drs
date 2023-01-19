class User{
    constructor(email, name){
        this.email = email;
        this.name = name;
        
    }
    logIn(){
        console.log(this.email ,'Just LogIn');
    }
    logOut(){
        console.log(this.email, 'Just Log Out')
    }

}
var userOne = new User('seo.shrestha@gmail.com', 'Chandra');
var userTwo = new User('gstar.chandra@gmail.com', 'Test Name');

console.log(userOne);
console.log(userTwo);

userOne.logIn();
userOne.logOut();