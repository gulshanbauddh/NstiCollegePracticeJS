//let arr = [9, 1, 4, 6, 3, 5, 7, 0, 8, 2];
//let arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
//let arr = [0, 1, 2, 3, 4, 5, 7,6, 8, 9];
let c = 0;
let n = arr.length;
console.log(arr);
for (i = 0; i < n - 1; i++) {
  for (j = 0; j < n - i - 1; j++) {
    if (arr[j] > arr[j + 1]) {
      let temp = arr[j];
      arr[j] = arr[j + 1];
      arr[j + 1] = temp;
      c++;
    }
  }
}
console.log(arr);
console.log(c);
