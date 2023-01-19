var userOne ={
    email:'seo.shrestha@gmail.com',
    name: 'Chandra Shrestha',
    age: '30 Years',
    login(){
        console.log(this.email, 'has log in');
    },
    logout(){
        console.log(this.email, 'has Log Out ');
    }
}
console.log(userOne.age)

userOne.name =" Yelp"