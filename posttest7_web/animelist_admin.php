<?php
require "connect.php";
$result = mysqli_query($conn, "SELECT * FROM data_anime");
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ./login-form/login.php ');
    exit;
}



if (isset($_GET["button_search"])) {
    $search = $_GET["search"];
    $result = mysqli_query($conn, "SELECT * FROM data_anime WHERE tittle LIKE '%$search%' OR genre LIKE '%$search%' OR studio LIKE '%$search%' OR rating LIKE '%$search%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM data_anime");
}


$data_anime = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_anime[] = $row;
}
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>EzAnime</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styleanimelist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!--header & navbar-->
    <nav class="header" id="header">
        <a href="#"><img class="gambar" src="https://image.winudf.com/v2/image1/Y29tLm1lZ2lybHNpbWFnZXMucGljdHVyZXNfc2NyZWVuXzRfMTU2MTM1MTA2OV8wNjk/screen-4.webp?fakeurl=1&type=.webp" alt="">
            <h1 class="text">EzAnime<span id="text">.Xens</span></h1>
        </a>

        <div class="navbar">
            <form action="" method="get">
            <a href="index_admin.php" id="home"><i data-feather="home"></i>HOME</a>
            <a href="animelist_admin.php" id="list"><i data-feather="list"></i>Anime List</a>
            <a href="aboutme_admin.php" id="user"><i data-feather="user"></i>ABOUT ME</a></li>
            <a href="crud.php" id="admin"><i data-feather="user"></i>Menu Admin</a>
            <input type="text" name="search" placeholder="Search">
            <button class="search-button" name="button_search">Search</button>
            </form>
        </div>

        <div class="toggle">
            <input type="checkbox" id="darkmode-toggle" value="true" onchange="check()" />
            <label for="darkmode-toggle">
        </div>

        <div class="navbar-extra">
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
        <!-- end header & navbar -->
    </nav>


    <!-- container-->
    <!-- <div class="container"> -->

    <!-- banner card -->
    <div class="container-card" id="container-card">
        <h1>My Anime List</h1>
        <div class="row">
            <?php $i = 1;
            if (!empty($data_anime)) : ?>
                <?php foreach ($data_anime as $anime) : ?>
                    <div class="card">
                        <a href="#">
                            <img src="image/<?php echo $anime["gambar_path"]; ?>" alt="">
                        </a>
                        <p>tittle :<?php echo $anime["tittle"]; ?></p>
                        <p>Genre : <?php echo $anime["genre"]; ?></p>
                        <p>Studio : <?php echo $anime["studio"]; ?></p>
                        <p style="color:var(--text); font-weight: bold;"  ><i data-feather="star" style="color: rgb(255, 192, 32);"></i><b>rating: <?php echo $anime["rating"]; ?></b></p>
                        <hr>
                        <p style="color:var(--text); font-size: 18px;"><i class="fa-regular fa-clock"></i><?php echo "Date modified :".$anime["tanggal"]; ?></p>
                    </div>
                <?php $i++;
                endforeach; ?>
            <?php else : ?>
                <p>Data belum ada.</p>
            <?php endif; ?>
        </div>
        <!-- footer -->
        <footer class="footer" id="footer">

            <div class="socials">
                <a href="#"><i data-feather="instagram"></i></a>
                <a href="#"><i data-feather="facebook"></i></a>
                <a href="#"><i data-feather="twitter"></i></a>
                <a href="#"><i data-feather="linkedin"></i></a>
            </div>
            <p>Created by @Ashadi Permana NIM : 2209106033 </p>

        </footer>
        <!--end footer -->


        <script>
            feather.replace();
        </script>

        <!-- my js -->
        <script src="js/script_anime-list.js"></script>

</body>

</html>
