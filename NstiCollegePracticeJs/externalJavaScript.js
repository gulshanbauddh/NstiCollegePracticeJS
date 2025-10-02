function greet(){
  alert("Hello from External JS");
}

// // Variables Practice
// // var
// var a = 5;
// a = 8;
// var a = 9; // It's allow (Redeclation)

// function ptr() {
//   console.log("I am var Variable");
// }

// console.log("var a=" + a);

// // let
// let b = 6;
// b = 8;
// // let b=7; // Not Allow (Redeclation)
// console.log("Let b=" + b);

// // const
// const c = 9;
// // const c=11;  // Not Allow (Redeclation)
// console.log("const c=" + c);

// Scope Practice-
console.log("----------Scope practice--------");
// var Practice-
// var d = 9;
// function abc() {
//   var d = 7;
//   d = 10;
//   console.log(d);
// }
// abc();
// console.log(d); // Not run due to var=9 is comment out.

console.log("---------let variable Scope Practice--------");
// var Practice-
// let d = 9;

// function abc() {
//   let d = 7;
//   d = 10;
//   console.log(d);
// }
// for (a = 0; a <= 4; a++) {
//     console.log(a);
// }
// abc();
// console.log(d); // Not run due to let=9 is comment out.

// const Practice-
// const d = 9;
// const d = 0; // redeclaration is not allow

// function abc() {
//   const d = 7;
// //   d = 10;
//   console.log(d);
// }
// for (a = 0; a <= 4; a++) {
//     console.log(a);
// }
// abc();
// console.log(d); // Not run due to let=9 is comment out.