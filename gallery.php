
  <?php include 'access.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>

    <!-- custom styles  -->

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
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

<?php include '../projectBD/header/header.php'; ?>




                        <!---------------------------------
                        -----------------------------------
                            
                            --# card/places section start here #--  

                        -----------------------------------
 
                       ------------------------------------>

                              <div class='container-fluid' >
<?php
              include 'connection.php';
              $allData = mysqli_query($conn,"SELECT `image`, `place` FROM `blog`");

             //   row akare data ashbe
           
                echo"
                
                
                    <div class='menu-header bg-gray text-center p-3'>
                        
                    </div>";
 
                    while($row = mysqli_fetch_array($allData))
                    {
       echo"
            
                <div class='m-5 d-inline-block border '>

                        <img class='img-fluid img-thumbnail height' src='$row[image]'width='300px'>
                     
                        <h4 class='text-center text-capitalize'>Place: $row[place]</h4>
                     
                          
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
                    
 </main>


             <!-- Footer section -->
    <?php include './footer/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

