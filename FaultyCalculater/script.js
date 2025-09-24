let displayOut=0;
function cal(no){
  document.querySelector("input").value+=no;
  
}
function calFun(no){
  document.querySelector("input").value+=no;
}
function calC(no){
  document.querySelector("input").value=no;
}
function calEqual(){
displayOut=document.querySelector("input").value;
alert(Number(displayOut));
}

function cal(no){
  no+=no;
  
}