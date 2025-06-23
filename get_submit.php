<?php
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];

if (empty($name) || empty($email) || empty($phone)) {
    echo "All fields are required!";
} else {
    echo "<h2>Submitted Data (GET Method)</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
}
?>
