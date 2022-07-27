<?php

include('../dbconnect/dbconn.php');


$guest_house_id=$_POST['guest_house_id'];
$customer_id=$_POST['customer_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$ghbooking_description=$_POST['ghbooking_description'];
$ghbooking_date=$_POST['ghbooking_date'];
$ghbooking_status=$_POST['ghbooking_status'];


 $sql="insert into  guest_house_booking values(null,'$guest_house_id','$customer_id','$from_date','$to_date','$ghbooking_description','$ghbooking_date','$ghbooking_status')";
mysqli_query($conn,$sql);

?>

<script language="javascript1.2">
alert("inserted....");
document.location="guest_house_booking_view.php";
</script>