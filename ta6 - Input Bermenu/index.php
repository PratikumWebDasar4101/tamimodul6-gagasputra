<?php
    session_start();

    if(isset($_SESSION['sukses'])) {
        header("Location: halamanawal.php");
    }

    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<pre><center>
    <form method="post" action="p_login.php" class="login">
    <h1>  LOGIN </h1><hr>
        Username    : <input type="text" name="username" id="input"><br><br>
        Password    : <input type="password" name="password" id="input"><br><br>
    <input type="submit" name="submit" id="submitlog" value="LOGIN" >
    </form>
    <hr>
    <a href="register.php"><input type="button" id="logreg" value="REGISTER"></a></center>
    </pre>
</body>
</html>

