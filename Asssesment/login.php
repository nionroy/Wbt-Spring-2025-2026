<?php
$usernameErr = $passErr = "";
$username = $pass = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Username (Email)
    if (empty($_POST["username"])) {
        $usernameErr = "Email is required";
    } else {
        $username = cleanInput($_POST["username"]);
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $usernameErr = "Invalid email format";
        }
    }

    // Password
    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else {
        $pass = cleanInput($_POST["password"]);
        if (strlen($pass) < 8) {
            $passErr = "Password must be at least 8 characters";
        }
    }

    // Simple login check (static)
    if ($username == "test@gmail.com" && $pass == "12345678") {
        echo "<h3 style='color:green;'>Login Successful</h3>";
    } else {
        if ($usernameErr == "" && $passErr == "") {
            echo "<h3 style='color:red;'>Invalid Username or Password</h3>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>

    <style>
    body {
        background-color: #f2f2f2;
        font-family: Arial;
    }

    form {
        background: white;
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px gray;
    }

    h2 {
        text-align: center;
    }
    </style>

</head>
<body>

<h2>Login Form</h2>
 <div style="text-align:center; background:#fff3cd; padding:10px; width:300px; margin:10px auto; border-radius:8px; border:1px solid #ffeeba;">
    <b>Demo Login Info</b><br>
    Email: test@gmail.com <br>
    Password: 12345678
</div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Email: <br>
    <input type="text" name="username" value="<?php echo $username; ?>">
    <span style="color:red;">* <?php echo $usernameErr; ?></span>
    <br><br>

    Password: <br>
    <input type="password" name="password">
    <span style="color:red;">* <?php echo $passErr; ?></span>
    <br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>