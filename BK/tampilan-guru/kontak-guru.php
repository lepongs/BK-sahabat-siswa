<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and CSS links -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/kontak-guru.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <title>Tabel siswa</title>

</head>
<body>

    <!-- SIDEBAR -->
    <section id="sidebar">

        <!-- Branding section (you can add a logo or site name here) -->
        <a href="#" class="brand">
            BK-SAHABATSISWA
        </a>

        <!-- Navigation menu -->
        <nav class="side-menu">

            <!-- Home menu item -->
            <a href="dashboard_guru.php">
                <i class="bx bxs-home"></i><span>HOME</span> 
            </a>
           
            <!-- Kontak menu item -->
            <a href="kontak-guru.php">
                <i class="bx bxs-book-content"></i><span>KONTAK</span>
            </a>
           
        </nav>
        
    </section>

    <!-- CONTENT -->
    <section id="content">

        <!-- NAVBAR -->
        <nav>
            <div class="dropdown">
                <button onclick="dropdownUser()" class="dropbtn" data-bs-toggle="dropdown" ><i class="fa fa-user"></i> 
                <?php
                  session_start();
                  if(!isset($_SESSION['level'])){
                    header('location:login.php');
                  }

                  echo $_SESSION['username'];
                  ?>
            </button>

                <div id="dropdownUser" class="dropdown-content">
                    <a href="profil-guru.php">Profile</a>
                    <a href="../functions/logout.php">Logout</a>
                </div>
            </div>

            <!-- <div class="dropdown">
                <button class="dropbtn">TESSSSS</button>

                <div id="" class="">
                    <a href="#">Home</a>
                    <a href="#">Kontak</a>
                    <a href="#">Tes</a>
                </div>
            </div> -->
        </nav>

        <!-- CONTENT UTAMA -->
        <main>

            <!-- tabel nama-nama siswa -->
            <table>

                <!-- header tabel -->
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Siswa</th>
                    </tr>
                </thead>

                <!-- isi tabel -->
                <tbody>
                    <tr>
                        <td><img src="../assets/img/polosan.png" alt="Gambar Siswa 1"></td>
                        <td>Nama Siswa 1</td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/polosan.png" alt="Gambar Siswa 2"></td>
                        <td>Nama Siswa 2</td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/polosan.png" alt="Gambar Siswa 3"></td>
                        <td>Nama Siswa 3</td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/polosan.png" alt="Gambar Siswa 4"></td>
                        <td>Nama Siswa 4</td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/polosan.png" alt="Gambar Siswa 5"></td>
                        <td>Nama Siswa 5</td>
                    </tr>
                    <tr>
                        <td><img src="../assets/img/polosan.png" alt="Gambar Siswa 6"></td>
                        <td>Nama Siswa 6</td>
                    </tr>
                </tbody>
              </table>

        </main>
        
    </section>
    <!-- CONTENT -->

    <!-- JavaScript file -->
    <script src="../assets/js/index.js"></script>
</body>
</html>