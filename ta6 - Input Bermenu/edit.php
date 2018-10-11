<?php
    require_once("connect.php");
    include("header.php");

    if(isset($_SESSION['nim'])) {
        $nim = $_SESSION['nim'];
        $database = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $result = mysqli_query($connect, $database);
        $row = mysqli_fetch_assoc($result);
        $pecah_hobi = explode(", ", $row['hobi']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Edit Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="p_edit.php">
        <pre><h1> Edit Profil </h1>
            Nama            : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"> <br>
            NIM             : <input type="text" name="nim" value="<?php echo $row['nim']; ?>" disabled> <br>
            Kelas           : <input type="radio" name="kelas" value="1" <?php if($row['kelas'] == 1){ echo "checked"; }?> > 01 
                              <input type="radio" name="kelas" value="2" <?php if($row['kelas'] == 2){ echo "checked"; }?> > 02 
                              <input type="radio" name="kelas" value="3" <?php if($row['kelas'] == 3){ echo "checked"; }?> > 03 
                              <input type="radio" name="kelas" value="4" <?php if($row['kelas'] == 4){ echo "checked"; }?> > 04 <br>
            Jenis Kelamin   : <input type="radio" name="jk" value="Pria" <?php if($row['jk'] == "Pria"){ echo "checked"; }?> > Pria
                              <input type="radio" name="jk" value="Wanita" <?php if($row['jk'] == "Wanita"){ echo "checked"; }?> > Wanita <br>
            Hobbi           : <input type="checkbox" name="hobi[]" value="Membaca" <?php if(array_search("Membaca", $pecah_hobi) > -1 ){ echo "checked"; }?> > Membaca 
                              <input type="checkbox" name="hobi[]" value="Mewarnai" <?php if(array_search("Mewarnai", $pecah_hobi) > -1 ){ echo "checked"; }?> > Mewarnai 
                              <input type="checkbox" name="hobi[]" value="Menggambar" <?php if(array_search("Menggambar", $pecah_hobi) > -1 ){ echo "checked"; }?> > Menggambar 
                              <input type="checkbox" name="hobi[]" value="Menulis" <?php if(array_search("Membaca", $pecah_hobi) > -1 ){ echo "checked"; }?> > Menulis <br>
            Fakultas        : <select name="fakultas">
                                <option value="FIT" <?php if($row['fakultas'] == "FIT"){ echo "selected"; }?> > FIT </option>
                                <option value="FEB" <?php if($row['fakultas'] == "FEB"){ echo "selected"; }?> > FEB </option>
                                <option value="FIK" <?php if($row['fakultas'] == "FIK"){ echo "selected"; }?> > FIK </option>
                                <option value="FTE" <?php if($row['fakultas'] == "FTE"){ echo "selected"; }?> > FTE </option>
                                <option value="FIF" <?php if($row['fakultas'] == "FIF"){ echo "selected"; }?> > FIF </option>
                                <option value="FKB" <?php if($row['fakultas'] == "FKB"){ echo "selected"; }?> > FKB </option>
                                <option value="FRI" <?php if($row['fakultas'] == "FRI"){ echo "selected"; }?> > FRI </option>
                              </select><br>
            Alamat          : <textarea name="alamat" cols="20" rows="5"><?php echo $row['alamat']; ?></textarea><br>
                              <input type="submit" value="Submit">
        </pre>
    </form>
</body>
</html>

<?php
    }
?>