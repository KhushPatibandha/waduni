function second(x) {
  let key = [];
  let value = [];
  for (let i = 0; i < x.length; i++) {
    if (key.includes(x[i])) {
      let idx = key.indexOf(x[i]);
      value[idx]++;
    } else {
      key.push(x[i]);
      value.push(1);
    }
  }
  for (let i = 0; i < key.length; i++) {
    console.log("Key: ", key[i], " Value: ", value[i]);
  }
}

second([1, 1, 2, 2, 3, 3, 4]);
