<?php
require_once("connect.php");
session_start();

$nim = $_SESSION['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];

$list_hobi = implode(", ", $hobi);
$database = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', jk = '$jk', hobi = '$list_hobi', fakultas = '$fakultas', alamat = '$alamat' WHERE nim = '$nim'";
if(mysqli_query($connect, $database)) {
    ?>
    <script>
         alert("Update Berhasil");
        location= "halamanawal.php";
    </script>
    <?php
}
else {
    ?>
    <script>
        alert("Gagal Edit<?php echo mysqli_error($connect) ?>");
        location= "edit.php";
    </script>
    <?php
}
mysqli_close($connect);


?>