<?php
session_start();

// Inisialisasi data buku jika belum ada
if (!isset($_SESSION['buku'])) {
    $_SESSION['buku'] = [
        ['judul' => 'Berserk', 'pengarang' => 'Miura Kentaro'],
        ['judul' => 'Oswald', 'pengarang' => 'Walt Disney']
    ];
}

// Fungsi untuk menampilkan data buku
function tampilData() {
    if (empty($_SESSION['buku'])) {
        echo "<p>Data buku kosong.</p>";
    } else {
        echo "<table border='1'>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                </tr>";
        foreach ($_SESSION['buku'] as $index => $buku) {
            echo "<tr>
                    <td>{$buku['judul']}</td>
                    <td>{$buku['pengarang']}</td>
                  </tr>";
        }
        echo "</table>";
    }
}

// Fungsi untuk menambah data buku
function tambahData($judul, $pengarang) {
    $_SESSION['buku'][] = [
        'judul' => $judul,
        'pengarang' => $pengarang
    ];
}

// Fungsi untuk menghapus data buku
function hapusData($index) {
    unset($_SESSION['buku'][$index]);
    $_SESSION['buku'] = array_values($_SESSION['buku']); // Reindex array
}

// Fungsi untuk mengedit data buku
function editData($index, $judul, $pengarang) {
    $_SESSION['buku'][$index] = [
        'judul' => $judul,
        'pengarang' => $pengarang
    ];
}

// Fungsi untuk mencari data buku berdasarkan judul
function cariData($keyword) {
    $hasil = [];
    foreach ($_SESSION['buku'] as $buku) {
        if (strpos(strtolower($buku['judul']), strtolower($keyword)) !== false) {
            $hasil[] = $buku;
        }
    }
    return $hasil;
}

// Proses form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];

    if (isset($_POST['tambah'])) {
        tambahData($judul, $pengarang);
    } elseif (isset($_POST['edit'])) {
        editData($_POST['index'], $judul, $pengarang);
    }
}

if (isset($_GET['hapus'])) {
    hapusData($_GET['hapus']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Data Buku</title>
</head>
<body>
    <h1>Manajemen Data Buku</h1>

    <h2>Menampilkan Data Awal:</h2>
    <?php tampilData(); ?>

    <h2>Menambah Buku Baru</h2>
    <form method="POST">
        <p>
            <label>Judul:</label>
            <input type="text" name="judul" required>
        </p>
        <p>
            <label>Penulis:</label>
            <input type="text" name="pengarang" required>
        </p>
        <p>
            <button type="submit" name="tambah">Tambah Buku</button>
        </p>
    </form>

    <h2>Memperbarui Buku (contoh update ID ke-2)</h2>
    <?php
    if (isset($_SESSION['buku'][1])) {
        editData(1, 'Naruto', 'Masashi Kishimoto');
        tampilData();
    }
    ?>

    <h2>Menghapus Buku dengan ID ke-1:</h2>
    <?php
    if (isset($_SESSION['buku'][0])) {
        hapusData(0);
        tampilData();
    }
    ?>

    <h2>Mencari Buku dengan kata kunci 'Naruto':</h2>
    <?php
    $hasilPencarian = cariData('Naruto');
    if (empty($hasilPencarian)) {
        echo "<p>Tidak ada data yang ditemukan.</p>";
    } else {
        echo "<table border='1'>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                </tr>";
        foreach ($hasilPencarian as $buku) {
            echo "<tr>
                    <td>{$buku['judul']}</td>
                    <td>{$buku['pengarang']}</td>
                  </tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
