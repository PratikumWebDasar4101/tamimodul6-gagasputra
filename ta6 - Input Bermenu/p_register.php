<?php
require("connect.php");

// Proses Registrasi

    if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $database = "INSERT INTO akun VALUES ('$username','$password');";
    $database .= "INSERT INTO mahasiswa(username, nim, nama) VALUES ('$username', '$nim','$nama');";

    if(mysqli_multi_query($connect, $database)) {
        ?>
        <script>
             alert("Registrasi Berhasil");
            location= "index.php";
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert("User Sudah Terdaftar");
            location= "register.php";
        </script>
        <?php
    }
    mysqli_close($connect);
}
?>