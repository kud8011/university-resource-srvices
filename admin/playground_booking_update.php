<?php


include('../dbconnect/dbconn.php');

$playground_id=$_POST['playground_id'];
$customer_id=$_POST['customer_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$pgbooking_description=$_POST['pgbooking_description'];
$pgbooking_date=$_POST['pgbooking_date'];
$pgbooking_status=$_POST['pgbooking_status'];

$playground_booking_id=$_POST['playground_booking_id'];

$sql="update playground_booking set playground_id='$playground_id',customer_id='$customer_id',from_date='$from_date',to_date='$to_date',pgbooking_description='$pgbooking_description',pgbooking_date='$pgbooking_date',pgbooking_status='$pgbooking_status' where playground_booking_id='$playground_booking_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="playground_booking_view.php";
</script>
