<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = isset($_POST["name"]) ? $_POST["name"] : "Guest";
    $lname = isset($_POST["lname"]) ? $_POST["lname"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
} else {
    $fname = "Guest";
    $lname = "User";
    $email = "example@example.com";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Result</title>
    </head>
    <body>
        <div>
            <h2>Welcome, <?php echo htmlspecialchars($fname); ?>!</h2>
            <p><strong>First Name:</strong> <?php echo htmlspecialchars($fname); ?></p>
            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lname); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <a href="forms.html">Back to Form</a>
        </div>
    </body>
</html>
