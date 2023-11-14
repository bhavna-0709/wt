<?php
// Connect to the database
// $servername = "your_database_server";
// $username = "your_database_username";
// $password = "your_database_password";
// $dbname = "your_database_name";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Retrieve the form data
$name = $_POST['nameInput'];
$password = $_POST['passwordInput'];
$confirmPassword = $_POST['confirmPasswordInput'];
$optionalField = $_POST['optionalInput'];

// Validate password strength
if (!isStrongPassword($password)) {
    die("Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.");
}

// Check if the password and confirm password match
if ($password !== $confirmPassword) {
    die("Password and Confirm Password do not match.");
}

// Check if the name is in the database
// $sql = "SELECT * FROM your_table_name WHERE name = '$name'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     die("Name '$name' is already registered.");
// }

// // Insert user data into the database
// $sql = "INSERT INTO your_table_name (name, password, optional_field) VALUES ('$name', '$password', '$optionalField')";

// if ($conn->query($sql) === TRUE) {
//     echo "User registered successfully.";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close the database connection
// $conn->close();

function isStrongPassword($password) {
    // Add your own password strength criteria
    $strongPasswordRegex = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$";
    return preg_match($strongPasswordRegex, $password);
}
?>
