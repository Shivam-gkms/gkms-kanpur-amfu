<?php 
$approved_id="";
 
$connection=mysqli_connect("localhost","root","","hotel1");


$approved_id=$_GET['app'];
if(isset($approved_id)){
 $query="INSERT INTO approved select * from accept where id='$approved_id'";
  $que="delete from accept where id='$approved_id'";
if(mysqli_query($connection,$query))
	echo "<script>window.open('admin accepted.php?deleted=request been approved!!!','_self')</script>";
if(mysqli_query($connection,$que))
	echo "<script>window.open('admin accepted.php?deleted=request been approved!!!','_self')</script>";	
	
}
 ?>