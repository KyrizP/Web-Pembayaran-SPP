<!DOCTYPE html>
<html>
<head>
    <title>Registration Site</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body style="background-image: url(img/doodleb5.jpg);">
        <h2 class="tittle"> Selamat Datang Di Web Pembayaran SPP </h2>
    <div class="box-reg">
        <h1 class="tittle">Siahkan Registrasi Akun Anda</h1>
    <table>
    <form action="cek_reg.php" method="post">
        <input type="text" name="data_pendaftar" class="pass" placeholder="Masukkan Nama Anda" required /><br><br>
        <input type="text" name="username" class="pass" placeholder="Masukkan NIK/NIS" required /><br><br>
        <input type="password" name="password1" class="pass" placeholder="Masukkan Password" required/><br><br>
        <input type="password" name="password2" class="pass" placeholder="Masukkan Ulang Password" required/><br><br>
        <select name="level" class="pass" required><br><br>           
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
            <option value="admin">Admin</option>
        <input type="submit" style="margin-top: 10px;" class="submit rew" value="Register">
        <br/>
        <br/>
    <div class="">
			<span style="float: left; margin-left: 85px; margin-top: 15px;">Sudah Punya Akun?</span>
            <a style="float: right; margin-right: 85px; margin-top: 15px;" href="index.php">Login</a>
	</div>
    </form>
    </table>
</div>
</body>
</html>