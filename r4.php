<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Detail1 </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 <th>id</th>
 <th>course_code</th>
 <th>course_name</th>
 <th>SEM_Year</th>
 <th>CAY</th>
 <th>Delete</th>
 


 </tr >

 <?php

$con = mysqli_connect("localhost", "id15229633_entry1", "}EkUE!635IA#eTW~", "id15229633_entry"); 
 $q = "SELECT * FROM entry1 WHERE  Department= 'Civil Engineering'";

 $query = mysqli_query($con,$q) or die("failed".mysqli_connect_error());

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['course_code'];  ?> </td>
 <td> <?php echo $res['course_name'];  ?> </td>
 <td> <?php echo $res['SEM_Year'];  ?> </td>
 <td> <?php echo $res['CAY'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="deleter4.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 

 </tr>

 <?php 
 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display display2 </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 <th>id</th>
 <th>Course code</th>
<th>Date</th>
<th>Guest Name</th>
<th>Guest_designation</th>

 <th> Delete </th>


 </tr >
 

 <?php

$con = mysqli_connect("localhost", "id15229633_entry1", "}EkUE!635IA#eTW~", "id15229633_entry"); 
$q = "SELECT * FROM entry2 WHERE  Department= 'Civil Engineering'";

 $query = mysqli_query($con,$q) or die("failed".mysqli_connect_error());

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['course_code'];  ?> </td>
 <td> <?php echo $res['lecture_date_and_time'];  ?> </td>
 <td> <?php echo $res['guest_name'];  ?> </td>
 <td> <?php echo $res['guest_designation'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="deleter4.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>

 </tr>

 <?php 
 
 }
  ?>
 
 </table>  

 </div>
 </div>
 <button><a href="index.php">BACK</button>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
<style>
button{
  font-size:20px;
}
table th{
    background-color:#17a2b8;
}
.text-warning {
    color: black!important;
}
</style>
</html>