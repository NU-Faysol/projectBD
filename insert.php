<?php

 include 'connection.php';

    $r_username = $_POST['r_username'];
    $r_mobile = $_POST['r_mobile'];
    $r_email = $_POST['r_email'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
    $r_image = $_FILES['r_image'];

    $imageTemlLocation = $r_image['tmp_name'];
    $imageName = $r_image['name'];
    $imageDesc = 'image/'.$imageName;
    
    move_uploaded_file($imageTemlLocation, $imageDesc);

    // echo $r_username;
    // echo $r_mobile;
    // echo $r_email;
    // echo $r_pass;

    $username_pattern = "/[a-zA-Z]{3,40}/";
    $mobile_pattern = "/^([0-9]){11}$/";
    $email_pattern = "/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/";
    $pass_pattern = "/^[a-zA-Z0-9!@#$%^&*]{6,30}$/";


    // duplication code start here
    $duplicate_mobile = mysqli_query($conn, "SELECT * FROM `users` WHERE phone='$r_mobile'");

    if(mysqli_num_rows($duplicate_mobile) > 0){

        echo "<script>alert('The Mobile Number is already taken!! Please try again with another number')</script>";
        echo "<script>location.href = 'registration.php'</script>";
    }
// Duplication code ends here

    else if(!preg_match($username_pattern,$r_username)) {

        echo "<script>alert('Invalid User')</script>";
        echo "<script>location.href = 'registration.php'</script>";
    }
    else if(!preg_match($mobile_pattern,$r_mobile)) {

        echo "<script>alert('Invalid mobile number')</script>";
        echo "<script>location.href = 'registration.php'</script>";
    }
    
    else if(!preg_match($email_pattern,$r_email)) {

        echo "<script>alert('Invalid email')</script>";
        echo "<script>location.href = 'registration.php'</script>";
    }
    
    else if(!preg_match($pass_pattern,$r_pass)) {

        echo "<script>alert('Invalid password')</script>";
        echo "<script>location.href = 'registration.php'</script>";
    }

    else if($r_pass !== $r_con_pass) {

        echo "<script>alert('password & Confirm Password does not matched!!!')</script>";
        echo "<script>location.href = 'registration.php'</script>";
    }

    else{

        $insertQuery = "INSERT INTO `users`( `name`, `phone`, `email`, `password`, `image`) VALUES ('$r_username','$r_mobile','$r_email','$r_pass','$imageDesc')";

        if(!mysqli_query($conn, $insertQuery)) {

            die ("Not inserted");

        }else{

            echo "<script>alert('Registration Completed ')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }
    }
    

?>