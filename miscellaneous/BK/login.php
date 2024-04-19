<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Login</title>
    <link rel="stylesheet" href="assets/css/login.css">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>
<body>
    
    <form action="" method="POST">
        <img class="img" src="https://smkn2-bjm.sch.id/wp-content/uploads/2020/07/Purna-Tugas-4-660x330.jpeg" alt="Bapak Al-Munawar">
        
        <input class="input" type="text" placeholder="Nama Pengguna" id="username" name="username" required>
        <input class="input" type="password" placeholder="Password" id="password" name="password" required>
        
        <div class="checkbox">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember username</label>
        </div>

        <?php 
            session_start();
            include 'functions/koneksi.php';

            if (isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];

                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass' ");
                $data = mysqli_fetch_array($query);
                $cekdata = mysqli_num_rows($query);

                if ($cekdata > 0) {
                // if($data['level']=="ADMIN") {
                //    $_SESSION['level']=$data['level'];
                //    $_SESSION['username']=$data['username'];   
                //     header('location:dashboard-admin.php');

                // }
                if ($data['level']=="SISWA") {
                    $_SESSION['level']=$data['level'];
                   $_SESSION['username']=$data['username'];
                    header('location:tampilan-siswa/dashboard-siswa.php');

                }elseif ($data['level']=="GURU") {
                    $_SESSION['level']=$data['level'];
                   $_SESSION['username']=$data['username'];
                    header('location:tampilan-guru/dashboard-guru.php');
                }else{
                    echo "Gagal bang";
                }
                }
            }
            ?>

        <input id="submit" class="input" type="submit" value="Masuk" name="login">

        <a href="home.php">Kembali ke E-BK</a>
    </form>

</body>
</html>