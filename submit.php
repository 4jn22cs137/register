<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = nl2br(htmlspecialchars($_POST['address']));

    // Display the submitted data
    echo "<div class='container'>";
    echo "<h1>Registration Successful</h1>";
    echo "<div class='success-message'>Thank you for registering! Here are the details you submitted:</div>";

    echo "<h3>Your Information</h3>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "</div>";
} else {
    echo "<div class='error-message'>Form submission failed. Please try again.</div>";
}
?>
