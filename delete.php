 

<?php 
$delete_id="";
 
$connection=mysqli_connect("localhost","root","","hotel1");


$delete_id=$_GET['del'];
if(isset($delete_id)){
 
$query="delete from book where id='$delete_id'";
if(mysqli_query($connection,$query))
	echo "<script>window.open('admin pending.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>