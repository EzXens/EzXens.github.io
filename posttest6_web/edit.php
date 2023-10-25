<?php
require "connect.php";

$id = $_GET["id"];
$read_sql = "SELECT * FROM data_anime WHERE id = $id";
$result = mysqli_query($conn, $read_sql);

$data_anime = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_anime[] = $row;
}

$data_anime = $data_anime[0];

date_default_timezone_set("Asia/Makassar");

if (isset($_POST["edit"])) {
    $tittle = htmlspecialchars($_POST["tittle_anime"]);
    $genre = htmlspecialchars($_POST["genre_anime"]);
    $studio = htmlspecialchars($_POST["studio_anime"]);
    $rating = htmlspecialchars($_POST["rating_anime"]);

    $gambar = htmlspecialchars($_FILES["gambar_anime"]["name"]);
    $temp_file = htmlspecialchars($_FILES["gambar_anime"]["tmp_name"]);

    $now = strtotime("now");
    $tanggal = date("d-m-Y h:i:sa", $now);

     $tanggals = date("Y-m-d", $now);

     // menggabungkan tanggal dengan nama file dan ekstensi
     $gambar_baru = $tanggals . " " . $gambar;

    // Cek apakah gambar baru diunggah
    if (!empty($gambar)) {
        // Hapus gambar lama jika ada
        if (!empty($data_anime['gambar_path'])) {
            $oldImagePath = "image/" . $data_anime['gambar_path'];
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Pindahkan file dengan nama baru
        move_uploaded_file($temp_file, "image/" . $gambar_baru);

    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $gambar = $data_anime['gambar_path'];
    }
 
    $sql = "UPDATE data_anime SET tittle = '$tittle', genre = '$genre', studio = '$studio', rating = '$rating', gambar_path = '$gambar_baru' ,tanggal = '$tanggal' WHERE id = $id";

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
            <h2 class="modal-title">Edit Data</h2>
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
                <input type="submit" name="edit" class="btn-add" value="edit"></input>
                <a href="crud.php"><input type="button" class="btn-back" value="kembali"></a>
            </form>
        </div>
    </div>
</body>

</html>