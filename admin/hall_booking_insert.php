<?php

include('../dbconnect/dbconn.php');


$hall_id=$_POST['hall_id'];
$customer_id=$_POST['customer_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$booking_description=$_POST['booking_description'];
$booking_date=$_POST['booking_date'];
$booking_status=$_POST['booking_status'];


 $sql="insert into  hall_booking values(null,'$hall_id','$customer_id','$from_date','$to_date','$booking_description','$booking_date','$booking_status')";
mysqli_query($conn,$sql);

?>

<script language="javascript1.2">
alert("inserted....");
document.location="hall_booking_view.php";
</script>