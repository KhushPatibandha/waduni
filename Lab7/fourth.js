function fourth(x, y) {
    let temp = [];
    let flag = false;
    let ans = false;
    for (let i = 0; i < x.length; i++) {
        if (x[i] == y[i]) {
            continue;
        } else if (x[i] != y[i]) {
            if (flag == true) {
                ans = true;
                console.log("not same");
                break;
            }
            if (temp.length == 0) {
                temp.push(x[i]);
                temp.push(y[i]);
            } else if (temp.length == 2) {
                if (y[i] != temp[0]) {
                    ans = true;
                    console.log("not same");
                    break;
                }
                if (x[i] != temp[1]) {
                    ans = true;
                    console.log("not same");
                    break;
                }
                flag = true;
            }
        }
    }
    if (!ans) {
        console.log("same");
    }
}

fourth([1, 1, 10], [1, 10, 1]);
fourth([1, 1, 10, 2], [1, 10, 1, 3]);
