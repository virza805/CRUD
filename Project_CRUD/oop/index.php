<?php 

include 'lib/Database.php';
include 'config/config.php';


$db = new Database();
 ?>
<?php 
if(isset($_POST['submit'])){

$name   = $_POST['name'];
$email  = $_POST['email'];
$pwd    = $_POST['pwd'];
$age    = $_POST['age'];
$roll   = $_POST['roll'];
$fname  = $_POST['fname'];
$mname  = $_POST['mname'];

$name_sms = '';
$class_sms = '';
$email_sms = ''; 
$pass_sms = '';
$age_sms = '';
$roll_sms = '';
$fname_sms = '';
$mname_sms = '';

if(empty($name)){
	$name_sms = "<h3 class='text-danger'>Name fild Empty</h3>";
}elseif (empty($email)) {
	$email_sms = "<h3 class='text-danger'>Email fild empty</h3>";
}elseif (empty($pwd )) {
	$pass_sms = "<h3 class='text-danger'>Password fild empty</h3>";
}elseif (empty($age)) {
	$age_sms = "<h3 class='text-danger'>age fild empty</h3>";
}elseif (empty($roll)) {
	$roll_sms = "<h3 class='text-danger'>roll fild empty</h3>";
}elseif (empty($fname)) {
	$fname_sms = "<h3 class='text-danger'>Father name fild empty</h3>";
}elseif (empty($mname)) {
	$mname_sms = "<h3 class='text-danger'>Mother name fild empty</h3>";
}
else{
	$query = "INSERT INTO student(name,email,pass,age,roll,fname,mname) VALUES ('$name','$email','$pwd','$age','$roll','$fname','$mname') ";

	$result = $db->insert($query);

	if($result){
		echo "<h3 class='text-success'> Data insert sussecs </h3> ";
	}else{
		echo "<h3 class='text-danger'> Data insert Not ok </h3> ";
	}
}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OOP Class Revision</title>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Frome -->
<div class="container">
  <h2 class="text-center">OOP = Object Oraent Poparti</h2>
  <h5 class="text-center">crud= Creat Read Update Delet</h5>
  <p class="text-center"><a href="view.php">View Data</a></p>
  <form action="" method="post">

  	<h2><?php 
  	if(isset($error)){
  		echo $error;
  	}

  	 ?></h2>


  	<div class="form-group">
      <?php 
      if(isset($name_sms)){
        echo $name_sms;
      }

       ?>
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
  		<?php 
  		if(isset($class_sms)){
  			echo $class_sms;
  		}

  		 ?>
      <label for="cla">class:</label>
      <input type="text" class="form-control" id="cla" placeholder="Enter class" name="class">
    </div>
    <div class="form-group">
    	<?php 
  		if(isset($email_sms)){
  			echo $email_sms;
  		}

  		 ?>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
    	<?php 
  		if(isset($pass_sms)){
  			echo $pass_sms;
  		}

  		 ?>
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     <div class="form-group">
     	<?php 
  		if(isset($age_sms)){
  			echo $age_sms;
  		}

  		 ?>
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
    </div>
     <div class="form-group">
     	<?php 
  		if(isset($roll_sms)){
  			echo $roll_sms;
  		}

  		 ?>
      <label for="roll">Roll:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll">
    </div>
    <div class="form-group">
    	<?php 
  		if(isset($fname_sms)){
  			echo $fname_sms;
  		}

  		 ?>
      <label for="fname">Father Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Father Name" name="fname">
    </div>
    <div class="form-group">
    	<?php 
  		if(isset($mname_sms)){
  			echo $mname_sms;
  		}

  		 ?>
      <label for="mname">Mother Name:</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter Mother Name" name="mname">
    </div>
    <div class="form-group text-center">
     
    <input type="submit" class="from-control btn btn-success" id="" name="submit" value="Submit">
    </div>
  </form>
</div>



	<link rel="stylesheet" href="bootstrap4/jquery-3.3.1.min.js">
	<link rel="stylesheet" href="bootstrap4/js/bootstrap.min.js">
</body>
</html>