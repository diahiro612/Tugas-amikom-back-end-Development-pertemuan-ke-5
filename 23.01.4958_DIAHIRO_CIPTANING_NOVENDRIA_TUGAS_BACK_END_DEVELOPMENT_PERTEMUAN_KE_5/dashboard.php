<?php
session_start(); // Resume session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

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

// Query to get user data
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #f9f9f9;
            background-image: url('path-to-your-image.jpg'); /* Add your image path here */
            background-size: cover;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: rgba(255, 255, 255, 0.8); /* Makes the cells semi-transparent */
        }

        .header-image {
            background-image: url('https://i.pinimg.com/736x/1b/fe/05/1bfe0520f02cc42368213bc93a33db3d.jpg'); /* Add a header image */
            height: 400px;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>

<div class="header-image"></div> <!-- Add header image -->

<?php
if ($result->num_rows > 0) {
    echo "<h2>Dashboard Data User</h2>";
    echo "<table>
            <tr>
                <th>Nomor</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["password"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<a href="logout.php">Klik disini untuk logout</a> <!-- Add logout functionality -->

</body>
</html>
