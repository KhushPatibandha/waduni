function fourth(x) {
  if (x > 0) {
    console.log("positive");
  } else if (x < 0) {
    console.log("negative");
  } else {
    console.log("zero");
  }

  x > 0
    ? console.log("positive")
    : x < 0
      ? console.log("negative")
      : console.log("zero");
}

fourth(0);
fourth(1);
fourth(-1);
