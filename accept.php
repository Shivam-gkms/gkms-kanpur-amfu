<?php 
$accept_id="";
 
$connection=mysqli_connect("localhost","root","","hotel1");


$accept_id=$_GET['acc'];
if(isset($accept_id)){
 $que="delete from book where id='$accept_id'";
 $query="INSERT INTO accept select * from book where id='$accept_id'";

if(mysqli_query($connection,$query))
	echo "<script>window.open('admin pending.php?deleted=request been accepted!!!','_self')</script>";
if(mysqli_query($connection,$que))
	echo "<script>window.open('admin pending.php?deleted=request been accepted!!!','_self')</script>";	
	
}
 ?>