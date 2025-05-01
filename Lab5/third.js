function third(x, y) {
  if (x > y) {
    console.log("first is greater");
  } else {
    console.log("second is greater");
  }
  x > y ? console.log("first is greater") : console.log("second is greater");
}

third(10, 2);
third(2, 12);
