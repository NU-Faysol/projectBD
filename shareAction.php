<?php

 include 'connection.php';

    $p_email = $_POST['p_email'];
    $p_name = $_POST['p_name'];
    $p_place = $_POST['p_place'];
    $p_division = $_POST['p_division'];
    $p_comment = $_POST['p_comment'];
    $p_brief = $_POST['p_brief'];
    $p_reach = $_POST['p_reach'];
    $p_stay = $_POST['p_stay'];
    $p_eat = $_POST['p_eat'];
    $p_time = $_POST['p_time'];



    //we can know how many files is there
    $totalFiles =  count($_FILES['file']['name']);

    for( $i = 0 ; $i<$totalFiles ; $i++) {

            //taking multiple files
        $files = $_FILES['file']['name'][$i];
        $imageTemlLocation = $_FILES['file']['tmp_name'][$i];
        // $imageName = $p_image['name'];
        $imageDesc = 'image/'.$files;
        
        move_uploaded_file($imageTemlLocation, $imageDesc);
}

    
        $insertQuery = "INSERT INTO `blog`(`email`, `name`, `place`, `division`, `image`, `comment`, `brief`, `reach`, `stay`, `eat`, `time`) VALUES ('$p_email','$p_name','$p_place','$p_division','$imageDesc','$p_comment','$p_brief','$p_reach','$p_stay','$p_eat','$p_time')";

        if(!mysqli_query($conn, $insertQuery)) {

            die ("Not inserted");

        }else{

            echo "<script>alert('Uploaded ')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }

