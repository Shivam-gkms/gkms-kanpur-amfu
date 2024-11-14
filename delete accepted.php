 

<?php 
$delete_id="";
 
$connection=mysqli_connect("localhost","root","","hotel1");


$delete_id=$_GET['delacc'];
if(isset($delete_id)){
 
$query="delete from accept where id='$delete_id'";
if(mysqli_query($connection,$query))
	echo "<script>window.open('admin accepted.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>