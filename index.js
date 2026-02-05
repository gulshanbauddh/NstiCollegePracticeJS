'use strict';
// console.log(5 >'a');
// console.log(0 <'a');
// console.log(''=='');
// console.log(undefined==null);
// console.log(null==null);
// console.log('B'+'a'+ +'a'+'a');
// console.log(0.1+0.2===0.3);
// console.log(0.1+0.2);
function test() {
  return
  {
    status: "ok"
  };
}
console.log(test()); // Result: undefined

function outer() {
  let count = 0;
  return function inner() {
    count++;
    console.log(count);
  };
}
const counter = outer();
counter(); // 1
counter(); // 2
counter(); // 2

console.log(true+true+true+true-true); // Result: undefined (Error nahi aayega!)
