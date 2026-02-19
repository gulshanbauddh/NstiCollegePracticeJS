// const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
const numbers = [10, 20, 30, 40, 50];

// numbers.forEach((num)=>console.log(num));
//+++++++++++++ Filter++++++++++++++++++++++++++
// const grater = numbers.filter((gtr) =>{ return gtr > 4});
// console.log(grater);
// console.log(Array.isArray(grater));

//+++++++++++++ map ++++++++++++++++++++++++++

// const add10 = numbers.map( (add) => add+10 )
// const add10 = numbers
//   .map((add) => add + 10)
//   .map((add) => add + 10)
//   .map((add) => add + 10)
//   .filter((gra) => gra > 30);
// console.log(add10);

//+++++++++++++ reduce ++++++++++++++++++++++++++
const add = numbers.reduce(function (a, b) {
  console.log(`A = ${a}, B = ${b}`);
  return a + b;
});

// const add = numbers.reduce((a, b) => {
//   console.log(`A = ${a}, B = ${b}`);
//   return a + b;

// },3);
// console.log(add);
// console.log(Array.isArray(add));
