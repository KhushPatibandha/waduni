function fifth(arr, n) {
    let max = Infinity;
    for (let i = 0; i < n; i++) {
        let currentMax = -Infinity;
        for (let j = 0; j < arr.length; j++) {
            if (arr[j] < max && arr[j] > currentMax) {
                currentMax = arr[j];
            }
        }
        max = currentMax;
    }
    console.log(max)
}

fifth([0, 1, 2, 3, 4, 5], 4)
