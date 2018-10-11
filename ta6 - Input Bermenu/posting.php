<?php
    require("connect.php"); 
    include("header.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Post Story </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="p_posting.php" method="POST" enctype="multipart/form-data">
        <pre><h1> Edit Profil </h1>
            Post Story  : <textarea name="konten" cols="80" rows="20"></textarea><br>
            Foto        : <input type="file" name="file"> <br>
                                    <input type="submit" value="Submit">
        </pre>
    </form>
</body>
</html>