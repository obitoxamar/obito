console.log("hello this is my first js ")
//javascript is dynamically types
//case sensitive hai 
//variable ke name me sppace nahi hona chaiye
//_$ f yehi se start hona chaiye and 12 se start nahi hona chaiye
//console yeh reserved keywords hai

// usiing var we can redeclare the variales or say override them
//using let we cannot redeckare but update the 
let age=34;
age=78;
age=90;
//constant variable cannoy be dredeclared or updated;
// if we declare a variable and d no initialie it it will automatically be undefined;

// var has global scope;
// const and let have block scope; {}
let x=null;
console.log(x);
console.log(typeof x); 
const student={
name:"amarnath yadav",
age:20,
cgpa:8.0,
}
console.log(student);
console.log(student.age);
// bhale hi object const hot ahai par chage ho jata haiuske elements agar poora object change kare ti hi error ayega
// unary operator
//a==b returns a boolean operater whether they arre equa or not
// === checsk for data tyoe also !==  ans mostly yehi use karnege
// !(5<4) returns false
// ternary operator   let result=age>18 ? "adult":"not adult";
// switch statement

exp="ela";
switch(exp)
{
    case 're':
        console.log("re");
        break;
    case 'ela':
        console.log("hehe");
        break
}

//alert("hello") one time alert
//let name = prompt("helo");// message dekar sath me inpute bhi lega
// loop ke andar se sir var survive karke ata hi
 // 2 special loops in js

 //for-of helps in loopinga arrays
/*let str="amarnath ayadav"
for(let i of str)
{
console.log(i);
}*/

// for in loops se hamare paas objects ke keys a ajati hai
for(let val in student)
{
    console.log(student[val]);
}// val seedha as a string use karta hai  
/*let gameNumber=40;
let userNum=prompt("guess the number");
console.log(userNum);
while(gameNumber!=userNum)// promt retturns a stringf therefor == nahi lagega
{
    userNum=prompt("sadly dobara guess kar gandu");
}
console.log("congo you entered the right nuber")*/


// strings

let str="hello";
let str2="amarnaqthg"
console.log(str.length);
console.log(str[1]);
let template=`the cost of ${student.name} \n is ${student.age} rupees`;// escape char ke lenghth 1
console.log(template);
console.log(str.toUpperCase());// doesnt vhange original trring but creates a new string bc string are immutable

str.trim();// removes all the hwite spaces at end 
console.log(str.slice(2,4));
console.log(str.concat(str2));// str+str2

console.log(str.replace("l","o")); // replaceAll se sari values replace ho jayengi
str.charAt(0);
// let items=[400,7889,55,35,64]
 // push and  pop bhi hota hia yah aaerray me
 //toString converts array nto string
 // concat bhi kar sakte  arr1.concat(arr2,arr3)
 //unshift()-acts like push but in front
 // shift acts like pop but from front
 // splice (2,2,5,6) - strt index , index number of index deketed , values replaced 
 // splice(2) iskak matlab hai is index ke baad sab delete kar dega

 // arrow function
 const arrow=(a)=>
 {
    let count=0;
    for(let i of a){
        if(i=="a"||i=="e"||i=="i"||i=="o"||i=="u" ){
            count++;
        }

    }
    console.log(count);
 }
 arrow("hello");
 // methods are functiond assoxiated with an object
  