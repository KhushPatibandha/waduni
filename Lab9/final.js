function first() {
    randNum = Math.floor(Math.random() * 10) + 1;
    userNum = 0
    rl.question("Enter a number between 1 and 10: ", (input) => {
        userNum = parseInt(input);
        if(userNum == randNum) {
            console.log("Well Done!")
        } else {
            console.log("Sorry")
        }
        rl.close();
    });
}

function second() {
    time = new Date().getHours();
    if (time >= 0 && time < 12) {
        console.log("Good morning");
    } else if (time >= 12 && time < 18) {
        console.log("Good afternoon");
    } else {
        console.log("Good evening");
    }
}

const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

second()

first()
