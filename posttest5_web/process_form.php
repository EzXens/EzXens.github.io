<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $img = $_FILES["file"]["name"];
    $tempName = $_FILES["file"]["tmp_name"];
    $judul = $_POST["judul"];
    $tahun = $_POST["tahun"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $genre = $_POST["genre"];
    move_uploaded_file($tempName, "image/" . $img);

    // Menampilkan hasil input
    echo "<h2>Anime Requested : </h2>";
    // Menampilkan gambar yang diupload
    echo "<hr/>";
    echo "<a href='image/$img'><img src='image/$img' alt='Uploaded Image'></a>";
    echo "<hr/>";
    // anime upload
    echo "<p>Judul Anime: $judul</p>";
    echo "<p>Tahun Rilis: $tahun</p>";
    echo "<p>Jenis Kelamin Karakter Utama: $jenis_kelamin</p>";
    echo "<p>Genre: $genre</p>";
    echo "<h2>Your request has been sent to admin</h2>";
    echo "<h2>Thanks For Requesting ^.^</h2>";
    
} else {
    echo "<p>Kesalahan pengiriman form. Pastikan Anda telah mengisi form dengan benar ^_^</p>";
}
?>
