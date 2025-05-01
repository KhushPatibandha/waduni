function third(str) {
    fc = str[0]
    lc = str[str.length - 1]
    str = str.substring(1, str.length - 1);
    str = lc + str + fc
    console.log(str)
}

third("khush")
third("harsh")
