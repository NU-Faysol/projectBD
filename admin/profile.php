
      <!-- User Post table display -->
<div class="container-fluid">
<h1 class="mb-5 text-center bg-gray my-5" style="text-align: center;">Post Request Details</h1>
     <table class="table table-dark table-striped table-hover border border-2">
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Email</th> 
               <th scope="col">User Name</th>
               <th scope="col">Visited Place</th>
               <th scope="col">Division</th>
               <th scope="col">Image</th>
               <th scope="col">Comment</th>
               <th scope="col">Approve</th>
               <th scope="col">Update</th>
               <th scope="col">Reject</th>
               
            </tr>
        </thead>
             <tbody>

             <?php
              include '../connection.php';
              $allData = mysqli_query($conn,"SELECT * FROM `blog`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        <td>$row[email]</td>
                        <td>$row[name]</td>
                        <td>$row[place]</td>
                        <td>$row[division]</td>                       
                        <td><img src='../$row[image]' width='100px'></td> 
                        <td>$row[comment]</td>

                      
                        <td><a class='btn btn-success' href='approve.php? id=$row[id]'>Approve</a></td>
                        <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Reject</a></td>
                        
                        
                    </tr>";

              }

             ?>





            </div>






</body>
</html>