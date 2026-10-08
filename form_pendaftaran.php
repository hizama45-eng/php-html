<?php
    $judul = "Pendaftaran Siswa";
    $salam = "Form Pendaftaran Siswa";
?>

<!doctype html>
<html lang='id'>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1><?php echo $salam; ?></h1>

    <form method="POST">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" required><br>
        <label for="email">Email: </label>
        <input type="email" name="email" required><br>
        <label for="kelas">Kelas: </label>
        <select name="kelas" required>
            <option value=""> PILIH KELAS </option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select><br>

        <button type="submit">Daftar</button>
    </form>

    <?php
    if (isset($_POST['nama'], $_POST['email'], $_POST['kelas'])) {
        echo "<h2>Data Pendaftaran</h2>";
        echo "<p>Nama: " . $_POST['nama'] . "</p>";
        echo "<p>Email: " . $_POST['email'] . "</p>";
        echo "<p>Kelas: " . $_POST['kelas'] . "</p>";
    }
    ?>

</body>
</html>