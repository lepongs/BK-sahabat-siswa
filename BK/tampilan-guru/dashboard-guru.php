
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and CSS links -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <title>Dashboard-rework</title>

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

            <!-- Left section with heading "Dashboard" -->
            <h1>Dashboard</h1>
            <p>Lorem ipsum dolor sit amet. Vel Quis rerum ut aliquam consectetur ut velit explicabo. Et rerum earum rem magnam fugiat aut vero excepturi. Ut perspiciatis quia sit mollitia voluptas in corrupti necessitatibus ut dolorem sequi qui molestiae maiores ut blanditiis nobis. Qui saepe quia eos libero asperiores aut doloremque nobis in ipsum ducimus. </p>
            <p>Hic laboriosam dicta qui expedita ducimus ea tenetur maiores eum voluptatibus alias et officia perspiciatis ut laudantium quidem est nobis deleniti. Est ipsa consectetur sed pariatur reprehenderit et nihil voluptatum ab officia molestias At explicabo iusto in unde galisum. Quo voluptate consequatur At fuga vitae aut impedit soluta est quia numquam. 33 recusandae voluptatem et tenetur omnis et quod provident ut incidunt facere est neque facere in perferendis ipsum. </p>

        </main>
        
    </section>
    <!-- CONTENT -->

    <!-- JavaScript file -->
    <script src="../assets/js/index.js"></script>
</body>
</html>