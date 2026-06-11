<?php
require '../config/koneksi.php';

$dataGejala = mysqli_query($koneksi, "SELECT * FROM gejala ORDER BY kode_gejala ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Diagnosa Penyakit Kucing</title>

<link rel="stylesheet" href="../assets/css/diagnosa.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

<!-- HEADER -->

<div class="header">

    <a href="../index.php" class="back-btn">
        ← Kembali ke Beranda
    </a>

    <h1>Diagnosa Penyakit Kucing</h1>

</div>

<!-- CARD -->

<div class="container">

<form action="proses_diagnosa.php" method="POST">

<div class="card">

    <!-- KIRI -->

    <div class="form-area">

        <h2>Identitas Kucing</h2>

        <label>Nama Pemilik</label>
        <input type="text" name="nama_pemilik" required>

        <label>Nama Kucing</label>
        <input type="text" name="nama_kucing" required>

        <label>Jenis Kucing</label>
        <input type="text" name="jenis_kucing" required>

        <label>Usia Kucing</label>
        <input type="text" name="usia_kucing" required>

    </div>

    <!-- KANAN -->

    <div class="image-area">

        <img src="../assets/images/diagnosa-cat.jpeg">

    </div>

</div>

<!-- GEJALA -->

<div class="gejala-box">

    <h2>Pilih Gejala Yang Dialami</h2>

    <div class="gejala-grid">

        <?php while($g = mysqli_fetch_assoc($dataGejala)) { ?>

            <label class="checkbox-item">

                <input
                    type="checkbox"
                    name="gejala[]"
                    value="<?= $g['kode_gejala']; ?>"
                >

                <?= $g['nama_gejala']; ?>

            </label>

        <?php } ?>

    </div>

</div>

<div class="button-area">

    <button type="submit" class="btn-diagnosa">
        Diagnosa Sekarang
    </button>

</div>

</form>

</div>

</body>
</html>