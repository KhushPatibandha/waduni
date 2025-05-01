function second(n) {
  let cnt = 0;
  let i = 1;
  while (cnt < n) {
    if (i % 2 != 0) {
      console.log(i);
      cnt++;
    }
    i++;
  }
}

second(5);
