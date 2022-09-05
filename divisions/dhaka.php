

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
              $allData = mysqli_query($conn,"SELECT * FROM `blog` WHERE division='dhaka'");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
       echo"
            
        <div class='card my-3 '>
            <img src='../$row[image]' class='card-img-top sizing' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>Place Name : $row[place]</h5>
                <p class='card-text'>User Name: $row[name]</p>
            <p> Brief:  $row[brief] </p> </br>
            <p> How To Reach: $row[reach] </p> </br>
           
            <p>Eating Facilities: $row[eat] </p> </br>
            <p>Your Comment: $row[comment] </p> </br>
                <p class='card-text'><small class='text-muted'>$row[time]</small></p> </br>
            </div>
        </div>

                
           ";
        }
  ?>

<!-- 
 <iframe className='map w-100 start-50 rounded' title='map' src={`https://maps.google.com/maps?q=${location.state.data.title}&t=k&z=13&ie=UTF8&iwloc=&output=embed`} width='400' height='300'  allowFullScreen=' loading='lazy'
             style={{border:'0'}}></iframe> -->
    <!--  -->





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html> 