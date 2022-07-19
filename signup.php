<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Frosthackcss/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
 </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="container-fluid">
      <img class="d-block img-fluid mx-auto" src="images_frost hack1/logo.png" alt="Bootstrap" width="64" height="51">
      <a class="navbar-brand" href="#"><h1>CareX</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="services.php">Give your service</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact for service</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
        </ul>
       <form class="form-inline my-2 my-lg-0">
       <a href="login.php" class="btn btn-outline-primary my-2 my-sm-0" role="button" style="margin-right: 15px">Login</a>
       <a href="signup.php" class="btn btn-outline-primary my-2 my-sm-0" role="button">Signup</a>
     </form>
       </div>
    </div>
  </nav>



<section> 
	<div class="w-50 m-auto">
		<form action="userinfosignup.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Date of birth</label>
        <input type="date" name="date" autocomplete="off" class="form-control">
      </div>
      <button type="submit" class="btn btn-outline-success">Submit</button>
	     </form>
	</div>
</section>	



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>