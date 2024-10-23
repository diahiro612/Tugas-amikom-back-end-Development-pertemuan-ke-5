<?php
session_start(); // Start session for managing user login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $db_username = "root";
    $db_password = ""; // Adjust this to your actual DB password
    $dbname = "tugas_pertemuan_5"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if user exists
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username_db, $password_db);
        $stmt->fetch();

        // Check if passwords match (use password_hash in real implementations)
        if ($password === $password_db) {
            // Store user session and redirect to dashboard
            $_SESSION['username'] = $username_db;
            header("Location: dashboard.php"); // Redirect to a dashboard page
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
    
    $stmt->close();
    $conn->close();
}
?>
