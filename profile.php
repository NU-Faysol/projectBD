    <?php  include 'access.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="style.css">

</head>


<body>

  
    <?php
   include './header/header.php';


include 'connection.php';

// $name = $_SESSION['username'];
if (isset($_SESSION['username'], $_SESSION['password'])) {
     $name = $_SESSION['username'];
     $password = $_SESSION['password'];

     
}
else {
    echo "<script> alert('Please login')</script>";
    echo "<script> location.href='login.php'</script>";
}

// $l_username = $_POST['l_username'];
$allData = mysqli_query($conn, "SELECT * FROM `users` WHERE name='$name' AND password='$password'");

//   row akare data ashbe
while ($row = mysqli_fetch_array($allData)) {
    echo "
                
    <div class=' container-fluid my-5 py-4'>
    <div class='row d-flex justify-content-center'>
        <div class=' col-md-6'>
            <div class='card p-3 py-4'>
                <div class='text-center'>
                    <img src='$row[image]' width='250px'>
                </div>
                <div class='text-center mt-3'>                               
                           
                    <h5 class='mt-2 mb-0'>$row[name]</h5>                       
                    <span><h6 class='d-inline-block'>Email : </h6>$row[email]</span><br>
                    <span><h6 class='d-inline-block'>Mobile : </h6>$row[phone]</span><br>                             
                    <div class='buttons'>                             
                        <button class='btn btn-outline-primary px-4'><a href='profileBlog.php' style='color:black;  text-decoration:none'>Share your experience</a></button>                             
                    </div>
                </div>                            
            </div>                       
        </div>                   
    </div>               
  </div>  
    ";
  }
  ?>



            <!-- footer start  -->
                <footer class="footer">
        <h1 class="line-height-1"> <span class="text-blue">Travel</span> BD</h1>
        <p style="line-height: 30px;">Copyright &copy; <span class="color_orange">TravelBD.com</span></p> 
         <p>All rights reserved</p>
    </footer>
</body>
</html>