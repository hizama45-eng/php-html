<?php

$siswa = [
    ["nama" => "Andi", "kelas" => "X", "nilai" => 85],
    ["nama" => "Budi", "kelas" => "XI", "nilai" => 78],
    ["nama" => "Citra", "kelas" => "XII", "nilai" => 92],
    ["nama" => "Ahmad", "kelas" => "XII", "nilai" => 72]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>

    <h1>Daftar Siswa</h1>

    <table border="5";
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;

        foreach ($siswa as $s) {

            if ($s["nilai"] >= 75) {
                $status = "Lulus";
            } else {
                $status = "Tidak Lulus";
            }
        ?>

        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $s["nama"]; ?></td>
            <td><?php echo $s["kelas"]; ?></td>
            <td><?php echo $s["nilai"]; ?></td>
            <td><?php echo $status; ?></td>
        </tr>

        <?php
            $no++;
        }
        ?>

    </table>

</body>
</html>




