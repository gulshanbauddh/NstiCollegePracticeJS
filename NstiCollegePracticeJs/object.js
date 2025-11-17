// #1 setTimeout
// console.log("Start !");
// setTimeout(() => {
//   console.log("setTimeout !");

// }, 3000);
class railwayForm {
  submit() {
    console.log("Form Submitted");
  }
  cancel() {
    console.log("Form Cancelled");
  }
}


let gulshanForm = new railwayForm();
let kajalForm = new railwayForm();

gulshanForm.submit();
kajalForm.submit();
