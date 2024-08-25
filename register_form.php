<?php
// process_form.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Print out the form values
    echo "<h2>Form Data Submitted:</h2>";
    echo "password: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
    echo "No form data submitted.";
}
