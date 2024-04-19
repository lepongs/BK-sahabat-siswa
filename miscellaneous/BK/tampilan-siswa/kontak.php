<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and CSS links -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/kontak.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <title>Profile-rework</title>

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
            <a href="dashboard-siswa.php">
                <i class="bx bxs-home"></i><span>HOME</span> 
            </a>
           
            <!-- Kontak menu item -->
            <a href="kontak.php">
                <i class="bx bxs-book-content"></i><span>KONTAK</span>
            </a>
           
            <!-- Tes menu item -->
            <div class="dropdown"> 
                <button onclick="dropdownTest()" class="dropbtn"> <i class="bx bx-pencil"></i> TES <i class="fa fa-caret-down"></i></button>
                    <div id="testDropdown" class="dropdown-content">
                        <a href="#">Tes minat bakat</a>
                        <a href="#">Tes gaya belajar</a>
                    </div>
            </div>

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
                    <a href="profil.php">Profile</a>
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
            <h1>Profil Guru</h1>

            <div class="box-container" id="box-container">
                <img src="../assets/img/polosan.png" alt="">

                <div class="paragraph-container">
                    <p>Nama lengkap Guru</p>
                    <hr>
                    <p>Tempat, tanggal lahir</p>
                    <hr>
                </div>

            </div>
        </main>
        
    </section>
    <!-- CONTENT -->

    <!-- JavaScript file -->
    <script src="../assets/js/index.js"></script>
</body>
</html>