<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dummy credentials
    $valid_username = "DIAHIRO";
    $valid_password = "password123"; // Replace with hashed password in real apps
    
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful! <br>";
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>"; // Not recommended to display!
        // Redirect or handle logged-in session
    } else {
        echo "Invalid username or password!<br>";
        echo "Entered Username: " . htmlspecialchars($username) . "<br>";
        echo "Entered Password: " . htmlspecialchars($password) . "<br>"; // For demonstration only!
    }
}
?>
