<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;

    header("Location: home.php");
    exit;
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Registration Page</title>
</head>
<body>
    <h2>Registration</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Register">
</form>
</body>
</html>