<?php
include '../connection.php';
$id = $_REQUEST['id'];
// echo $id;

$updateQuery ="UPDATE `blog` SET `approve`='approved' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Approve Failed!')</script>";
    echo "<script>location.href='profile.php'</script>";
}
else{
    echo "<script>alert('Approved')</script>";
    
    echo "<script>location.href='profile.php'</script>";
}