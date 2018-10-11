<?php
    require_once('connect.php');
    include("header.php");
    if(isset($_SESSION['nim'])) {
        $nim = $_SESSION['nim'];
        $database = "SELECT * FROM post WHERE nim = '$nim'";
        $result = mysqli_query($connect, $database);
        $isi = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Postingku </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <pre> <a href="posting.php"><input type="button" value="Tambah Data"></a> 
        <center><h1> Postinganku </h1><hr>
        <?php
        if($isi != 0) {
        ?>
        <table border="1" style="border-spacing: 0; width:100%; text-align:center;">
            <tr>
                <th style="padding: 1%;"> NIM </th>
                <th style="padding: 1%;"> Content </th>
                <th style="padding: 1%;"> Picture </th>
                <th style="padding: 1%;"> Action </th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td style="padding: 1%; width:10%;"><?php echo $row['nim']; ?></td>
                <td style="padding: 1%; width:70%;"><?php echo $row['konten']; ?></td>
                <td style="padding: 1%;"><img src="<?php echo $row['foto'];?>" width=100%;></td>
                <td style="padding: 1%; width: 8%;">
                    <a href="edit_post.php?id=<?php echo $row['id']; ?>"><input type="button" value="Edit"></a><br><br>
                    <a href="delete_post.php?id=<?php echo $row['id'];?>" onclick= "return confirm('Yakin Ingin Menghapus Data ID : <?php echo $row['id']; ?>? ')" style="text-decoration : none;"><input type="button" value="Delete"></a>
                </td>
            </tr>
            <?php
                }
                } else {
                    ?>
                    <pre><center><h3> Data Tidak Ada </h3></center></tr></pre>
                    <?php
                }
            ?>
        </table>
        </center>
    </pre>
    
</body>
</html>

<?php
}
?>