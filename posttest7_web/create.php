<?php
    require "connect.php";
    date_default_timezone_set("Asia/Makassar");
    
    $tittle = $_POST['tittle_anime'];
    $genre = $_POST['genre_anime'];
    $studio = $_POST['studio_anime'];
    $rating = $_POST['rating_anime'];
    
    $gambar = $_FILES['gambar_anime']['name'];
    $temp_file = $_FILES['gambar_anime']['tmp_name'];

    $now = strtotime("now");
    $tanggal = date("d-m-Y h:i:sa", $now);

        $tanggals = date("Y-m-d", $now);

        // Gabungkan tanggal dengan nama file dan ekstensi
        $gambar_baru = $tanggals . " " . $gambar;

        // Pindahkan file dengan nama baru
        move_uploaded_file($temp_file, "image/" . $gambar_baru);

    $query_sql = "INSERT INTO data_anime (tittle, genre, studio, rating, gambar_path ,tanggal) VALUES ('$tittle', '$genre', '$studio', '$rating', '$gambar_baru' ,'$tanggal')";

    if(mysqli_query($conn, $query_sql)){
        header("location: crud.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>