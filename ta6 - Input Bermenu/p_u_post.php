<?php
require_once("connect.php");

if(isset($_GET['id'])) {
    $konten = $_POST['konten'];

    $foto = $_FILES['file']['name'];
    $tmp_foto = $_FILES['file']['tmp_name'];
    $dir = "foto/";
    $target = $dir.$foto;

    $database = "UPDATE post SET konten = '$konten', foto = '$target' WHERE id = '$id'";
    if (count($max_konten) >= 30) {
        if (move_uploaded_file($tmp_foto, $target) && mysqli_query($connect, $database)) {
            ?>
        <script>
            alert("Posting Berhasil");
            location= "view.php";
        </script>
        <?php
        }
        else {
            ?>
            <script>
                alert("Posting Gagal");
                location= "posting.php";
            </script>
            <?php
        }
        mysqli_close($connect);
    } else {
        ?>
        <script>
            alert("Konten harus lebih dari 30 kata!");
            location = "posting.php";
        </script>
        <?php
    }
}
?>