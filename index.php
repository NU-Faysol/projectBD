
  <?php include 'access.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- custom styles  -->

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- sliders styles  -->
    <style>
        .imgSize{
               width: 200px;
                height: 600px;
                object-fit: cover;
        }
        .cardHeight{
            height: 450px;
            object-fit: cover;
        }
        .height{
          height: 300px;
          object-fit: cover;
        }
       
    </style>
  </head>
  <body>
    
    <!---------------------------------
    -----------------------------------
         
        Header section start here  

    -----------------------------------
    ------------------------------------>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" style="color: white; font-size:37px; margin-right: 70px" href="index.php">Travel<span class="colorOrange">BD</span> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" style="color: white; font-size:20px;" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2" style="color: white; font-size:20px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Travel Bangladesh
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/dhaka.php">Dhaka</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/sylhet.php">Sylhet</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../divisions/chittagonj.php"> Chittagonj </a> </li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/rangpur.php"> Rangpur </a> </li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/barishal.php">Barishal</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/khulna.php">Khulna</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/rajshahi.php">Rajshahi</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="../projectBD/divisions/mymensingh.php">Mymensingh</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2" style="color: white; font-size:20px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Famous Places
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style=" font-size:20px;" href="#">simul bagan</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="#">coxBaza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="#">santMartine</a></li>
            <li><a class="dropdown-item" style=" font-size:20px;" href="#">saejek</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link mx-2"  href="gallery.php" style="color: white; font-size:20px;">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2"  href="profile.php" style="color: white; font-size:20px;">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="contractUs.php" style="color: white; font-size:20px">Contract Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="logout.php" style="color: white; font-size:20px">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="search" style="color: white; font-size:20px;" type="submit">
      <a href="search.php"> Search </a></button>
      </form>
    </div>
  </div>
</nav>


        <!---------------------------------
        -----------------------------------
            
            Header section ends here  

        -----------------------------------
        ------------------------------------>
 
    <main>

                    <!---------------------------------
                    -----------------------------------
                        
                        carosole section start here  

                    -----------------------------------
                    ------------------------------------>

       <div id="carouselExampleInterval" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/pic1.jpg" class="d-block w-100 imgSize" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/pic2.jpg" class="d-block w-100 imgSize" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pic3.jpg" class="d-block w-100 imgSize" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pic8.jpg" class="d-block w-100 imgSize" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pic5.jpg" class="d-block w-100 imgSize" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pic7.jpg" class="d-block w-100 imgSize" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                        <!---------------------------------
                        -----------------------------------
                            
                            carosole section ends here  

                        -----------------------------------
                        ------------------------------------>



                        <!---------------------------------
                        -----------------------------------
                            
                            --# card/places section start here #--  

                        -----------------------------------
 
                       ------------------------------------>
<hr>
                       <h1 style=" text-align: center; margin-top:20px"> <span style="color: orange;">Explore</span> Places </h1>
      <hr>

                               <div class='container-fluid' >
<?php
              include 'connection.php';
              $allData = mysqli_query($conn,"SELECT * FROM `blog` WHERE approve='approved'");

             //   row akare data ashbe
           
                echo"
                
                
                    <div class='menu-header bg-gray text-center p-3'>
                        
                    </div>";
 
                    while($row = mysqli_fetch_array($allData))
                    {
       echo"
            
                <div class='m-5 d-inline-block '>
                
                
                            <input type='hidden' value='$row[id]'>
                           
                           
                        <img class='img-fluid img-thumbnail height' src='$row[image]'width='300px' >
                        <h5 class='text-center text-capitalize'>Name: $row[name]</h5>
                        <h3 class='text-center text-capitalize'>Place: $row[place]</h3>
                        <h5 class='text-center text-capitalize'>Division:$row[division]</h5>
                        <h5 class='text-center text-capitalize'>Email: $row[email]</h5>
                        <button class='btn btn-outline-primary px-4 my-2 bg-success col-10' style='position:relative; left: 25px;'><a href='place.php? id=$row[id]' class='ancor'>More</a></button>
                     
                          
                </div>

                
           ";
        }
  ?>
</div> 

                        <!---------------------------------
                        -----------------------------------
                            
                            card/Places section ends here  

                        -----------------------------------
                        ------------------------------------>


                        <!---------------------------------
                        -----------------------------------
                            
                            Blog section section start here  

                        -----------------------------------
                        ------------------------------------>


<section class="my-4 card w-75" style="background-color: #E4E7ED; margin-left:200px;" id="post">
    <h1 style="text-align:center" > share your <span class="colorOrange">experience</span> </h1>
<form action="shareAction.php" method="post" enctype="multipart/form-data" class="row g-3 w-75 my-4" style="margin-left: 200px;" >
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="text" class="form-control" name="p_email" id="inputEmail4" required>
  </div>
  <div class="col-md-6">
    <label for="inputname4" class="form-label">Name</label>
    <input type="text" class="form-control" name="p_name" id="inputname4" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Places where you visit</label>
    <input type="text" class="form-control" name="p_place" id="inputAddress" placeholder="write visitted place" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Brief</label>
    <textarea class="form-control" name="p_brief" placeholder="Say something about place" id="floatingTextarea" required></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">How To Go</label>
    <textarea class="form-control" name="p_reach" placeholder="How To Go" id="floatingTextarea" required></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Where To Stay</label>
    <textarea class="form-control" name="p_stay" placeholder="Where To Stay" id="floatingTextarea" required></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Eating Facilities</label>
    <textarea class="form-control" name="p_eat" placeholder="Eating Facilities" id="floatingTextarea" required></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Date</label>
    <input type="datetime-local" name="p_time" value="" id="" required>
  </div>
    <div class="col-12">
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01"> Selection Division</label>
    </div>
   <select class="custom-select" name="p_division" id="inputGroupSelect01" required required>
      <option >Choose...</option>
      <option value="dhaka">Dhaka</option>
      <option value="sylhet">Sylhet</option>
      <option value="chittagonj">Chittagonj</option>
      <option value="rangpur">Rangpur</option>
      <option value="barishal">Barishal</option>
      <option value="khulna">Khulna</option>
      <option value="rajshahi">Rajshahi</option>
      <option value="mymensingh">Mymensingh</option>
    </select>
    </div>
  </div>
  <div class="col-12 my-3">
    <label for="inputAddress" class="form-label">Upload image here</label>
    <input type="file" name="file[]" id="" class="form-control" multiple required>
  </div>
  <div class="form-floating">
  <textarea class="form-control" name="p_comment" placeholder="share your journey" id="floatingTextarea" required></textarea>
  <label for="floatingTextarea">  </label>
</div>

  <div class=" d-grid gap-2 col-6 mx-auto">
    <button type="submit" name="p_submit" class="btn btn-outline-success">Share </button>
  </div>
</form>
</section>
                        <!---------------------------------
                        -----------------------------------
                            
                           Blog section section ends here  

                        -----------------------------------
                        ------------------------------------>                       
 </main>


             <!-- Footer section -->
    <?php include './footer/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

