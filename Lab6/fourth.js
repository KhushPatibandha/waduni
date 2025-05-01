function fourth(n) {
  let sum = 0;
  let i = 1;
  do {
    sum += i;
    i++;
  } while (i <= n);
  console.log(sum);
}

fourth(10);
