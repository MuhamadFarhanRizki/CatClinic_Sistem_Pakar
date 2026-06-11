<?php
require '../config/koneksi.php';

$riwayat = mysqli_query($koneksi, "SELECT * FROM riwayat_diagnosa ORDER BY id_riwayat DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Laporan CatClinic</title>

<style>
    body {
        font-family: Arial;
        padding: 20px;
        background: white;
    }

    h2 {
        text-align: center;
        color: #f59e0b;
        margin-bottom: 20px;
    }

    /* TOP BAR */
    .top-bar {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    /* BUTTON */
    .btn {
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        transition: 0.2s;
    }

    /* ORANGE SOLID BUTTON */
    .back-btn,
    .print-btn {
        background: #f59e0b;
        color: white;
    }

    .btn:hover {
        opacity: 0.85;
        transform: scale(1.03);
    }

    /* TABLE */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th {
        background: #f59e0b;
        color: white;
        padding: 10px;
    }

    table td {
        padding: 10px;
        border: 1px solid #eee;
    }

    /* HILANG SAAT PRINT */
    @media print {
        .no-print {
            display: none;
        }
    }
</style>

</head>

<body>

<h2>📄 Laporan Riwayat Diagnosa CatClinic</h2>

<div class="top-bar no-print">

    <!-- KEMBALI -->
    <a href="dashboard.php" class="btn back-btn">
        ← Kembali ke Dashboard
    </a>

    <!-- PRINT -->
    <button class="btn print-btn" onclick="window.print()">
        🖨 Cetak / Simpan PDF
    </button>

</div>

<table>

    <tr>
        <th>No</th>
        <th>Pemilik</th>
        <th>Kucing</th>
        <th>Jenis</th>
        <th>Usia</th>
        <th>Hasil</th>
        <th>Tanggal</th>
    </tr>

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

</table>

</body>
</html>