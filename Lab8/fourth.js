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

fourth("Khush")
fourth("KhushScript")
fourth("KhusScripth")
