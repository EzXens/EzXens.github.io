<?php
    // session_start();
    require "../connect.php";
    if( isset($_POST["registo"])){
        $email = $_POST["email"];
        $username = $_POST["username_user"];
        $password = $_POST["password"];
        $cpassword = $_POST["password2"];
        
        if($password === $cpassword)
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $hasil = mysqli_query($conn, "SELECT username_user FROM user WHERE username_user = '$username'");

            if(mysqli_fetch_assoc($hasil))
            {
                echo
                "<script>
                    alert('username telah digunakan!');
                    document.location.href = 'login.php';
                </script>";
            }

            else
            {
                $sql = "INSERT INTO user VALUES('', '$email', '$username', '$password')";
                $hasil = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn) > 0)
                {
                    echo 
                    "<script>
                        alert('Registrasi berhasil');
                        document.location.href='login.php';
                    </script>";
                }
            }
        }
        else
        {
            echo "<script>
            alert('kedua passowrd tidak sama');
            document.location.href = 'login.php';
            </script>";
        }

    }
?>