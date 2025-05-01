function sixth(a, b, c) {
  let D = b * b - 4 * a * c;
  if (a == 0) {
    console.log("Not a Quadratic Equation");
    return;
  }
  if (D > 0) {
    console.log("Real and Distinct");
    x1 = (-b + Math.sqrt(D)) / (2 * a);
    x2 = (-b - Math.sqrt(D)) / (2 * a);
    console.log(`roots of equation ${a}x^2 + ${b}x + ${c} are ${x1} and ${x2}`);
  } else if (D == 0) {
    console.log("Real and Equal");
    x1 = -b / (2 * a);
    x2 = x1;
    console.log(`roots of equation ${a}x^2 + ${b}x + ${c} are ${x1} and ${x2}`);
  } else {
    console.log("Imaginary roots");
  }
}
sixth(5, 2, 1);
sixth(1, 2, 1);
sixth(1, 10, 20);
