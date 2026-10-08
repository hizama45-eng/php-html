<?php
$title = "Katalog Siswa";
include 'header.php';

$siswa = [
    ["nama" => "Andi", "kelas" => "X", "nilai" => 85],
    ["nama" => "Budi", "kelas" => "XI", "nilai" => 78],
    ["nama" => "Citra", "kelas" => "XII", "nilai" => 92],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $siswa[] = [
        "nama" => $_POST['nama'] ?? '',
        "kelas" => $_POST['kelas'] ?? '',
        "nilai" => (int)($_POST['nilai'] ?? 0),
    ];
}

$filter = $_GET['kelas'] ?? '';
$view = $filter
    ? array_filter($siswa, fn($s) => $s['kelas'] === $filter)
    : $siswa;
?>

<h2>Tambah Siswa</h2>
<form method="POST">
    <label for="nama"></label>
    <input type="text" name="nama" placeholder="Nama" required>

    <select name="kelas" required>
        <option value="">-- Kelas --</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select>

    <input type="number" name="nilai" placeholder="Nilai" min="0" max="100" required>
    <button>Tambah</button>
</form>

<h2>Daftar Siswa
    <?php if ($filter) echo "(Kelas $filter)"; ?>
</h2>
<p>
    <label for="">Filter: </label>
    <a href="?">Semua</a> |
    <a href="?kelas=X">X</a> |
    <a href="?kelas=XI">XI</a> |
    <a href="?kelas=XII">XII</a>
</p>

<table border="1" cellpadding="6">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Status</th>
    </tr>
    <?php foreach (array_values($view) as $i => $s): ?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td><?= htmlspecialchars($s['nama']) ?></td>
        <td><?= $s['kelas'] ?></td>
        <td><?= $s['nilai'] ?></td>
        <td><?= $s['nilai'] >= 75 ? 'Lulus' : 'Tidak Lulus' ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include 'footer.php'; ?>