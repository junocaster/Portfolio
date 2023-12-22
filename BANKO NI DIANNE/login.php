<!DOCTYPE html>

<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
    session_start();

    function login(){
        // Hardcoded username and password for demonstration purposes
        $validUsername = "admin";
        $validPassword = "admin123";

        // Get user input
        $enteredUsername = $_POST['uname'];
        $enteredPassword = $_POST['password'];

        // Check if entered username and password match the predefined values
        if ($enteredUsername == $validUsername && $enteredPassword == $validPassword) {
            header("Location: bank.php");
            exit();
            // You can redirect the user to the homepage or perform other actions here
        } else {
            echo '<script>showAlert("Incorrect username or password. Please try again.", false);</script>';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
    login();
    }
}

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Page</title>
    <style type="text/css">
        @font-face {
            font-family: 'Rolata';
            src: url('ROLATE.otf');
        }

        body {
            background: #e2688a;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 70%;
            border-radius: 10px;
            overflow: hidden;
            height: 80vh; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .left-section {
            flex: 1;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background:  linear-gradient(-45deg, #FFFDD0, #FAAAC9, #F294B4, #E2688A, #D85375, #E2688A, #F294B4, #FAAAC9, #FFFDD0);
            background-size: 400% 400%; /* Increase the size for a smoother effect */
            animation: gradientChange 7s infinite; /* Adjust the duration as needed */
        }

        @keyframes gradientChange {
            0% {
                background-position: 0% 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .left-content {
            color: white;
            text-align: center;
        }

        .right-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: #f3f5f9;
            background-size: 400% 400%;
        }

        h1 {
            text-align: center;
            color: #d85375;
            font-family: 'Rolate';
        }

        .input {
            font-size: 15px;
            text-align: left;
            color:   #D85375;
            padding: 20px;
            border-radius: 5%;
            width: 100%;
            max-width: 400%; 
        }

        input[type=text], input[type=password] {
            font-family: 'Noticia Text', serif;
            font-weight: bold;
            color: #2F5755;
            padding: 10px 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid  #D85375;; 
            width: 100%;
        }

        .login {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .login-content {
        text-align: center;
        }

        .login .log{
            border: none;
        }

        .login-image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 110px;
        height: 110px;
        margin-bottom: 10px;        
        }
        
        input[type="submit"] {
            background-color: #d85375;
            text-align: center;
            font-family: 'Rubik Mono One', sans-serif;
            color: white;
            padding: 10px;
            width: 100%;
            font-size: 20px;
            border-radius: 50px;
            border: 2px solid #D85375;;
            cursor: pointer;
        }

        .input .remember {
            font-size: 11.5px;
            font-family: Verdana, sans-serif;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: left;
            justify-content: left;
        }

        .container {
            margin-top: 5px;
            font-size: 11.5px;
            font-family: Verdana, sans-serif;
            text-align: center;
            margin-top: 5px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function showAlert(message, isSuccess) {
            Swal.fire({
                title: isSuccess ? 'Success' : 'Error',
                text: message,
                icon: isSuccess ? 'success' : 'error',
                confirmButtonText: 'OK'
            });
        }
    </script>
</head>
<body>


<div class="container">
    <div class="left-section">
        <div class="left-content">
            <!-- Placeholder content for the left section -->
            <div class="image-cover"><img src="cover photo.png"></div>
        </div>
    </div>
    <div class="right-section">
        <div class="input">
            <img class="login-image" src="bndlogo.png" alt="BND Logo">
            <h1>LOGIN</h1>
            <form action="" method="post">
                Username: <input type="text" class="textfield" placeholder="Enter Username" name="uname" required><br>
                Password: <input type="password" class="pass" id="password" placeholder="Enter Password" name="password" required><br>
                <div class="remember">
                    <input type="checkbox" onchange="togglePasswordVisibility()">Show Password
                </div>
                <div class="login">
                    <input type="submit" class="log" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

</body>
</html>
