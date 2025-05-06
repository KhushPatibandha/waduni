<!DOCTYPE html>
<html>
    <head>
        <title>Lab Form</title>
    </head>
    <body>
        <h2>User Input Form</h2>
        <form action="index.php" method="post">
            Text: <input type="text" name="text_input" required><br><br>

            Number: <input type="number" name="number_input" required><br><br>

            Email: <input type="email" name="email_input" required><br><br>

            Password: <input type="password" name="password_input" required><br><br>

            Date: <input type="date" name="date_input" required><br><br>

            Time: <input type="time" name="time_input" required><br><br>

            Color: <input type="color" name="color_input" required><br><br>

            Range (1–100): <input type="range" name="range_input" min="1" max="100"><br><br>

            Checkbox (Agree?): <input type="checkbox" name="checkbox_input" value="1"><br><br>

            Gender (Radio): 
            <input type="radio" name="radio_input" value="Male" required> Male
            <input type="radio" name="radio_input" value="Female"> Female<br><br>

            Country (Dropdown):
            <select name="dropdown_input" required>
                <option value="">Select</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
            </select><br><br>

            Message: <br>
            <textarea name="textarea_input" rows="5" cols="30" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>

