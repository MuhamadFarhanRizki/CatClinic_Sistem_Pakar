<?php  

require '../config/koneksi.php';

/* ==========================
   AMBIL DATA FORM
========================== */

$nama_pemilik = $_POST['nama_pemilik'];
$nama_kucing  = $_POST['nama_kucing'];
$jenis_kucing = $_POST['jenis_kucing'];
$usia_kucing  = $_POST['usia_kucing'];

$gejala = $_POST['gejala'] ?? [];

/* ==========================
   FORWARD CHAINING
========================== */

/*
RULE BASED (IF-THEN)

IF gejala yang dipilih pengguna
sesuai dengan gejala pada rule penyakit

THEN penyakit tersebut dianggap
cocok dan dapat dijadikan hasil
diagnosa.

Forward Chaining bekerja dari
fakta (gejala yang dipilih user)
menuju kesimpulan (penyakit).
*/

$hasil_penyakit = "Tidak Diketahui";
$deskripsi = "";
$solusi = "";

$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");

$skor_tertinggi = 0;

while($p = mysqli_fetch_assoc($queryPenyakit))
{
    $kode_penyakit = $p['kode_penyakit'];

    $queryRule = mysqli_query(
        $koneksi,
        "SELECT kode_gejala
         FROM rule
         WHERE kode_penyakit='$kode_penyakit'"
    );

    $total_rule = 0;
    $match = 0;

    while($r = mysqli_fetch_assoc($queryRule))
    {
        $total_rule++;

        /*
        IF gejala pada rule ditemukan
        pada pilihan pengguna

        THEN nilai kecocokan (match)
        akan ditambah
        */

        if(in_array($r['kode_gejala'], $gejala))
        {
            $match++;
        }
    }

    if($total_rule > 0)
    {
        $skor = $match / $total_rule;

        /*
        IF skor penyakit saat ini
        lebih besar dari skor tertinggi

        THEN penyakit tersebut menjadi
        kandidat hasil diagnosa
        */

        if($skor > $skor_tertinggi)
        {
            $skor_tertinggi = $skor;

            $hasil_penyakit = $p['nama_penyakit'];
            $deskripsi = $p['deskripsi'];
            $solusi = $p['solusi'];
        }
    }
}
/* ==========================
   SIMPAN RIWAYAT
========================== */

mysqli_query($koneksi,"
INSERT INTO riwayat_diagnosa
(
nama_pemilik,
nama_kucing,
jenis_kucing,
usia_kucing,
hasil_penyakit
)
VALUES
(
'$nama_pemilik',
'$nama_kucing',
'$jenis_kucing',
'$usia_kucing',
'$hasil_penyakit'
)
");

/* ==========================
   SESSION HASIL
========================== */

session_start();

$_SESSION['nama_pemilik'] = $nama_pemilik;
$_SESSION['nama_kucing'] = $nama_kucing;
$_SESSION['jenis_kucing'] = $jenis_kucing;
$_SESSION['usia_kucing'] = $usia_kucing;

$_SESSION['hasil'] = $hasil_penyakit;
$_SESSION['deskripsi'] = $deskripsi;
$_SESSION['solusi'] = $solusi;

/* ==========================
   REDIRECT HASIL
========================== */

header("Location: hasil.php");
exit;

?>