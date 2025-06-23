<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (empty($name) || empty($email) || empty($phone)) {
    echo "All fields are required!";
} else {
    echo "<h2>Submitted Data (POST Method)</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
}
?>
