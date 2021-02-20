console.log("Объекты");
let object = new Object();
let  object2 = {};

let user = {
    name: "Nadia",
    age: 30
};

console.log(user.name);

user.isAdmin = true

console.log(user)

user.permissions=['create'];

 console.log("ddd", user);

console.log(user.permissions[0]);

let permissions = user.permissions;

delete user.permissions;

console.log(user);

let newUser= {
    name: "ffff",
    age: 15,
    "like": true
}

console.log("aaf", newUser['like'])

let key = "like";

newUser[key] = false;

console.log("naf", newUser['like'])


console.log("Функции");



let storeProducts = [
    {name: "Samsung Galaxy A10", price: 3310},
    {name: "Nokia 5310", price: 1400},
    {name: "Apple iPhone 12 Pro Max", price: 41000},
    {name: "Xiaomi Poco X3", price: 6200},
    {name: "iPhone case", price: 500}
];

let totalCost = 0;
for(let product of storeProducts) {
    totalCost += product.price;
}

console.log("Total prise: ", totalCost)

let orderProducts = [
    {name: "Apple iPhone 12 Pro Max", price: 41000},
    {name: "iPhone case", price: 500}
]

 totalCost = 0;
for(let product of orderProducts) {
    totalCost += product.price;
}
console.log("Total prise: ", totalCost)

function getTotalCost (product) {
    let result = 0;
    for(let product of orderProducts) {
        result += product.price;
    }
    return result;
}

totalCost = getTotalCost(storeProducts)
//lhbhb
console.log(10 + sum(2, 3, 4));
hello("Queen");
univarslaUnsmer();
//dv
function sum (x, y, z){
    return x+y+z;
}

function hello(name){
    console.log("Hello " + name + "!");
}

function univarslaUnsmer(){
    console.log(42);
}