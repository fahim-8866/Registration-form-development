<?php

include ('connecton.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <style>
        body{
            background-image:linear-gradient(90deg,#d6eee2,#cadcf8);
            
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto mt-5 mb-4 border rounded-5 bg-warning">
        <div class="text-center ">
            <h1 class="text-primary mt-4">University of Prime Bangladesh</h1>
            <h2>Registration</h2>
            <p>Fill up this form</p>
        </div>
        <hr>
        <?php

        if(isset($_GET['error'])){
            $error = $_GET['error'];
            echo "<p class='text-danger text-center fs-5 fw-bold'>$error</p>";
        }
        ?>
         <?php

          if(isset($_GET['success'])){
              $success = $_GET['success'];
              echo "<p class='text-success text-center fs-5 fw-bold'>$success</p>";
          }
        ?>
        <form action="backend.php" method="post">
          <input type="text" class="form-control mt-4 p-3" placeholder="Your Genter" id="gen" name="gen">
          <input type="text" class="form-control mt-4 p-3" placeholder="Enter your name" id="name" name="name">
          <input type="text" class="form-control mt-4 p-3" placeholder="Enter your Email" id="email" name="email">
          <input type="text" class="form-control mt-4 p-3" placeholder="Enter your ID" id="ID" name="ID">
          <input type="text" class="form-control mt-4 p-3" placeholder="Enter your password" id="password" name="password">
          <input type="text" class="form-control mt-4 p-3" placeholder="Enter your semester" id="semester" name="semester">

          <button type="submit" class="btn btn-primary mt-4 mb-4" name="submit">Submit</button>
        </form>
          <hr>
          <div class="sign mt-3 text-center">
            <p>Don't have Student Account? <a href="">Sign up</a></p>
          </div>
      </div>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>