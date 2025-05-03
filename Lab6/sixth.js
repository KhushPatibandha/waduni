function calc() {
    rl.question("Enter first number: ", (num1) => {
        if (isNaN(num1)) {
            console.log("Please enter a valid number")
            calc()
            return;
        }
        rl.question("Enter operator (+, -, *, /): ", (operator) => {
            if(!['+', '-', '*', '/'].includes(operator)) {
                console.log("Please enter a valid operator (+, -, *, /)")
                calc()
                return
            }

            rl.question("Enter second number: ", (num2) => {
                if (isNaN(num2)) {
                    console.log("Please enter a valid number")
                    calc()
                    return;
                }
                const a = parseFloat(num1)
                const b = parseFloat(num2)
                let res
                switch (operator) {
                    case '+':
                        res = a + b
                        break
                    case '-':
                        res = a - b
                        break
                    case '*':
                        res = a * b
                        break
                    case "/":
                        if(b === 0) {
                            console.log("Error: Division by zero is not allowed")
                            calc()
                            return
                        }
                        res = a / b
                        break
                }
                console.log("Answer: ", res)
                rl.question("Do another calc? (y/n): ", (answer) => {
                    if(answer.toLowerCase() === 'y') {
                        calc()
                    } else {
                        rl.close()
                    }
                })
            })
        })
    })
}

const readline = require('readline');
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

calc()
