function second() {
    time = new Date().getHours();
    console.log(time)
    if (time >= 0 && time < 12) {
        console.log("Good morning");
    } else if (time >= 12 && time < 18) {
        console.log("Good afternoon");
    } else {
        console.log("Good evening");
    }
}

second()
