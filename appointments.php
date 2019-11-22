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



<form  method='post'>
<div class="form-group ml-5 mr-5 mt-5">
    <label for="exampleFormControlInput1">Your ID to search appointment</label>
    <input type="text" class="form-control" name="ids" >
	</div>
	<div class="form-group ml-5">
    <input type='submit' name= 'log2'  class="btn btn-primary  active mr-3" role="button" aria-pressed="true" value= "Search">
  </div>
 </form>
 
<?php 

$link = mysqli_connect("localhost", "root", "", "login");
mysqli_select_db($link,"hospital"); 
 
 if(isset($_POST['log2'])) {
		
	
	
	$id= $_POST['ids'];
	$GLOBALS['a']=$id;
	
	                
        if(empty($id)) {
            echo "<font color='red'>ID field is empty.</font><br/>";
        }
	  else {
		 $result = mysqli_query($link, "Select * from `appointments`where id=$id");
        if (!$result) {
				echo "<font color='green'>Data error.";
		}
		echo "<p class='lead'>Your Appointments</p>
					<table  id='editable' class='table table-striped table-hover'>
					<thead class='thead-dark'>
					<tr>
				      <th ml-3 scope='col'>    ID    </th>
				      <th scope='2'>Name  </th>
				      <th scope='2'>No	</th>
				      <th scope='col'>Department & Doctor	</th>
					  
					  <th scope='col'>Date	</th>
				      <th scope='col' colspan='2'>Action</th>
				    </tr>
					</thead>
					<tbody>";
 while ($b=mysqli_fetch_array($result)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $id = $b['id'];
                    $name = $b['name'];
					$no = $b['no'];
					$department = $b['department'];
					
                    $date = $b['date']; 
					
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<table  id='editable' class='table table-striped table-hover'>
					<tr>
					<td colspan='2'>$id</td>
                    <td colspan='2'>$name</td>
                    <td >$no</td>
					
					<td >$department</td>
					
					<td colspan='2'>$date</td>
					<form  method='post'>
					<input type='hidden' name='id' value= $id>
				    <td><input type='submit'  name='delete' class='btn btn-danger'  role='button' value='Delete'></td>		  
				  </form>
					
					
                </tr>
				</tbody>
				</table>";
                     
               }
		}
 }
 if(isset($_POST['delete'])) {
	 
	$id=$_POST['id'];
		
	echo "<font color='red'>$id";
 $result=mysqli_query($link, "delete  from `appointments`where id='$id'");
	if (!$result) {
				echo "<font color='green'>Data error.";
		}
		else {
echo "<font color='green'>Data deleted.";
		}
 

 
}
 
 
 
 
 
 
 
 ?>
 
<?php



 

 ?>
 </div>
 
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
 

 