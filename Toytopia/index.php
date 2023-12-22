<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "juandelacruz" && $password === "juandelacruz") {
        $_SESSION["username"] = $username;
        header("Location: homepage.php");
        exit();
    } else {
        $_SESSION["error"] = "Invalid username or password. Please try again.";
        header("Location: index.php");
        exit();
    }
}

$error = isset($_SESSION["error"]) ? $_SESSION["error"] : "";
unset($_SESSION["error"]); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        @font-face {
            font-family: 'Bold Font';
            src: url('assets/THEBOLDFONT.ttf');
        }

        body {
            font-family: 'Bold Font';
            text-align: center;
            margin: 0;
            padding: 0;
            background: url('assets/toytopia\ wallpaper.svg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .login-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 100vh;
            padding: 0 10%;
        }

        .login-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-box input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
        }

        .login-box img {
            width: 150px;
            height: 150px;
        }

        .login-box button {
            background-color: #1C72C2;
            font-family: 'Bold Font';   
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #FFD72D;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img id="toytopia-logo" src="assets/toytopia logo.png" alt="Toytopia Logo">
            <h2>Login</h2>
            <?php if (isset($error)) : ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="post" action="index.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
