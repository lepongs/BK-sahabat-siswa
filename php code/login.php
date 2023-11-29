<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Login</title>
    <link rel="stylesheet" href="./assetss/login.css">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

    <!--form -->
        <form action="" method="POST">
            <img src="https://smkn2-bjm.sch.id/wp-content/uploads/2020/07/Purna-Tugas-4-660x330.jpeg" alt="">
            <div class="input-container">

            <!-- username -->
                <label for="username">  
                    <input class="forminput" type="text" placeholder="Nama Pengguna" id="username" name="username" required>
                </label>
            </div>

            <!-- password -->
            <div class="input-container">
                <label for="password"></label>
                <input class="forminput" type="password" placeholder="Password" id="password" name="password" required>
            </div>

            <!-- remember -->
            <div class="checkbox">
                <input type="checkbox" id="remember" name="remember">
                <label class  for="rememberusername">Remember username</label>
            </div>

            <?php 
            session_start();
            include 'koneksi.php';

            if (isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];

                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass' ");
                $data = mysqli_fetch_array($query);
                $cekdata = mysqli_num_rows($query);

                if ($cekdata > 0) {
                if($data['level']=="ADMIN") {
                   $_SESSION['level']=$data['level'];
                   $_SESSION['username']=$data['username'];   
                    header('location:dashboard_admin.php');

                }elseif ($data['level']=="SISWA") {
                    $_SESSION['level']=$data['level'];
                   $_SESSION['username']=$data['username'];
                    header('location:dashboard.php');

                }elseif ($data['level']=="GURU") {
                    $_SESSION['level']=$data['level'];
                   $_SESSION['username']=$data['username'];
                    header('location:dashboard_guru.php');
                }else{
                    echo "Gagal bang";
                }
                }
            }
            ?>

            <br>
            
            <!-- masuk -->
            <div class="submit">
                <input class="formsubmit" type="submit" name="login" value="Masuk">
            </div>

            <!-- kembali -->
            <div class="back">
                <a href="home.php">Kembali ke E-BK</a>
            </div>
        </form>
    </div>
</body>
</html>