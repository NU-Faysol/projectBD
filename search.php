<?php include('./header/header.php') 



?>


<div class="container mt-5 mb-5">
    <h1 class="mb-5 text-center">Search Found</h1>
    <div class="row text-center w-100 m-auto">
        <?php
        include 'connection.php';

        $search = $_POST['search'];
        $alldata = mysqli_query($conn, "SELECT * FROM `blog` WHERE place = '$search'");
        


        while ($row = mysqli_fetch_array($alldata)) {
         
                echo "<div class='col-lg-4'>
                          <div class='card m-auto' style='width: 18rem;'>
                          <img src='$row[image]' class='card-img-top' alt='shop'>
                          <div class='card-body'>
                          <h5 class='card-title'>$row[name]</h5>
                          <p class='card-text'>$row[place]</p>
                          <p class='pcolor'> Price: $row[division]Tk</p>
                          <p class='pcolor'> Price: $row[email]Tk</p>
                          <a href='index.php? id=$row[id]' class='btn' id='btnadd'>Visit</a>
                          </div>
                          </div>
                     </div>
                ";
            };
            

            // $alldata1 = mysqli_query($conn, "SELECT * FROM `users` WHERE title = '$search'");

            // while ($row = mysqli_fetch_array($alldata1)) {
         
            //     echo "<div class='col-lg-4'>
            //               <div class='card m-auto' style='width: 18rem;'>
            //               <img src='$row[image]' class='card-img-top' alt='shop'>
            //               <div class='card-body'>
            //               <h5 class='card-title'>$row[title]</h5>
            //               <p class='card-text'>$row[category]</p>
            //               <p class='pcolor'> Price: $row[price]Tk</p>
            //               <a href='addtocartAction.php? id=$row[res_id]' class='btn' id='btnadd'>Add To Cart</a>
            //               </div>
            //               </div>
            //          </div>
            //     ";
            // };

            // $alldata3 = mysqli_query($conn, "SELECT * FROM `name_restuarnt` WHERE name = '$search'");

            // while ($row = mysqli_fetch_array($alldata3)) {
            //     echo "
            //     <div class='col-lg-4 mb-4'>
            //     <a href='allrestaurant.php? id=$row[res_id]'>
                
            //           <div class='card m-auto' style='width: 18rem;'>
            //           <img src='$row[image]' class='card-img-top' alt='shop'>
            //           <div class='card-body'>
            //           <h5 class='card-title'>$row[name]</h5>
            //           </div>
            //           </div>
                
            //      </a>
            //      </div>
            // ";
            // }

            
        
        ?>
    </div>
</div>



<?php include('./footer/footer.php') ?>