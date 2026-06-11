<?php
require '../config/koneksi.php';
session_start();

$error = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,
        "SELECT * FROM admin 
         WHERE username='$username' 
         AND password='$password'"
    );

    $cek = mysqli_num_rows($query);

    if($cek > 0)
    {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit;
    }
    else
    {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Admin</title>
<link rel="stylesheet" href="../assets/css/login.css">

<!-- ICON -->
<script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>

<div class="login-container">

    <!-- LOGO KUCING (STATIC) -->
    <div class="cat-logo">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="cat">
    </div>

    <h2>Login Admin</h2>

    <?php if($error != "") { ?>
        <p class="error"><?= $error; ?></p>
    <?php } ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Username" required>

        <!-- PASSWORD + EYE -->
        <div class="password-box">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <span onclick="togglePassword()" class="eye">👁️</span>
        </div>

        <button type="submit" name="login">Login</button>

    </form>

    <!-- BACK TO HOME -->
    <a href="../index.php" class="back-home">← Kembali ke Beranda</a>

</div>

<script>
function togglePassword() {
    let pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}
</script>

</body>
</html>