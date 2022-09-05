  <?php include 'access.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Upload</title>

     <!-- custom styles  -->

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
        

<section class="my-4 card w-75" style="background-color: #E4E7ED; margin-left:200px;" id="post">
    <h1 style="text-align:center" > share your <span class="colorOrange">experience</span> </h1>
<form action="shareAction.php" method="post" enctype="multipart/form-data" class="row g-3 w-75 my-4" style="margin-left: 200px;" >
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="text" class="form-control" name="p_email" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputname4" class="form-label">Name</label>
    <input type="text" class="form-control" name="p_name" id="inputname4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Places where you visit</label>
    <input type="text" class="form-control" name="p_place" id="inputAddress" placeholder="write visitted place">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Brief</label>
    <textarea class="form-control" name="p_brief" placeholder="Say something about place" id="floatingTextarea"></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">How To Go</label>
    <textarea class="form-control" name="p_reach" placeholder="How To Go" id="floatingTextarea"></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Where To Stay</label>
    <textarea class="form-control" name="p_stay" placeholder="Where To Stay" id="floatingTextarea"></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Eating Facilities</label>
    <textarea class="form-control" name="p_eat" placeholder="Eating Facilities" id="floatingTextarea"></textarea>
    
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Date</label>
    <input type="datetime-local" name="p_time" value="" id="">
  </div>
    <div class="col-12">
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01"> Selection Division</label>
    </div>
   <select class="custom-select" name="p_division" id="inputGroupSelect01">
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
    <input type="file" name="file[]" id="" class="form-control" multiple>
  </div>
  <div class="form-floating">
  <textarea class="form-control" name="p_comment" placeholder="share your journey" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">  </label>
</div>

  <div class=" d-grid gap-2 col-6 mx-auto">
    <button type="submit" name="p_submit" class="btn btn-outline-success">Share </button>
  </div>
</form>
</section>
</body>
</html>