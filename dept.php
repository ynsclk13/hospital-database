
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
	
	

  </div>
</nav>

<div class="container">
			<div class="row">
				<div class="col">&nbsp;</div>
			</div>
			
			<div class="col-lg-12">
				
				<p class="lead">Doctors</p>
				<table class="table table-striped table-hover">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Doctors Name </th>
				     
				      <th scope="col">Level</th>
				      <th scope="col">Department</th>
					  
				     
				    </tr>
				  </thead>
				  <tbody>
<?php 

$link = mysqli_connect("localhost", "root", "", "login");
mysqli_select_db($link,"hospital");
                 
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $getdata = mysqli_query($link,"select * from doctors");
               
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($getdata)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $name = $b['name'];
                    
					$level = $b['level'];
					$department = $b['department'];
					
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>
                    <td>$name</td>
                    
					<td>$level</td>
					<td>$department</td>
					
				  
					
					
                </tr>";
                     
               }
                 
?>
			  
				  
		
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
</tbody>
				</table>
			</div>
			
			
		</div>
   

   


   
   
	
    
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
  </body>
</html>

