<?php

include('../dbconnect/dbconn.php');


$hall_name=$_POST['hall_name'];
$hall_description=$_POST['hall_description'];
$location=$_POST['location'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$capacity=$_POST['capacity'];

$hall_images=$_FILES['hall_images']['name'];
$tmp_location=$_FILES['hall_images']['tmp_name'];
$target="../images/".$hall_images;
move_uploaded_file($tmp_location,$target);

$hall_perday_rate=$_POST['hall_perday_rate'];

 $sql="insert into  hall values(null,'$hall_name','$hall_description','$location','$contact_no','$email_id','$capacity','$hall_images','$hall_perday_rate')";
mysqli_query($conn,$sql);
?>

<script language="javascript1.2">
alert("inserted....");
document.location="hall_view.php";
</script>