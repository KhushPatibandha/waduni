function third(x) {
  let even = [];
  let odd = [];
  for (let i = 0; i < x.length; i++) {
    if (x[i] % 2 == 0) {
      even.push(x[i]);
    } else {
      odd.push(x[i]);
    }
  }
  console.log(even);
  console.log(odd);
}

third([1, 2, 3, 4, 4, 5]);
