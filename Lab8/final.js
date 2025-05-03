function first(str) {
    if(str.toLowerCase()[0] == 'j' && str.toLowerCase()[1] == 'a') {
        console.log(str)
        return
    }
    str = "Ja" + str
    console.log(str)
}

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

function third(str) {
    fc = str[0]
    lc = str[str.length - 1]
    str = str.substring(1, str.length - 1);
    str = lc + str + fc
    console.log(str)
}

function fourth(str) {
    if(!str.includes("Script")) {
        console.log(str)
        return
    }
    temp = str.substring(4, 10);
    if(!temp.includes("Script")) {
        console.log(str)
        return
    }
    str = str.substring(0, 4) + str.substring(10);
    console.log(str)
}

first("khush")
first("Jakhush")

second("khush", 0)
second("khush", 1)
second("khush", 5)

third("khush")
third("harsh")

fourth("Khush")
fourth("KhushScript")
fourth("KhusScripth")

