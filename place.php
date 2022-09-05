<?php  include 'access.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Place</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">

    <style>
        .sizing{
            /* max-width: 100%;
            height: auto; */
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
        }
    </style>
</head>

<body>



    <!-- database theke fetching data -->
    <?php
    

              include 'connection.php';
              $id = $_REQUEST['id'];
             



            //   $name = $_REQUEST['username'];
                // $name = $_POST['l_username'];
              $allData = mysqli_query($conn,"SELECT * FROM `blog` WHERE id='$id'");

             //   row akare data ashbe
             while($row = mysqli_fetch_array($allData)) {
       echo"
            
        <div class='card mb-3 '>
            <img src='$row[image]' class='card-img-top sizing' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>Place Name : $row[place]</h5>
                <p class='card-text'>User Name: $row[name]</p>
            <p> Brief:<br>  $row[brief] </p> </br>
            <p> How To Reach:<br> $row[reach] </p> </br>
            <p>Eating Facilities:<br> $row[eat] </p> </br>
            <p>Your Comment:<br> $row[comment] </p> </br>
                <p class='card-text'><small class='text-muted'>$row[time]</small></p> </br>
            </div>
        </div>

                
           ";
        }
  ?>



    <!--  -->

    <!-- profile -->
    <!-- <div class="container-fluid mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    
                    <div class="text-center">
                        <img src="./img/med1.jpg" width="250" height="250" class="">
                    </div>
                    
                    <div class="text-center mt-3"> -->
                        
                        <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Profile</span> -->

                        <!-- <h5 class="mt-2 mb-0">Dr. Elizabeth Blackwell</h5>
                        <span>Medication</span>
                        
                        <div class="px-4 m-4">
                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        
                        </div>
                        
                         <ul class="social-list">
                            <li><i class="fa fa-facebook"></i></li>
                           
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            
                        </ul>
                        
                        <div class="buttons">
                            
                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3">Contact</button>
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div> -->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html> 