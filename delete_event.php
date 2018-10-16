<?php

$id=$_GET['event_id'];
$con = mysqli_connect("localhost","root","","event_management"); //keep your db name

$sqll="DELETE FROM event_list WHERE e_id = '$id'";
if (mysqli_query($con, $sqll)) {
	
	header("location:admin_home.php");
echo "<script>
alert('Records deleted successfully');
</script>";
} 
else 
{ 
echo "Error deleting record: " . mysqli_error($conn);
}