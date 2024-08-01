<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You can perform further processing or validation here

    // Example: Displaying the form data
    echo "Email: $email<br>";
    echo "Password: $password<br>";
}
?>
