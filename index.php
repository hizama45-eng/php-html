<?php
    $judul = "Belajar PHP";
    $salam = "Halo dari PHP!";
?>

<!doctype html>
<html lang='id'>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1><?php echo $salam; ?></h1>

    <?php
    $nama = "Hizam Ahmad AL Ghifari";
    $umur = 18;
    $tentang = "Saya suka <b> ovt </b>";
    $sekolah = "SMKN 1 Pacitan";
    $hobi = "Mendengarkan musik";
    $citacita = "Orang Sukses, kaya, dan bahagia";
    ?>

    <p>Nama: <?php echo $nama; ?></p>
    <p>Umur: <?php echo $umur; ?></p>
    <p>Tentang: <?php echo $tentang; ?></p>
    <p>Sekolah: <?php echo $sekolah; ?></p>
    <p>Hobi: <?php echo $hobi; ?></p>
    <p>Cita-cita: <?php echo $citacita; ?></p>

</body>
</html>