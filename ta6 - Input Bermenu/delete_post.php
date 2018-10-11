<?php
    include("connect.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $database = "DELETE FROM post WHERE id = '$id'";

        if (mysqli_query($connect, $database)) {
            echo "Delete Berhasil";
            header("Location: view.php");
        } else {
            echo "Delete Gagal : ".$database."<br>".mysqli_error($connect);
        }

        mysqli_close($connect);
    }
?>