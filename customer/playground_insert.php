<?php

include('../dbconnect/dbconn.php');


$playground_name=$_POST['playground_name'];
$playground_description=$_POST['playground_description'];
$playground_location=$_POST['playground_location'];
$capacity=$_POST['capacity'];

$ground_image=$_FILES['ground_image']['name'];
$tmp_location=$_FILES['ground_image']['tmp_name'];
$target="../images/".$ground_image;
move_uploaded_file($tmp_location,$target);

$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];


 $sql="insert into  playground values(null,'$playground_name','$playground_description','$playground_location','$capacity','$ground_image','$contact_no','$email_id')";
mysqli_query($conn,$sql);
?>

<script language="javascript1.2">
alert("inserted....");
document.location="playground_view.php";
</script>