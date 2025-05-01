function first(str) {
    if(str.toLowerCase()[0] == 'j' && str.toLowerCase()[1] == 'a') {
        console.log(str)
        return
    }
    str = "Ja" + str
    console.log(str)
}

first("khush")
first("Jakhush")
