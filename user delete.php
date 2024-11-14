 

<?php 
$delete_id="";
 
$connection=mysqli_connect("localhost","root","","hotel1");


$delete_id=$_GET['udel'];
if(isset($delete_id)){
 
$query="delete from book where id='$delete_id'";
if(mysqli_query($connection,$query))
	echo "<script>window.open('user panel.php?deleted=request has been deleted!!!','_self')</script>";

}
 
 ?>