<?php

require "connect.php";

$id = $_GET["id"];
$read_sql = "SELECT * FROM data_anime WHERE id = $id";
$result = mysqli_query($conn, $read_sql);

$anime = [];

while ($row = mysqli_fetch_assoc($result)) {
    $anime[] = $row;
}

$anime = $anime[0];

if (isset($_POST["edit"])) {
    $tittle = htmlspecialchars($_POST["tittle_anime"]);
    $genre = htmlspecialchars($_POST["genre_anime"]);
    $studio = htmlspecialchars($_POST["studio_anime"]);
    $rating = htmlspecialchars($_POST["rating_anime"]);

    $gambar = htmlspecialchars($_FILES["gambar_anime"]["name"]);
    $temp_file = htmlspecialchars($_FILES["gambar_anime"]["tmp_name"]);

    move_uploaded_file($temp_file, "image/" . $gambar);
 
    $sql = "UPDATE data_anime SET tittle = '$tittle', genre = '$genre', studio = '$studio', rating = '$rating', gambar_path = '$gambar' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
        alert('Anime Updated');
        document.location.href = 'crud.php'
        </script>";
    } else {
        echo "
        <script>
        alert('GAGAL');
        document.location.href = 'crud.php?id=$id'
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_crud.css">
    <title>EDIT FORM</title>
</head>

<body>
    <!-- EDIT Data Modal -->
        <div class="modal-content">
            <h2 class="modal-title">EDIT Data</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul Anime</label>
                    <input type="text" class="form-control" id="judul" name="tittle_anime" placeholder="Judul Anime" required>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre_anime" placeholder="Genre" required>
                </div>
                <div class="form-group">
                    <label for="studio">Studio</label>
                    <input type="text" class="form-control" id="studio" name="studio_anime" placeholder="Studio" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating_anime" placeholder="Rating" required>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" id="gambar" name="gambar_anime" required>
                </div>
                <input type="submit" name="edit" class="btn btn-add" value="edit"></input>
            </form>
        </div>
    </div>
</body>

</html>