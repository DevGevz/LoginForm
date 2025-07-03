<?php
    include("connexion.php");
    if (isset($_POST["submit"])){
        $username = $_POST['user'];
        $email = $_POST['em'];
        $password = $_POST['pass'];
        $sql = "select * from login where username =  '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count ==0){
            $insert_sql = "INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
            if(mysqli_query($conn, $insert_sql)){
                header("Location:registered.php");
                session_start();
                // après insertion réussie :
                $_SESSION['user'] = $username;
                header("Location: index.php");
                exit();
            }else{
                echo "Erreur:". msqli_error($conn);
            }
        }else{
            echo '<script>
                window.location.href = "index.php";
                alert ("Registration failed. Invalid username, email or password !!!")
                </script>';
        }
    }
?>