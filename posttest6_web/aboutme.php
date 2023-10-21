<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EzAnime</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styleaboutme.css">
</head>
<body class="body" id="body">
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
    <!-- container -->
        <!-- Content here -->
        <div class="cv-container" id="cv-container">
            <div class="cv-header">
              <div class="cv-photo">
                <img src="image/1.jpg" alt="Your Photo">
              </div>
              <div class="cv-details">
                <h1>Ashadi Permana</h1>
                <br>
                <h4>Mahasiswa</h4>
                <br>
                <h4>NIM : 2209106033</h4>
              </div>
            </div>
            <div class="cv-content">
              <br>
              <hr>
              <h2>Pendidikan</h2>
              <ul>
                <li>
                  <b>SDN 014 Samarinda</b><br>
                  | Juli 2009 - Juni 2015
                </li>
                <li>
                  <b>SMPN 041 Samarinda</b><br>
                  | Juli 2015 - Juni 2018
                </li>
                <li>
                  <b>SMKN 020 Samarinda</b><br>
                  | Juli 2018 - Juni 2021
                </li>
                <li>
                  <b>Universitas Mulawarman</b><br>
                  | Agustus 2022 - Sekarang
                </li>
                </ul>
              <hr>
              <h2>Pengalaman</h2>
              <ul>
                <li>
                    <b>Osis SMPN 041 Samarinda</b><br>
                     Pernah Menjadi Anggota Osis Bagian Kesehatan <br> | Juli 2015 - Juni 2016
                </li>
                <li>
                    <b>Magang Di Tempat Foto Copy</b><br>
                     Pernah Magang Di Tempat Foto Copy pada saat SMK<br> | Juli 2020 - oktober 2020
                </li>
                <li>
                    <b>Staff Association Of Informatics</b><br>
                     Pernah Menjadi Anggota Staff Association Of Informatics Unmul <br> | oktober 2022 - Sekarang
                </li>
              </ul>
              <hr>
              <h2>Skill</h2>
              <ul class="skills-list">
                <li>
                  <span class="bullet"></span>
                  <span class="left">Gaming</span>
                  <span class="right"><b>Sedang</b></span>
                </li>
                <li>
                  <span class="bullet"></span>
                  <span class="left">C++</span>
                  <span class="right"><b>Sedang</b></span>
                </li>
                <li>
                  <span class="bullet"></span>
                  <span class="left">Python</span>
                  <span class="right"><b>Pemula</b></span>
                </li>
                <li>
                  <span class="bullet"></span>
                  <span class="left">HTML</span>
                  <span class="right"><b>Pemula</b></span>
                </li>
                <li>
                  <span class="bullet"></span>
                  <span class="left">CSS</span>
                  <span class="right"><b>Pemula</b></span>
                </li>
              </ul>
              

            </div>
          </div>
    <!-- end container -->

   <!-- end container -->
        
    <!-- banner -->
        
    <!-- end banner -->



    <!-- footer -->
    <footer class="footer3" id="footer3">

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
    <script src="js/script3.js"></script>

</body>
</html>