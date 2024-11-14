 

<?php 
$delete_id="";
 
$connection=mysqli_connect("localhost","root","","hotel1");



$delete_id=$_GET['delapp'];
if(isset($delete_id)){
 
$query="delete from approved where id='$delete_id'";
if(mysqli_query($connection,$query))
	echo "<script>window.open('admin approved.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>