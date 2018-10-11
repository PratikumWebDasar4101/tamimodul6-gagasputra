<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Register </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<pre>
    <center>    
    <form method="post" action="p_register.php" class="login">
    <h1>  REGISTRASI </h1><hr>
    Username    : <input type="text" name="username" id="input"><br><br>
    Password    : <input type="password" name="password" id="input"><br><br>
    NIM         : <input type="text" name="nim" pattern="\d*" maxlength="10"><br><br>
    Nama        : <input type="text" name="nama" id="input" required><br><br>
    <input type="submit" name="submit" id="submitreg" value="REGISTER" >
    </form>
    <hr>
    <a href="index.php"><input type="button" id="logreg" value="LOGIN" ></a>
    </center>
</pre>
</body>
</html>

