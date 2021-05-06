<!DOCTYPE html>
<html>
<head>
	<title>Covid Warriors</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="democss/demostyle.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>
<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
button {
  background-color: #A9A9A9;
  color: white;
  padding: 14px 16px;
  margin: 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  display: block;
}

button:hover {
  opacity:0.5;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}


.modal {
  display: none; 
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #000000;
  cursor: pointer;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
	<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="https://www.google.com/search?q=covid+news&rlz=1C1VDKB_enIN949IN949&oq=covid+&aqs=chrome.1.69i57j0i67i131i433i457j0i402l2j0i67l2j69i61j69i60.4693j0j7&sourceid=chrome&ie=UTF-8">News</a></li>
  <li><a href="https://www.google.com/maps/@28.6687232,77.1457024,12z"> map</a></li>
  <li class="right"><a href="aboutus.php">About</a></li>
  
  <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto ; text-align: center;">Sign Up</button></li>

<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="/action_page.php">
	    <div class="container">
	      <h1>Sign Up</h1>
	      <p>Please fill in this form to create an account.</p>
	      <hr>
	      <label for="email"><b>Email</b></label>
	      <input type="text" placeholder="Enter Email" name="email" required>

	      <label for="psw"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>

	      <label for="psw-repeat"><b>Repeat Password</b></label>
	      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	      
	      <label>
	        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
	      </label>

	      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

	      <div class="clearfix">
	        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn">Sign Up</button>
	      </div>
	    </div>
	  </form>
	</div>


<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



</ul>
	<h1 align="center">Sabki Sahyata</h1>
	<p align="center">This website helps you to find a resources from where ever you want. </p>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:60px" >We are here for you!!</h1>
    <h3>Fight against this devil</h3>
    <a href="gallery.php" class="btn btn-outline-success"> So fight like a warrior </a>
  </div>
</div>
<br>
<br>
<section>
	<article class="all-browsers">
	  <h1>Most Popular Browsers</h1>
	  <article class="browser">
	    <h2>Google Chrome</h2>
	    <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
	  </article>
	  <article class="browser">
	    <h2>Mozilla Firefox</h2>
	    <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
	  </article>
	  <article class="browser">
	    <h2>Microsoft Edge</h2>
	    <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
	  </article>
	</article>
</section>


<section>
	<div>
		<h3 align="center">Review Section</h3>
	</div>

	<div align="center">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Your Review</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
		</form>
	</div>
</section>
<br>
<br>
<footer>
  <p>Author: Team Data N' Hack Elite<br>
  <a href="mailto:hege@example.com">shalu123@gmail.com</a></p>
</footer>


</body>
</html>