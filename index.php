<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CatClinic - Sistem Pakar Diagnosa Penyakit Kucing</title>

<link rel="stylesheet" href="assets/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<!-- ===================================
     NAVBAR
=================================== -->

<nav class="navbar">

    <div class="logo">
        CAT<span>CLINIC</span>
    </div>

    <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#informasi">Informasi Penyakit</a></li>
        <li><a href="pages/diagnosa.php">Mulai Diagnosa</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="admin/login.php">Login Admin</a></li>
    </ul>

</nav>

<!-- ===================================
     HERO SECTION
=================================== -->

<section class="hero" id="beranda">

    <div class="hero-text">

        <h1>
            SISTEM PAKAR<br>
            DIAGNOSA PENYAKIT<br>
            KUCING
        </h1>

        <p>
            Membantu pemilik kucing mengenali gejala penyakit secara dini
            menggunakan metode Forward Chaining sehingga penanganan dapat
            dilakukan lebih cepat dan tepat.
        </p>

        <div class="button-group">

            <a href="pages/diagnosa.php" class="btn-primary">
                Mulai Diagnosa
            </a>

            <a href="#informasi" class="btn-secondary">
                Informasi Penyakit
            </a>

        </div>

    </div>

    <div class="hero-image">

        <div class="circle"></div>

        <img src="assets/images/kucing.jpeg" alt="Kucing">

    </div>

</section>

<!-- ===================================
     INFORMASI PENYAKIT (Knowledge Based)
=================================== -->

<section class="informasi" id="informasi">

    <h2>Informasi Penyakit Kucing</h2>

    <div class="card-container">

        <!-- P1 -->
        <div class="card">
            <h3>Flu Kucing (Feline Flu)</h3>
            <p>
                Penyakit yang menyerang saluran pernapasan kucing.
            </p>

            <details>
                <summary>Gejala</summary>
                <ul>
                    <li>Bersin</li>
                    <li>Demam</li>
                    <li>Mata berair</li>
                    <li>Hidung berair</li>
                </ul>
            </details>

            <details>
                <summary>Pencegahan</summary>
                <p>
                    Menjaga kebersihan lingkungan,
                    memberikan vaksinasi,
                    dan makanan bergizi.
                </p>
            </details>
        </div>

        <!-- P2 -->
        <div class="card">
            <h3>Scabies</h3>

            <p>
                Penyakit kulit akibat serangan tungau.
            </p>

            <details>
                <summary>Gejala</summary>

                <ul>
                    <li>Gatal-gatal</li>
                    <li>Kerontokan bulu</li>
                    <li>Kulit kemerahan</li>
                </ul>

            </details>

            <details>
                <summary>Pencegahan</summary>

                <p>
                    Menjaga kebersihan kandang
                    dan memeriksakan kucing secara berkala.
                </p>

            </details>

        </div>

        <!-- P3 -->

        <div class="card">

            <h3>Cacingan</h3>

            <p>
                Infeksi cacing pada saluran pencernaan kucing.
            </p>

            <details>
                <summary>Gejala</summary>

                <ul>
                    <li>Perut buncit</li>
                    <li>Berat badan menurun</li>
                    <li>Nafsu makan meningkat</li>
                </ul>

            </details>

            <details>

                <summary>Pencegahan</summary>

                <p>
                    Memberikan obat cacing secara rutin.
                </p>

            </details>

        </div>

        <!-- P4 -->

        <div class="card">

            <h3>Gangguan Pencernaan</h3>

            <p>
                Gangguan pada sistem pencernaan kucing.
            </p>

            <details>

                <summary>Gejala</summary>

                <ul>
                    <li>Muntah</li>
                    <li>Diare</li>
                    <li>Lemas</li>
                </ul>

            </details>

            <details>

                <summary>Pencegahan</summary>

                <p>
                    Memberikan makanan sehat dan air bersih.
                </p>

            </details>

        </div>

        <!-- P5 -->

        <div class="card">

            <h3>Infeksi Telinga</h3>

            <p>
                Gangguan kesehatan yang menyerang telinga kucing.
            </p>

            <details>

                <summary>Gejala</summary>

                <ul>
                    <li>Telinga berbau</li>
                    <li>Sering menggaruk telinga</li>
                    <li>Keluar cairan</li>
                </ul>

            </details>

            <details>

                <summary>Pencegahan</summary>

                <p>
                    Membersihkan telinga secara berkala.
                </p>

            </details>

        </div>

        <!-- P6 -->

        <div class="card">

            <h3>Jamur Kulit</h3>

            <p>
                Infeksi jamur yang menyerang kulit kucing.
            </p>

            <details>

                <summary>Gejala</summary>

                <ul>
                    <li>Bercak botak</li>
                    <li>Kulit bersisik</li>
                    <li>Gatal</li>
                </ul>

            </details>

            <details>

                <summary>Pencegahan</summary>

                <p>
                    Menjaga kebersihan tubuh dan kandang.
                </p>

            </details>

        </div>

        <!-- P7 -->

        <div class="card">

            <h3>Kutu Kucing</h3>

            <p>
                Gangguan akibat infestasi kutu pada tubuh kucing.
            </p>

            <details>

                <summary>Gejala</summary>

                <ul>
                    <li>Gatal berlebihan</li>
                    <li>Luka bekas garukan</li>
                    <li>Terdapat kutu pada bulu</li>
                </ul>

            </details>

            <details>

                <summary>Pencegahan</summary>

                <p>
                    Menggunakan obat anti kutu dan menjaga kebersihan.
                </p>

            </details>

        </div>

    </div>

</section>

<!-- ===================================
     TENTANG
=================================== -->

<section class="tentang" id="tentang">

    <h2>Tentang CatClinic</h2>

    <p>
        CatClinic merupakan sistem pakar berbasis web yang membantu
        pengguna melakukan identifikasi awal penyakit kucing
        berdasarkan gejala yang dipilih menggunakan metode
        Forward Chaining.
    </p>

    <div class="team-grid">

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Aldi Rizkiansyah</h4>
        </div>

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Muhamad Farhan Rizki</h4>
        </div>

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Rosyad</h4>
        </div>

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Reza Apriandi</h4>
        </div>

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Sahrul Julistiawan</h4>
        </div>

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Jujun Sahroni</h4>
        </div>

        <div class="member">
            <i class="fas fa-user-circle"></i>
            <h4>Tinton Despi Alkhifari</h4>
        </div>

    </div>

</section>

<footer>

    <h3>CatClinic</h3>

    <p>
        Sistem Pakar Diagnosa Penyakit Kucing
        Menggunakan Metode Forward Chaining
    </p>

    <p>
        © 2026 CatClinic
    </p>

</footer>

</body>
</html>