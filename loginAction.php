<?php

include 'connection.php';

if(isset($_POST['login'])){
        

        $l_username = $_POST['l_username'];
        $l_pass = $_POST['l_pass'];
       

        $result = mysqli_query($conn, "SELECT * FROM `users` WHERE name ='$l_username' AND password = '$l_pass' ");

            if(mysqli_num_rows($result)>0){

                session_start();
                $_SESSION['username'] = $l_username;
                $_SESSION['password'] = $l_pass;
               

                echo "<script>location.href = 'index.php'</script>"; 
            }
            else{
                echo "<script>alert('Username and Password are not matched')</script>";
                echo "<script>location.href = 'login.php'</script>";
            }
    }
    else{

        echo "<script>location.href = 'login.php'</script>";
    }

    

?>