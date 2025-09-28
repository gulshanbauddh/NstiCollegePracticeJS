let ans=document.querySelectorAll("answer");
function q1() {
  let no1 = parseInt(prompt("Enter no1-"));
  let no2 = parseInt(prompt("Enter no2-"));
  alert(ans[0].innerText="Product of Two no is= " + no1 * no2);
}

function q2() {
  alert("Q2. Area and Perimeter of Square-");
  let side = parseInt(prompt("Enter side of Square-"));
  alert(ans[1].innerText="Area of Square is= " + side ** 2 + "\nPerimeter of Square= " + 4 * side
  );
}
function q3() {
  alert("Q3. Area and Perimeter of Rectangle-");
  let length = parseInt(prompt("Enter Length-"));
  let width = parseInt(prompt("Enter Width-"));
  alert(ans[2].innerText=`Area of Rectangle is= ${length * width} \n Perimeter of Rectangle is= ${2(
      length + width
    )}`
  );
}
function q4() {
  alert("Q4. Area and Circumfrence of Circle-");
  const pi = 3.14;
  let radius = parseInt(prompt("Enter Radius of Circle-"));
  alert(ans[3].innerText=`Area of Circle= ${pi * (radius * radius)} \n Circumfrance of Circle= ${
      2 * pi * radius
    }`
  );
}
function q5() {
  a = parseInt(prompt("Enter value of a-"));
  b = parseInt(prompt("Enter Value of b-"));

  alert(ans[4].innerText="a= "+a+" b= "+b+"\nAddition of two no= " + (a + b)+"\nSubstraction of two no= " + (a - b)+"\nMultiplication of two no= " + (a * b)+"\nDivision of two no= " + (a / b)+"\nModulus of two no= " + (a % b)+"\nExponential of two no= " + (a ** b)+"\nIncrement (++a)= " + (++a)+"\nDecrement (--b)= " + (--b));
}
