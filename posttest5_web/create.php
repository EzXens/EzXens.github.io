<?php
    require "connect.php";
    $tittle = $_POST['tittle_anime'];
    $genre = $_POST['genre_anime'];
    $studio = $_POST['studio_anime'];
    $rating = $_POST['rating_anime'];
    
    $gambar = $_FILES['gambar_anime']['name'];
    $temp_file = $_FILES['gambar_anime']['tmp_name'];
    move_uploaded_file($temp_file, "image/" . $gambar);    

    // $query_sql = "INSERT INTO data_anime VALUES ('','$tittle' ,'$genre', '$studio' , $rating', '$gambar')";
    $query_sql = "INSERT INTO data_anime (tittle, genre, studio, rating, gambar_path) VALUES ('$tittle', '$genre', '$studio', '$rating', '$gambar')";

    if(mysqli_query($conn, $query_sql)){
        header("location: crud.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>