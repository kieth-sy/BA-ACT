<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    // Demo account
    $correct_username = "admin";
    $correct_password = "1234567";

    if ($username === $correct_username && $password === $correct_password) {

        // Save login session
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        // Go to landing page
        header("Location: index.php");
        exit();

    } else {
        $error = "Incorrect username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | AIM Smile Dental Clinic</title>

    <link rel="stylesheet" href="stylelogin.css">

    <style>
        .error-message {
            background: #fff1f1;
            color: #d93025;
            border: 1px solid #f3b5b5;
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-size: 13px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="form-card">

        <div class="logo">
            <img src="logo.jpg" alt="AIM Smile Dental Clinic">
        </div>

        <h1>AIM Smile</h1>

        <div class="clinic-name">
            DENTAL CLINIC
        </div>

        <h2>Welcome Back!</h2>

        <p class="subtitle">
            Login to your dental care account
        </p>

        <?php if (!empty($error)): ?>
            <div class="error-message">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php">

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    required
                >

            </div>

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>

            <div class="options">

                <label class="remember">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>

                <a href="#">Forgot Password?</a>

            </div>

            <button type="submit">
                Login
            </button>

        </form>

        <p class="account-text">
            Don't have an account?
            <a href="register.php">Register</a>
        </p>

        <p class="account-text" style="margin-top: 10px;">
            <a href="index.php">← Back to Home</a>
        </p>

    </div>

</div>

</body>
</html>