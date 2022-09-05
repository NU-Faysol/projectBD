
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">


    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

.gradient-custom-4 {

background: #84fab0;
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))

}
    </style>

</head>
<body class='overflow-x-hidden'>
    <main>
    <div id="success" class="alert alert-success alert-dismissible fade" role="alert">
        <strong>Success!</strong> Your request has been successfully submitted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <div id="failure" class="alert alert-danger alert-dismissible fade" role="alert">
            <strong>Error!</strong> Your request has not been sent due to errors
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <section class="vh-100">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-4">Create an account</h2>

              <form action="insert.php" method="post" enctype="multipart/form-data">  

              <div class="form-outline mb-2">
                <label class="form-label" for="name">User Name</label>
                  <input type="text" name="r_username" id="name" class="form-control form-control-lg" placeholder="Username"/>
                  <small id="namevalid" class="form-text text-muted invalid-feedback">
                  You just use character. Also your name lenght have to 3-40
                      </small>
            </div>

            <div class="form-outline mb-2">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control form-control-lg" name="r_mobile" id="phone" placeholder="Phone Number">
                <small id="emailvalid" class="form-text text-muted invalid-feedback">
                        Your phone number must be 11 digit long. you don't need to use +88
                      </small>
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="email">Your Email</label>
                  <input type="email" name="r_email" id="email" class="form-control form-control-lg" placeholder="Email"/>
                  <small id="emailvalid" class="form-text text-muted invalid-feedback">
                        Your email must be a valid email
                      </small>
                </div>

            <div class="form-outline mb-2">
                <label for="password">Password</label>
                <input type="password" name="r_pass" class="form-control form-control-lg" id="password" placeholder="Password">
                <small id="passwordvalid" class="form-text text-muted invalid-feedback">
                give a valid password. you can use character,digit also special characters but password length should 6-16
                      </small>
            </div>

            <div class="form-outline mb-2">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control form-control-lg" name="r_con_pass" id="confirmpassword" placeholder="Confirm Password">
                <small id="cpasswordvalid" class="form-text text-muted invalid-feedback">
                        Password does't matched
                      </small>
            </div>

            <div class="form-outline mb-2">
                <label for="image">Upload Image</label>
                <input type="file" name="r_image" id="image" class="form-control">
            </div>

               

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="submit" name="register">Register</button>
                </div>

                <p class="text-center text-muted mt-4 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

    </main>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
    <script src="registration.js"></script>


    
</body>
</html>