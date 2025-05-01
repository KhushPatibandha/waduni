function second(str, i) {
    if(i > str.length - 1) {
        console.log("index greater than length of the string not allowed")
        return
    }
    if(i == 0) {
        console.log(str.substring(1))
        return
    }
    str = str.substring(0, i) + str.substring(i + 1);
    console.log(str)
}

second("khush", 0)
second("khush", 1)
second("khush", 5)
