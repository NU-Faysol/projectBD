<?php 

        session_start();
        if(isset($_SESSION['username'])){

            $l_username=$_SESSION['username'];
        }
        else{
            echo "<script>alert('dont access from url')</script>";
            echo "<script>location.href='login.php'</script>";
        }

?>