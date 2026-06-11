<?php
require '../config/koneksi.php';
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit;
}

/* TOTAL RIWAYAT */
$total = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM riwayat_diagnosa");
$dataTotal = mysqli_fetch_assoc($total);

/* DATA RIWAYAT */
$riwayat = mysqli_query($koneksi, "SELECT * FROM riwayat_diagnosa ORDER BY id_riwayat DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>
<link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>

<!-- ORANGE BACKGROUND -->
<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>

<div class="dashboard-container">

    <!-- HEADER -->
    <div class="dashboard-header">

        <div class="header-flex">
            <img src="https://cdn-icons-png.flaticon.com/512/2966/2966486.png" class="logo-kesehatan">

            <div>
                <h1>Dashboard CatClinic</h1>
                <p>Selamat datang, <?= $_SESSION['admin']; ?></p>
            </div>
        </div>

    </div>

    <!-- STAT + BUTTON -->
    <div class="top-box">

        <div class="card-box">
            <h2><?= $dataTotal['total']; ?></h2>
            <p>Total Diagnosa</p>
        </div>

        <!-- BUTTON GROUP -->
        <div class="btn-group">

            <a href="../index.php" class="btn-back">
                ⬅ Kembali ke Beranda
            </a>

            <a href="laporan.php" class="btn-laporan">
                📄 Cetak Laporan PDF
            </a>

        </div>

    </div>

    <!-- TABLE -->
    <div class="table-box">

        <h2>Riwayat Diagnosa</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemilik</th>
                    <th>Kucing</th>
                    <th>Jenis</th>
                    <th>Usia</th>
                    <th>Hasil</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
            <?php $no = 1; while($row = mysqli_fetch_assoc($riwayat)) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_pemilik']; ?></td>
                    <td><?= $row['nama_kucing']; ?></td>
                    <td><?= $row['jenis_kucing']; ?></td>
                    <td><?= $row['usia_kucing']; ?></td>
                    <td><?= $row['hasil_penyakit']; ?></td>
                    <td><?= $row['tanggal_diagnosa']; ?></td>
                </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>

</div>

</body>
</html>