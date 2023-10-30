<?php
session_start();
require "connect.php";


if (!isset($_SESSION['login'])) {
    header('Location: ./login-form/login.php ');
    exit;
}


date_default_timezone_set("Asia/Makassar");

$result = mysqli_query($conn, "SELECT * FROM data_anime");

$data_anime = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_anime[] = $row;
}

$now = strtotime("now");
$tanggal = date("Y-m-d", $now);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Anime</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style_crud.css">
</head>

<body>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>Judul Anime</th>
                    <th>Genre</th>
                    <th>Studio</th>
                    <th>Rating</th>
                    <th>Nama Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_anime as $anime) : ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?php echo $anime["tittle"] ?></td>
                        <td><?php echo $anime["genre"] ?></td>
                        <td><?php echo $anime["studio"] ?></td>
                        <td><?php echo $anime["rating"] ?></td>
                        <td><?php echo $anime["gambar_path"]; ?></td>
                        <td class="action">
                        <a href="edit.php?id=<?php echo $anime["id"]; ?>">
                            <button class="editBtn"><i class="fa-solid fa-pencil"></i>EDIT</button>
                        </a>
                            <a href="delete.php?id=<?php echo $anime["id"]; ?>"><button class="deleteBtn"><i class="fa-solid fa-trash"></i>DELETE</button></a>
                        </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
        <button class="btn-add" onclick="openModal()">Add Data</button>
        <br>
        <br>
        <a href="index_admin.php" class="btn-back">Kembali Ke Home</a>
        <a href="animelist_admin.php" class="btn-back">Kembali Ke AnimeList</a>
        <b style="color:white">*Kembali Ke AnimeList Jika Ingin Lihat Tampilan Yang Telah Ditambahkan / Edit</b>
    </div>

    <!-- Add Data Memakai Modal / POPUP -->
    <div id="addDataModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 class="modal-title">Add Data</h2>
 >
            <form action="create.php" method="POST" enctype="multipart/form-data">
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
  
                <input type="submit" name="tambah" class="btn-add" value="Tambahkan"></input>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            var modal = document.getElementById('addDataModal');
            modal.style.display = 'block';
        }

        function closeModal() {
            var modal = document.getElementById('addDataModal');
            modal.style.display = 'none';
        } 

        function addData() {
            alert('Data added!'); 
            closeModal(); 
        }
    </script>
</body>

</html>