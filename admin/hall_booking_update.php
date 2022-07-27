<?php


include('../dbconnect/dbconn.php');

$hall_id=$_POST['hall_id'];
$customer_id=$_POST['customer_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$booking_description=$_POST['booking_description'];
$booking_date=$_POST['booking_date'];
$booking_status=$_POST['booking_status'];

$hall_booking_id=$_POST['hall_booking_id'];

$sql="update hall_booking set hall_id='$hall_id',customer_id='$customer_id',from_date='$from_date',to_date='$to_date',booking_description='$booking_description',booking_date='$booking_date',booking_status='$booking_status' where hall_booking_id='$hall_booking_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="hall_booking_view.php";
</script>
