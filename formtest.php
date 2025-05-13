<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);

    // Display thank-you message
    echo "<h2>Thank you, $firstName $lastName, for signing up!</h2>";
} else {
    // Display the form
    ?>

    <h2>Sign-Up Form</h2>
    <form action="" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

<?php
}
?>

</body>
</html>
