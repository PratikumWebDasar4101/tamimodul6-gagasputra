<?php
require_once('connect.php');
include("header.php");
if(isset($_SESSION['nim'])) {
    $nim = $_SESSION['nim'];
    $database = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($connect, $database);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Menu Awal </title>
</head>
<body>
    <pre>
        <center><h1> Selamat Datang <br><br><?php echo $row['nama']; ?></h1> <br> 
        <table border="1" style="border-spacing: 0; width:100%; text-align:center;">
            <tr>
                <th style="padding: 1%; width:10%;"> NIM </th>
                <th style="padding: 1%;"> Kelas </th>
                <th style="padding: 1%;"> Jenis Kelamin </th>
                <th style="padding: 1%;"> Hobbi </th>
                <th style="padding: 1%;"> Fakultas </th>
                <th style="padding: 1%;"> Alamat </th>
            </tr>
            <tr>
                <td style="padding: 1%;"><?php echo $row['nim']; ?></td>
                <td style="padding: 1%;"><?php echo $row['kelas']; ?></td>
                <td style="padding: 1%;"><?php echo $row['jk']; ?></td>
                <td style="padding: 1%;"><?php echo $row['hobi']; ?></td>
                <td style="padding: 1%;"><?php echo $row['fakultas']; ?></td>
                <td style="padding: 1%;"><?php echo $row['alamat']; ?></td>
            </tr>
        </table>
        </center>
    </pre>
</body>
</html>

<?php
    }
?>