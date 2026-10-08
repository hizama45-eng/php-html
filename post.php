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
    <form method='POST'>
        <input name='user' placeholder='username' required>
        <input name='pass' type='password' placeholder='password' required>
    <button>Login</button>
</form>

<?php

 if (isset($_POST['user'], $_POST['pass'])) {

if (isset($_POST['user']) && $_POST['user'] === 'admin' && isset($_POST['pass']) && $_POST['pass'] === '12345') {
     echo "<p>Login berhasil</p>";

} else {
     echo "<p>Username atau password salah</p>";
}

 }
?>

</body>
</html>