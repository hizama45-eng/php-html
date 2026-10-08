<?php
    $judul = "Belajar PHP";
    $salam = "Halo dari PHP";
?>

<!doctype html>
<html lang='id'>

<head>
 <title><?php echo "$judul"; ?> </title>
</head>

<body>
 <h1><?php echo "$salam"; ?></h1>


<form method="GET">

 <label for="Nama">Nama:</label>
 <input type="text" id="Nama" name="nama">

 <label for="Kelas">Kelas:</label>
 
 <select id="Kelas" name="kelas">
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
 </select>

 <button type="submit">Kirim</button>
</form>

<?php
if (isset($_GET['nama'], $_GET['kelas'])) {
  echo "<p>Halo, " .  $_GET["nama"] . " dari Kelas " .  $_GET["kelas"] .  "!</p>";
}
?>

</body>
</html>