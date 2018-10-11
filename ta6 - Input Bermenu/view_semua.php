<?php
    require_once('connect.php');
    include("header.php");
    if(isset($_SESSION['nim'])) {
        $nim = $_SESSION['nim'];
        $database = "SELECT mahasiswa.nim, nama, konten, foto FROM post JOIN mahasiswa ON mahasiswa.nim = post.nim ";
        $result = mysqli_query($connect, $database);
        $isi = mysqli_num_rows($result);
        if ($isi != 0 ) {
        
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
    <pre>
        <center><h1> Postingan Kita Semua </h1> <br> 
        <table border="1" style="border-spacing: 0; width:100%; text-align:center;">
            <tr>
                <th style="padding: 1%;"> Name </th>
                <th style="padding: 1%;"> NIM </th>
                <th style="padding: 1%;"> Content </th>
                <th style="padding: 1%;"> Picture </th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td style="padding: 1%; width: 30%;"><?php echo $row['nama']; ?></td>
                <td style="padding: 1%; width: 10%;"><?php echo $row['nim']; ?></td>
                <td style="padding: 1%; width: 45%;"><?php echo $row['konten']; ?></td>
                <td style="padding: 1%;"><img src="<?php echo $row['foto'];?>" width=100%;></td>
            </tr>
            <?php
                }
                } else {
                    ?>
                    <pre><center><h1> No Data Available </h1></center></tr></pre>
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