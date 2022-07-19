<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="css/ad_style.css">

    <title>Admin Login</title>
</head>
<body>
    <!--header area starts here!-->
    <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student's World</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="ad_login.php">Admin Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="st_login.php">Student Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--header area ends here!-->

   
    <div class="main-box">
        <div class="box">
    <form method="post" action="ad_core.php"> 
     <h3>Admin Login</h3>
    <h5>Admin Information</h5>
       
<div class="mb-2">
    <label for="username">User Name:</label>
           <input id="inpt" class="form-control" type="text" name="usr_nm" placeholder="Enter your user name" required>
</div>

<div class="mb-4">
    <label for="password">Password:</label>
           <input id="inpt" class="form-control" type="password" name="pwd" placeholder="Enter your password" required>
</div>
           
<input name="login" class="form-control" type="submit" value="Login Now">
</form>
        </div>
    </div>



     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
  
  </body>
</body>
</html>