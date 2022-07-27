<?php

include('../dbconnect/dbconn.php');

$bus_no=$_POST['bus_no'];
$no_of_seats=$_POST['no_of_seats'];
$from_route=$_POST['from_route'];
$go_route=$_POST['go_route'];
$bus_fare=$_POST['bus_fare'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];


$bus_image=$_FILES['bus_image']['name'];
$tmp_location=$_FILES['bus_image']['tmp_name'];
$target="../images/".$bus_image;
move_uploaded_file($tmp_location,$target);


 $sql="insert into bus_details values(null,'$bus_no','$no_of_seats','$from_route','$go_route','$bus_fare','$contact_no','$email_id','$bus_image')";
mysqli_query($conn,$sql);
?>

<script language="javascript1.2">
alert("inserted....");
document.location="bus_details_view.php";
</script>