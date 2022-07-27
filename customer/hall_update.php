<?php


include('../dbconnect/dbconn.php');

$hall_name=$_POST['hall_name'];
$hall_description=$_POST['hall_description'];
$location=$_POST['location'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$capacity=$_POST['capacity'];
$hall_images=$_POST['hall_images'];
$hall_perday_rate=$_POST['hall_perday_rate'];

$hall_id=$_POST['hall_id'];

$sql="update hall set hall_name='$hall_name',hall_description='$hall_description',location='$location',contact_no='$contact_no',email_id='$email_id',capacity='$capacity',hall_images='$hall_images',hall_perday_rate='$hall_perday_rate' where hall_id='$hall_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="hall_view.php";
</script>
