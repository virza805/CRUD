<?php 

include 'lib/Database.php';
include 'config/config.php';


$db = new Database();
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
  <p class="text-center"><a href="index.php">Add Data</a></p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id.No</th>
        <th>Name</th>
        <th>Class</th>
        <th>Email</th>
        <th>Pass</th>
        <th>Age</th>
        <th>Roll</th>
        <th>Father name</th>
        <th>Mather name</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      if(isset($_GET['delid'])){
        $deleteid = $_GET['delid'];
        $query = "DELETE FROM student WHERE id = '$deleteid' ";
        $delete = $db->delete($query);

        if($delete){
           echo "<h3 class='text-success'>DeleteSuccees</h3>";
        }else{
          echo "<h3 class='text-danger'>Delete faild</h3>";
        }
      }

       ?>
<?php 
$query = " SELECT * FROM student ";
$view = $db->select($query);
if($view){
  while($result = $view->fetch_assoc()) {
    
 ?>
      <tr>
        <td><?php echo $result['id'] ?></td>
        <td><?php echo $result['name'] ?></td>
        <td><?php echo $result['class'] ?></td>
        <td><?php echo $result['email'] ?></td>
        <td><?php echo $result['pass'] ?></td>
        <td><?php echo $result['age'] ?></td>
        <td><?php echo $result['roll'] ?></td>
        <td><?php echo $result['fname'] ?></td>
        <td><?php echo $result['mname'] ?></td>

        <td>
          <a href="view.php?delid=<?php echo $result['id'] ?>"  class='btn btn-danger '>Delat</a>
          <a href="edit.php?editid=<?php echo $result['id'] ?>"  class='btn btn-success '>Edit</a>
        </td>
        
      </tr>

<?php }}?>

    </tbody>
    
  </table>
</div>
<br>
<div class="container">
    <?php 
                if(isset($_GET["err"])){
                  echo "<div class='alert alert-danger'>{$_GET["err"]}</div>";
                }
               ?>
            <form  role="form" method="get" action="edit.php"><br>
              
              <br>

              <select type="text" name="cla" required class="input form-control"> <br>
              <?php  
              $sl="select DISTINCT(class) from student ";
              $r=$db->select($sl);
              if($r->num_rows>0){
                echo "<option value=''>Class</option>";
                while($ro=$r->fetch_assoc()){
                  echo "<option value='{$ro["class"]}'>{$ro["class"]}</option>";
                }
              }

               ?>

               </select> <br>
                
              
              <button type="submit" class="btn btn-success" name="update">Update</button> <br><br>
            </form>  <br>
</div>


	<link rel="stylesheet" href="bootstrap4/jquery-3.3.1.min.js">
	<link rel="stylesheet" href="bootstrap4/js/bootstrap.min.js">
</body>
</html>