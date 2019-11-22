<!doctype html>







<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sabanci Hospital</title>
	
	
	
	
	
	
	
	
	
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
  <img src="img\h.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
  Sabanci Project Hospital
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <!--
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
	  -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="dept.php">Departments & Doctors</a>
         
          
          <div class="dropdown-divider"></div>
		 
		  <a class="dropdown-item" href="appointments.php">Appointments</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">We are Here For Your Health</a>
      </li>
    </ul>
	
	
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
	 <form action='login.php' method=POST >
	  <div class="md-form mb-5">
		<label data-error="wrong" data-success="right" >Your Username</label>
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" name="username" class="form-control validate">
          
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          <input type="password" name="password" class="form-control validate">
          
        </div>
	
      </div>
      <div class="modal-footer d-flex justify-content-center">
	 
        <input type='submit' name= "log"  class="btn btn-primary btn-sm active mr-3" role="button" aria-pressed="true" value= "Sign in">
      </div>
	  </form>
    </div>
  </div>
</div>

<a href="#" class="btn btn-primary btn-sm active mr-3" role="button" aria-pressed="true"data-toggle="modal" data-target="#modalLoginForm">Login</a>
	
	
	
	
	<!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	-->
  </div>
</nav>


   

	<div class="container mt-0" >
	<div class="row ">
	<div class="col-3">
	</div>
	<div class="col-6">
	</div>
	<div class="col-3">
      <h4> Get a Fast Appointment </h4>
    </div>
	
	</div>
  <div class="row">
  
    <div class="col-3">
	
      <div class="card text-white bg-primary mt-0" style="width: 18rem;">
  <img src="img\lab1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Our doctors and researchers are working hard to find better cures for 	fatal diseases</p>
  </div>
</div>
<div class="card text-white bg-success mt-3" style="width: 18rem;">
  <img src="img\lab2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">New equipments are added to our hospitals laboratory to inspect your samples well</p>
  </div>
</div>
    </div>
    <div class="col-6">
      <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide ml-3" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\drug.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Don't Want Drugs</h5>
          <p>Our doctors want your health and know the best drug for you so don't want drug other than they recommend you.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img\ed.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>24/7 Emergency</h5>
          <p>Our Emergency department serves you always with our proficient doctors and nurses</p>
        </div>
      </div>
	  <div class="carousel-item">
        <img src="img\hospital1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img\surgery.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






    </div>
    <div class="col-3">
  <form action='add.php' method='post'>
  <div class="form-group">
    <label for="exampleFormControlInput1">Your ID</label>
    <input type="text" class="form-control" name="id" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Your Name And Surname</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Your Phone Number</label>
    <input type="text" class="form-control" name="no" >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Doctor</label>
	
        <select class="form-control" name="department" id="dep">
		<option selected="" disabled="">Select Doctor</option>
		<?php 
		$link = mysqli_connect("localhost", "root", "", "login");
mysqli_select_db($link,"hospital");
                 
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $getdata = mysqli_query($link,"select * from doctors");
		while ($b=mysqli_fetch_array($getdata)){
		$dept_name=$b['department'];
		$namedoc=$b['name'];
		echo "<option value='$dept_name - $namedoc'>$namedoc -($dept_name)  </option>";
		
		}
		
		?>
		
	
     
    </select>
	
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="text" class="form-control" name="date" >
  </div>
  <div class="form-group">
    <input type='submit' name= 'log1'  class="btn btn-primary  active mr-3" role="button" aria-pressed="true" value= "Get Appointment">
  </div>
  
</form>
 
  </div>
    </div>
	</div>
	<div class="container mt-5"><span>© 2019 Sabanci Project Group</span>
	<div class="row ">
	<span>  Yunus CELIK</span>
	</div>
	<div class="row ">
	<span>  Cemil OZASLAN</span>
	</div>
	<div class="row ">
	<span>  Faroukhzon BAROTOV</span>
	</div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>