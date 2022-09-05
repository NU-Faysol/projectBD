
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}

  .cardbody-color{
    background-color: #ebf2fa;
  }

</style>


</head>
<body class='overflow-x-hidden' >

    <main>
     <div class="container">
      <div class="row">
       <div class="col-md-6 offset-md-3">
         
         <div class="card my-5">
           
           <form action="adloginAction.php" method="post" class=" card-body cardbody-color p-lg-5">
            <h2 class="text-center text-dark mt-2">Login</h2>

            <div class="text-center">
              <img src="../images/loginLogo.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="a_name" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" name="a_pass" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" name="login" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
          </form>
        </div>

      </div>
    </div>
  </div>
</main>


</body>
</html>