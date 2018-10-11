<?php
    require("connect.php"); 
    include("header.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $database = "SELECT * FROM post WHERE id = '$id'";
        $result = mysqli_query($connect, $database);
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Edit Story </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="p_u_post.php" method="POST" enctype="multipart/form-data">
        <pre><h1> Edit Story </h1>
            Post Story  : <textarea name="konten" cols="30" rows="10"><?php echo $row['konten']; ?></textarea><br>
            Foto        : <input type="file" name="file"> <br>
                                    <input type="submit" value="Submit">
        </pre>
    </form>
</body>
</html>

<?php
    }
?>