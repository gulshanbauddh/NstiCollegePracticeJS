let displayOut = 0;
let keyInp = document.querySelector("input");
function cal(no) {
  keyInp.value += no;
  operator = true;
}
function calFun(no) {
  if (displayOut.length - 1 != "+") {
    console.log(String(displayOut.length - 1));
    if (operator) {
      keyInp.value += no;
      operator = false;
    }
  }
}
function calC(no) {
  keyInp.value = no;
}
function calEqual() {
  displayOut = keyInp.value;
  keyInp.value = eval(displayOut);
}
