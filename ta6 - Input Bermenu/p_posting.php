<?php
    require("connect.php");
    session_start();

    if(isset($_POST['konten'])) {
        $konten = $_POST['konten'];
        $nim = $_SESSION['nim'];

        $foto = $_FILES['file']['name'];
        $tmp_foto = $_FILES['file']['tmp_name'];
        $dir = "foto/";
        $target = $dir.$foto;

        $max_konten = explode(" ", $konten);

        $database = "INSERT INTO post(nim,konten,foto) VALUES ('$nim','$konten','$target')";

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
                    alert("Silahkan Input Gambar");
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