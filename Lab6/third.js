function third() {
  let i = 1;
  while (i <= 20) {
    if (i % 3 == 0) {
      i++;
      continue;
    }
    console.log(i);
    i++;
  }
}

third();
