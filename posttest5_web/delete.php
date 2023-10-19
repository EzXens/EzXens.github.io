<?php
    require "connect.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "DELETE FROM data_anime WHERE id = $id");

    if ($get) {
        header('location: crud.php');
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'crud.php';
        </script>";
    }
?>