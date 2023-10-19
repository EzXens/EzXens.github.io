<? 
$result = mysqli_query($conn, "SELECT * FROM data_anime");

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
</head>
<body>
    <!--header & navbar-->
    <nav class="header" id="header">
    <a href="#"><img class="gambar" src="https://image.winudf.com/v2/image1/Y29tLm1lZ2lybHNpbWFnZXMucGljdHVyZXNfc2NyZWVuXzRfMTU2MTM1MTA2OV8wNjk/screen-4.webp?fakeurl=1&type=.webp" alt="">
    <h1 class="text">EzAnime<span id="text">.Xens</span></h1>
    </a>

    <div class="navbar">
    <a href="index.php" id="home"><i data-feather="home"></i>HOME</a>  
    <a href="animelist.php" id="list"><i data-feather="list"></i>Anime List</a> 
    <a href="aboutme.php" id="user"><i data-feather="user"></i>ABOUT ME</a></li>
    <a href="crud.php" id="admin"><i data-feather="user"></i>Menu Admin</a>
    <!-- <input type="text" placeholder="Search.."> -->
    </div>

    <div class="toggle">
    <input type="checkbox" id="darkmode-toggle" value="true" onchange="check()"/>
    <label for="darkmode-toggle">
    </div>
    
    <div class="navbar-extra">
    <a href="#" id="search"><i data-feather="search"></i><input type="search" name="cari" id="cari" placeholder="Search.."></a>
    <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>
    <!-- end header & navbar -->
    </nav>


    <!-- container-->
    <!-- <div class="container"> -->
        
    <!-- banner -->    
    <section class="container-card" id="container-card">
        <h1>My Anime List</h1>
        <div class="row">
            <div class="card">
                <a href="#"><img src="image/aot.jpg" alt=""></a>
                <hr>
                <p>title : Shingeki no Kyojin <br>The Final Season <br> - Kanketsu-hen</p>
                <p>Genre : Action,Drama,<br>Suspense</p>
                <p>Studio : MAPPA </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 9.03 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/anime_ari.jpg" alt=""></a>
                <hr>
                <p>title : The iDOLM@STER <br> Cinderella Girls: U149 </p>
                <p>Genre : Idols (Female),<br>Music</p>
                <p>Studio : CygamesPictures</p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 7.72 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/black_bulet.jpg" alt=""></a>
                <hr>
                <p>title : Black Bullet </p>
                <p>Genre : Action, Mystery,<br>Sci-Fi</p>
                <p>Studio : Kinema Citrus,<br>Orange </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 7.09 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/tensura.jpg" alt=""></a>
                <hr>
                <p>title : Tensei shitara <br> Slime Datta Ken </p>
                <p>Genre : Action, <br> Adventure,<br> Comedy, Fantasy</p>
                <p>Studio : 8 Bit </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 8,14 </p>
            </div>

            <div class="card">
                <a href="#"><img src=https://cdn.myanimelist.net/images/anime/1164/138058.jpg alt=""></a>
                <hr>
                <p>Bleach: Sennen <br>Kessen-hen <br>- Ketsubetsu-tan</p>
                <p>Genre : Action,Adventure,<br>Fantasy</p>
                <p>Studio : Pierrot </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 8.96</p>
            </div>

            <div class="card">
            <?php foreach ($data_anime as $anime) : ?>
            <a href="#">
            <img src="image/<?php echo $anime["gambar_path"]; ?>" alt="">
            </a>
            <p>tittle :<?php echo $anime["tittle"]; ?></b></p>
            <p>Genre : <?php echo $anime["genre"]; ?></p>
            <p>Studio : <?php echo $anime["studio"]; ?></p>#
            <p><i data-feather="star" style="color: rgb(255, 192, 32);"></i>rating: <?php echo $anime["rating"]; ?></p> 
                    <?php endforeach; ?>
            <hr>
            </div>

            <!-- <div class="card">
                <a href="#"><img src="https://cdn.myanimelist.net/images/anime/1792/138022.jpg" alt=""></a>
                <hr>
                <p>title : Jujutsu Kaisen <br> 2nd Season </p>
                <p>Genre : Action, Fantasy</p>
                <p>Studio : Mappa</p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 8.82 </p>
            </div>

            <div class="card">
                <a href="#"><img src="https://cdn.myanimelist.net/images/anime/6/73245.jpg" alt=""></a>
                <hr>
                <p>title : One Piece </p>
                <p>Genre : Action,Adventure,<br>Fantasy</p>
                <p>Studio : Toei Animation </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i>Rating : 8.71 </p>
            </div>

            <div class="card">
                <a href="#"><img src= "https://cdn.myanimelist.net/images/anime/11/39717.jpg" alt=""></a>
                <hr>
                <p>title : Sword Art Online</p>
                <p>Genre : Action,<br>Romance, Fantasy</p>
                <p>Studio : A-1 Picture </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 7.20 </p>
            </div>

            <div class="card">
                <a href="#"><img src="https://cdn.myanimelist.net/images/anime/5/87048.jpg" alt=""></a>
                <hr>
                <p>title :Kimi no Na wa. </p>
                <p>Genre : Award winning,<br> Drama, Supernatural</p>
                <p>Studio : CoMix Wave Films</p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 8.84 </p>
            </div>

            <div class="card">
                <a href="#"><img src="https://cdn.myanimelist.net/images/anime/1806/126216.jpg" alt=""></a>
                <hr>
                <p>title : Chainsaw Man </p>
                <p>Genre : Action, Fantasy</p>
                <p>Studio : Mappa </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 8.55 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/black_bulet.jpg" alt=""></a>
                <hr>
                <p>title : Black Bullet </p>
                <p>Genre : Action, Mystery,<br>Sci-Fi</p>
                <p>Studio : Kinema Citrus,<br>Orange </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 7.09 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/tensura.jpg" alt=""></a>
                <hr>
                <p>title : Tensei shitara Slime <br> Datta Ken </p>
                <p>Genre : Action, Adventure,<br> Comedy, Fantasy</p>
                <p>Studio : 8 Bit </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 8,14 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/black_bulet.jpg" alt=""></a>
                <hr>
                <p>title : Black Bullet </p>
                <p>Genre : Action, Mystery,<br>Sci-Fi</p>
                <p>Studio : Kinema Citrus,<br>Orange </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 7.09 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/tensura.jpg" alt=""></a>
                <hr>
                <p>title : Tensei shitara Slime <br> Datta Ken </p>
                <p>Genre : Action, Adventure,<br> Comedy, Fantasy</p>
                <p>Studio : 8 Bit </p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 8,14 </p>
            </div>

            <div class="card">
                <a href="#"><img src="image/anime_ari.jpg" alt=""></a>
                <hr>
                <p>title : The iDOLM@STER <br> Cinderella Girls: U149 </p>
                <p>Genre : Idols (Female),<br>Music</p>
                <p>Studio : CygamesPictures</p>
                <p class="rating"><i data-feather="star" style="color: rgb(255, 192, 32);"></i> Rating : 7.72 </p>
            </div> -->
        

        <!-- <a href="animelist.html" class="lihat">
           More Anime List? Cooming Soon At Next Posttest
           </a>  -->
        </section>
        <!-- end banner -->



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


    <script>feather.replace();</script>

    <!-- my js -->
    <script src="js/script2.js"></script>

</body>
</html>