<?php
$mahasiswa = [
["Azmi", "0803012", "sistem Informasi", "Azmi@gmail.com"];
["novita", "5989343", "hukum", "novita@gmail.com"];
["Desi", "0804938", "tarbiyah", "Desi@gmail.com"];
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coba</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?php echo $mhs[0]; ?></li>
      <li><?php echo $mhs[1]; ?></li>
      <li><?php echo $mhs[2]; ?></li>
      <li><?php echo $mhs[3]; ?></li>
     <?php endforeach; ?>
    </ul>
</body>
</html>