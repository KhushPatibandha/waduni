function second(x) {
  if (x < 0) {
    console.log("negative");
  } else if (x > 0) {
    console.log("positive");
  }
  x < 0 ? console.log("negative") : console.log("positive");
}

second(1);
second(-1);
