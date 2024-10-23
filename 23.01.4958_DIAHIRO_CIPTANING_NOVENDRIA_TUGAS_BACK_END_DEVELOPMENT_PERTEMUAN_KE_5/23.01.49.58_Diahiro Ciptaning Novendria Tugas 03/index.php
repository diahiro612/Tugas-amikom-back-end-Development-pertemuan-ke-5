<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        .login-form {
            width: 300px;
            margin-left: 30px;
        }
        .login-form input[type="text"], .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form input[type="submit"] {
            background-color: #dc3545;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #c82333;
        }
        .login-form a {
            text-decoration: none;
            color: #007bff;
            margin-top: 10px;
            display: block;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
        .image-section img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="image-section">
            <img src="https://i.pinimg.com/originals/e5/35/24/e535248b78ee83e56bbc28efbe13696b.jpg" alt="Child">
        </div>
        <div class="login-form">
            <form action="login.php" method="post">
                <h2>Sign into your account</h2>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="root" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="root" required>
                <input type="submit" value="Login">
                <a href="#">Forgot password?</a>
                <a href="#">Don't have an account? <b>Register here</b></a>
            </form>
        </div>
    </div>
</body>
</html>