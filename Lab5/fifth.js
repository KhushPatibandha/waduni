function fifth(a, b, c) {
  if (a > b && a > c) {
    console.log("first is the largest");
  } else if (b > a && b > c) {
    console.log("second is the largest");
  } else {
    console.log("third is the largest");
  }

  a > b && a > c
    ? console.log("first is the largest")
    : b > a && b > c
      ? console.log("second is the largest")
      : console.log("third is the largest");
}

fifth(1, 2, 3);
fifth(1, 3, 2);
fifth(9, 3, 2);
