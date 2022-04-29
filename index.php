<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buit-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
    width: 1100px;
	height: 500px;
  }
  .navbar-nav
  {
	 float: right; 
  }
  .card-columns
  {
	  float: center;
  }
  </style>
</head>
<body>
<div class="container-fluid">
<nav class="navbar sticky-top">
<a class="navbar-brand" href="home.php" style="font-size:22px; font-weight: bold;"><img class="img-fluid" src="images\buit.jpg" alt="bulogo" style="height:70px; width:100px;">BUIT, Barkatullah University, Bhopal</a>
 
 <ul class="nav justify-content-end">
  <li class="nav-item">
     <div class="dropdown">
    <button type="button" class="btn btn-prmary dropdown-toggle" data-toggle="dropdown">
      Departments
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Departments/cse.php">Computer science & Engineering</a>
      <a class="dropdown-item" href="Departments/CE.php">Civil Engineering</a>
      <a class="dropdown-item" href="Departments/EE.php">Electrical Engineering</a>
	  <a class="dropdown-item" href="Departments/ECE.php">Electronics & communication Engineering</a>
	  <a class="dropdown-item" href="Departments/IT.php">Information Technology</a>
	  <a class="dropdown-item" href="Departments/MCA.php">MCA</a>
	  <a class="dropdown-item" href="Departments/ME.php">Machanical Engineering</a>
	  <a class="dropdown-item" href="Departments/Chemistry">Chemistry Department</a>
	  <a class="dropdown-item" href="Departments/Humanity.php">Humanity</a>
	  <a class="dropdown-item" href="Departments/mathematics.php">Mathematics</a>
	  <a class="dropdown-item" href="Departments/physics.php">Physics</a>
    </div>
  </div>
  </li>
  <li class="nav-item">
	<div class="dropdown">
		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Courses</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Bechelor in Engineering</a>
    <a class="dropdown-item" href="#">Master of Technology</a>
	<a class="dropdown-item" href="#">MCA</a>
	<a class="dropdown-item" href="#">M.Sc</a>
  </div>
</div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact-us.php">Contact us</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Training</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="student -corner.php">Student corner</a>
  </li>
</ul>
</nav>
</div>

<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
	<li data-target="#demo" data-slide-to="4"></li>
	
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\buit-building.jpeg" alt="" >
    </div>
	<div class="carousel-item">
      <img src="images\image-slide-1.jpg" alt="" >
    </div>
    <div class="carousel-item">
      <img src="images\image-slide-2.jpg" alt="" >
    </div>
    <div class="carousel-item">
      <img src="images\image-slide-3.jpg" alt="" >
    </div>
	<div class="carousel-item">
      <img src="images\image-slide-5.jpg" alt="" >
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<hr>
<div class="container">
<h4>About UIT</h4>
<p>The University Institute of Technology, (UIT) Barkatullah University, Bhopal (Formerly called College of Engineering) is a self-financing technical institute, established in August 1997. AICTE approved B.E, M. Tech, MCA courses are offered in this institute. It has 5 undergraduate, 6 postgraduate programs and diploma courses in emerging areas of engineering and technology. University Institute of Technology aims to impart futuristic technical education and instill high patterns of discipline through the dedicated well qualified faculty and supporting staff.</p>

<h4>From Director's Desk</h4>
<img src="images\director.jpg" alt="" width="170px" height="200px">
<p>UIT is a pioneer institute of technical education in the state of M.P. It is a self finance institute affiliated to Barkatullah University. The institute is recognized for its commitment to student excellence through emphasis on rigorous learning experience. I am glad to welcome you to the portico of this institution which is diligently committed to the case of high quality technical education.</p>
</div>
<hr>
<div class="card-columns">
  <div class="card bg-primary">
    <div class="card-body text-center">
	<h4>Vision</h4>
      <p class="card-text">“The central tenet of our vision is commitment to academic excellence, Innovation and creativity, Respect for cultural diversity, individual dignity & worth, social and professional growth of region and the nation.”</p>
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">
	<h4>Mission</h4>
      <p class="card-text">"To develop UIT as “A globally renowned institute for outstanding academic programs that foster active students participation through applied Learning, Research and Social Services.”</p>
    </div>
  </div>
</div>
<hr>
<h4>Events</h4>
<img src="images\event1.jpg" alt="" style="width: 700px; height: 1000px;">
<hr>
<div class="container-fluid">

</div>
</div>
</body>
</html>

