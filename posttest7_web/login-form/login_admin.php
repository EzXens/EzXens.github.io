<?php
    session_start();
    require "../connect.php";
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cek = mysqli_query($conn,"SELECT * FROM admin_anime WHERE username = '$username'");
        if(mysqli_num_rows($cek) === 1)
        {
            $row = mysqli_fetch_assoc($cek);
            if($password == $row["password"])
            {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $row["username"];
                header("Location: ../index_admin.php");
                exit;
            }else{
                echo "<script>
                alert('username atau password admin salah');
                document.location.href = 'login.php';
                </script>";
            }
        }
        $error = true;
    }
?>