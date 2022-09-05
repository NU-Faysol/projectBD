<?php

$admin_name="admin";
$admin_pass="1234";

if($admin_name == 'admin' && $admin_pass == '1234'){
    echo "<script>location.href = 'profile.php'</script>";
}
else{
    echo "<script>alert('Username and Password are not matched')</script>";
                echo "<script>location.href = 'login.php'</script>";
}

    

?>