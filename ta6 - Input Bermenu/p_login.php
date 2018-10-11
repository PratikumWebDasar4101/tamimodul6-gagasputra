<?php
require("connect.php");
session_start();
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $database   = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
    $result     = mysqli_query($connect, $database);
 
    if (mysqli_num_rows($result) == 1) {
        $db_mhs     = "SELECT nim, nama FROM mahasiswa WHERE username = '$username'";
        $result_mhs = mysqli_query($connect, $db_mhs);
        $row        = mysqli_fetch_assoc($result_mhs);
        
        $_SESSION['sukses'] = "Login";
        $_SESSION['nim'] = $row['nim'];
        $_SESSION['nama'] = $row['nama'];
        header("Location: halamanawal.php");
    } else {
        ?>
        <script type="text/javascript">
            alert("Username atau Password Salah!");
            location= "index.php";
        </script>
        <?php
    }
}
?>