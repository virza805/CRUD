<?php 

include 'lib/Database.php';
include 'config/config.php';


$db = new Database();
 ?>
<?php 
$editid = $_GET['editid'];
if(isset($_POST['submit'])){

$name   = $_POST['name'];
$class   = $_POST['class'];
$email  = $_POST['email'];
$pwd    = $_POST['pwd'];
$age    = $_POST['age'];
$roll   = $_POST['roll'];
$fname  = $_POST['fname'];
$mname  = $_POST['mname'];

$query ="UPDATE student SET name='$name', class='$class', email='$email', pass='$pwd', age='$age', roll='$roll', fname='$fname', mname='$mname' WHERE id='$editid' ";
$update =$db->update($query);
if($update){
    echo "<h3 class='text-success'> Data update sussecs </h3> ";
  }else{
    echo "<h3 class='text-danger'> Data update Not ok </h3> ";
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
<!-- 
<?php 

$query = "SELECT * FROM student WHERE id= '$editid' ";
$edit = $db->select($query);
while ($result = $edit->fetch_assoc()) {
  
 ?>


  <form action="" method="post">

  	<div class="form-group">
  		
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Name" name="name" value="<?php echo $result['name'] ?>">
    </div>
    <div class="form-group">
      
      <label for="cla">Class:</label>
      <input type="text" class="form-control" id="cla" placeholder="Enter Class" name="class" value="<?php echo $result['class'] ?>">
    </div>
    <div class="form-group">
    	
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $result['email'] ?>">
    </div>
    <div class="form-group">
    	
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $result['pass'] ?>">
    </div>
     <div class="form-group">
    
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $result['age'] ?>">
    </div>
     <div class="form-group">
     
      <label for="roll">Roll:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll" value="<?php echo $result['roll'] ?>">
    </div>
    <div class="form-group">
    	
      <label for="fname">Father Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Father Name" name="fname" value="<?php echo $result['fname'] ?>">
    </div>
    <div class="form-group">
    	
      <label for="mname">Mother Name:</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter Mother Name" name="mname" value="<?php echo $result['mname'] ?>">
    </div>
    <div class="form-group text-center">
     
    <input type="submit" class="from-control btn btn-success" id="" name="submit" value="Update">
    </div>
  </form>

 <?php } ?>  -->
</div>

<div class="container">
    <table border="1px"  class="table table-striped" >
      <thead>
                    <tr>
                      <th class="p-2">Id.No</th>
                      <th class="p-2">Name</th>
                      <th class="p-2">Class</th>
                      <th class="p-2">Email</th>
                      <th class="p-2">Pass</th>
                      <th class="p-2">Age</th>
                      <th class="p-2">Roll</th>
                      <th class="p-2">F.Name</th>
                      <th class="p-2">M.Name</th>
                      <th class="p-2">Action</th>
                    </tr>
      </thead>
 <?php 

$query = "SELECT * FROM student WHERE id= '$editid' ";
$edit = $db->select($query);
while ($result = $edit->fetch_assoc()) {
  
 ?>
      <tbody>
                    <tr>
                      <form enctype='multipart/form-data' role='form' method='post' action=' ' >
                        <td><input type="text" class="form-control" id="usr" placeholder="Enter Name" name="" value="<?php echo $result['id'] ?>"></td>
                        
                        <td><input type="text" class="form-control" id="usr" placeholder="Enter Name" name="name" value="<?php echo $result['name'] ?>"></td>
                        
                        <td><input type="text" class="form-control" id="cla" placeholder="Enter Class" name="class" value="<?php echo $result['class'] ?>"></td>
                        <td><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $result['email'] ?>"></td>

                        <td class='p-2'><input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $result['pass'] ?>"></td>
                        <td class='p-2'><input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $result['age'] ?>"></td>
                        <td><input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll" value="<?php echo $result['roll'] ?>"></td>
                        <td><input type="text" class="form-control" id="fname" placeholder="Enter Father Name" name="fname" value="<?php echo $result['fname'] ?>"></td>
                        <td><input type="text" class="form-control" id="mname" placeholder="Enter Mother Name" name="mname" value="<?php echo $result['mname'] ?>"></td>
                        <td>
                          <input type="submit" class="from-control btn btn-success" id="" name="submit" value="Update">
<!-- 
                          <button type='submit' class='btn btn-success' name='submite'>Delat</button> -->
                        </td>
                      </form> 
                    </tr>
      </tbody>
 <?php } ?> 

    </table>
</div>
<br>
<br>
<br>
	<link rel="stylesheet" href="bootstrap4/jquery-3.3.1.min.js">
	<link rel="stylesheet" href="bootstrap4/js/bootstrap.min.js">
</body>
</html>