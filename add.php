

<?php

//including the database connection file
$link = mysqli_connect("localhost", "root", "", "login");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $link1 =mysqli_select_db($link,'hospital');
  if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	 
if(isset($_POST['log1'])) { 
 
	$id = $_POST['id'];   
    $name = $_POST['name'];
	
    $no = $_POST['no'];
    $department = $_POST['department'];
	$date = $_POST['date'];
       
	   
    // checking empty fields
    if(empty($name) || empty($no) || empty($id)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($no)) {
            echo "<font color='red'>Number field is empty.</font><br/>";
        }
        
        if(empty($id)) {
            echo "<font color='red'>Doctor field is empty.</font><br/>";
        }
        
        //link to the previous page
        //echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
		
        $result = mysqli_query($link, "INSERT INTO `appointments`(`id`,`name`,  `no`, `department`,`date`)  VALUES('$id','$name','$no','$department','$date')");
        if (!$result) {
    echo "<font color='green'>Data error.";
}
        //display success message
		echo"<script>location.assign('index.php')</script>";
        echo "<font color='green'>Data added successfully.";
		//echo"<script>location.assign('index.php')</script>";
        //echo "<br/><a href='index.php'>View Result</a>";
    }
}
 
 
 
 
 
?>

