<?php

include('../dbconnect/dbconn.php');


$bus_id	=$_POST['bus_id'];
$customer_id=$_POST['customer_id'];
$no_of_seats=$_POST['no_of_seats'];
$bus_booking_description=$_POST['bus_booking_description'];
$bus_booking_date=$_POST['bus_booking_date'];
$bus_booking_status=$_POST['bus_booking_status'];



$sql="insert into bus_booking values(null,'$bus_id','$customer_id','$no_of_seats','$bus_booking_description','$bus_booking_date','$bus_booking_status')";
mysqli_query($conn,$sql);

?>

<script language="javascript1.2">
alert("inserted....");
document.location="bus_booking_view.php";
</script>