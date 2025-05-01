function second(x) {
  if (x % 2 == 0) {
    console.log("even");
  } else {
    console.log("odd");
  }

  x % 2 == 0 ? console.log("even") : console.log("odd");
}

second(2);
second(3);
