<?php

$con = mysqli_connect("localhost", "id15229633_entry1", "}EkUE!635IA#eTW~", "id15229633_entry"); 
// $q = " DELETE FROM entry WHERE course_name = $course_name ";

$id = $_GET['id'];

$q = " DELETE FROM entry1 WHERE id = $id";

mysqli_query($con, $q);

header('location:r3trail.php');

?>
<?php

$con = mysqli_connect("localhost", "id15229633_entry1", "}EkUE!635IA#eTW~", "id15229633_entry"); 
// $q = " DELETE FROM entry WHERE course_name = $course_name ";

$id = $_GET['id'];

$q = " DELETE FROM entry2 WHERE id = $id";

mysqli_query($con, $q);

header('location:r5.php');

?>