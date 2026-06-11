<?php
session_start();

if (!isset($_SESSION['hasil'])) {
    header("Location: diagnosa.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Hasil Diagnosa - CatClinic</title>

<link rel="stylesheet" href="../assets/css/hasil.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <div class="logo">
        CAT<span>CLINIC</span>
    </div>

    <a href="../index.php" class="btn-home">
        Beranda
    </a>

</nav>

<!-- =========================
     HASIL DIAGNOSA
========================= -->

<section class="hasil-container">

    <!-- KIRI -->

    <div class="hasil-card">

        <span class="badge">
            HASIL DIAGNOSA
        </span>

        <h1>
            <?php echo $_SESSION['hasil']; ?>
        </h1>

        <h3>Data Kucing</h3>

        <div class="info">

            <p>
                <strong>Nama Pemilik :</strong>
                <?php echo $_SESSION['nama_pemilik']; ?>
            </p>

            <p>
                <strong>Nama Kucing :</strong>
                <?php echo $_SESSION['nama_kucing']; ?>
            </p>

            <p>
                <strong>Jenis Kucing :</strong>
                <?php echo $_SESSION['jenis_kucing']; ?>
            </p>

            <p>
                <strong>Usia Kucing :</strong>
                <?php echo $_SESSION['usia_kucing']; ?>
            </p>

        </div>

        <h3>Deskripsi Penyakit</h3>

        <p class="deskripsi">
            <?php echo $_SESSION['deskripsi']; ?>
        </p>

        <h3>Saran Penanganan</h3>

        <p class="solusi">
            <?php echo $_SESSION['solusi']; ?>
        </p>

        <div class="button-group">

            <a href="diagnosa.php" class="btn-primary">
                Diagnosa Ulang
            </a>

            <a href="../index.php" class="btn-secondary">
                Kembali
            </a>

        </div>

    </div>

    <!-- KANAN -->

    <div class="cat-animation">

        <div class="circle"></div>

        <img
            src="../assets/images/hasil-cat.jpeg"
            alt="Kucing"
            class="cat-image"
        >

    </div>

</section>

</body>
</html>