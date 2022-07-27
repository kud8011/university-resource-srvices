<?php

include('../dbconnect/dbconn.php');


$playground_id=$_POST['playground_id'];
$customer_id=$_POST['customer_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$pgbooking_description=$_POST['pgbooking_description'];
$pgbooking_date=$_POST['pgbooking_date'];
$pgbooking_status=$_POST['pgbooking_status'];


 $sql="insert into  playground_booking values(null,'$playground_id','$customer_id','$from_date','$to_date','$pgbooking_description','$pgbooking_date','$pgbooking_status')";
mysqli_query($conn,$sql);

?>

<script language="javascript1.2">
alert("inserted....");
document.location="playground_booking_view.php";
</script>