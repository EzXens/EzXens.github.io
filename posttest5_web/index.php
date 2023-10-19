<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EzAnime</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <!-- bagian popup -->
	<div class="popup">
		<div id="box">
            <p>HALO BANG SELAMAT DATANG DI WEBSITE SAYA</p>
			<a class="close" href="#">X</a>
		</div>		
	</div>
    <!-- akhir dari popup -->


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
    <label class="labelchange" for="darkmode-toggle"></label>
    </div>

    <div class="navbar-extra">
    <a href="#" id="search"><i data-feather="search"></i><input type="search" name="cari" id="cari" placeholder="Search.."></a>
    <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>
    <!-- end header & navbar -->
    </nav>



        
    <!-- banner -->    
    <section class="banner" id="banner">
    <main class="content">
    <h1 class="dongo">This Website Contains <span id="dongo">My Anime List</span></h1>
    <p>Selamat Datang Di Website Saya ,Di Website Ini Menyediakan Beberapa List Anime</p>
       <a href="animelist.html" class="lihat" id="lihat">
        Lihat Sekarang
       </a> 
    </main>
    </section>
    <!-- end banner -->



    <!-- carousel buat buat -->
    <div class="tes" id="tes">
        <span id="more" class="more">
        Click For more Info
        </span>
        <div class ="kotak-gambar" id="kotak-gambar">
        <div class="slides">
        <span id="slide-1"></span>
        <span id="slide-2"></span>
        <span id="slide-3"></span>
            <div class="background">
                <img src="image/640956.jpg" alt="">
                <img src="image/744908.jpg" alt="">
                <img src="image/1319293.jpeg" alt="">
            </div>
        </div>
        <div class="navigasi">
        <!-- navigasi -->
        <a href="#slide-1">1</a>
        <a href="#slide-2">2</a>
        <a href="#slide-3">3</a>
        </div>
      </div>

      <!-- input -->

      <div class="container" id="container">
        <h1>Form Request Anime</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <p>add image : <input type="file" name="file"> </p>
                <label for="judul">Judul Anime:</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            <div class="input-group">
                <label for="tahun">Tahun Rilis:</label>
                <input type="number" id="tahun" name="tahun" min="1900" max="2099" required>
            </div>
            <div class="input-group">
                <label>Jenis Kelamin Karakter Utama:</label>
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>
            <div class="input-group">
                <label for="genre">Genre:</label>
                <select id="genre" name="genre" required>
                    <option value="action">Action</option>
                    <option value="adventure">Adventure</option>
                    <option value="comedy">Comedy</option>
                    <option value="fantasy">Fantasy</option>
                </select>
            </div>
            <div class="input-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <div class="output" id="output">
    <?php
    echo "<hr/>";
        // Include the PHP processing file
        require("process_form.php");
        ?>
    <hr>
    </div>


      <!-- end input -->

      <!--end info  -->
    </div>
      <!-- end carousel buat buat -->


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
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    feather.replace();

    $(document).ready(function(){
        $('a.close').click(function(eve){
            eve.preventDefault();
            $('.popup').fadeOut('slow');
        });
    });
   </script>


</body>
</html>