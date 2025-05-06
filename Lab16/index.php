<?php
$host = "localhost";
$user = "root"; 
$password = "khush@9001";
$database = "lab";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$text_input = $_POST['text_input'];
$number_input = $_POST['number_input'];
$email_input = $_POST['email_input'];
$password_input = $_POST['password_input'];
$date_input = $_POST['date_input'];
$time_input = $_POST['time_input'];
$color_input = $_POST['color_input'];
$range_input = $_POST['range_input'];
$checkbox_input = isset($_POST['checkbox_input']) ? 1 : 0;
$radio_input = $_POST['radio_input'];
$dropdown_input = $_POST['dropdown_input'];
$textarea_input = $_POST['textarea_input'];

$stmt = $conn->prepare("INSERT INTO user_data (text_input, number_input, email_input, password_input, date_input, time_input, color_input, range_input, checkbox_input, radio_input, dropdown_input, textarea_input) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sisssssiiiss", 
    $text_input, 
    $number_input, 
    $email_input, 
    $password_input, 
    $date_input, 
    $time_input, 
    $color_input, 
    $range_input, 
    $checkbox_input, 
    $radio_input, 
    $dropdown_input, 
    $textarea_input
);

if ($stmt->execute()) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();

$result = $conn->query("SELECT * FROM user_data");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<pre>";
        var_dump($row);
        echo "</pre><hr>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>

