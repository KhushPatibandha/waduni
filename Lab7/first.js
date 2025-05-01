function first(x, y) {
    let cnt = 0;
    for (let i = 0; i < y.length; i++) {
        if (x == y[i]) {
            cnt++;
        }
    }
    console.log(cnt);
}

first(1, [1, 1, 2, 1, 1, 10]);
