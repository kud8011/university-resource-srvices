<?php


include('../dbconnect/dbconn.php');

$guest_house_id=$_POST['guest_house_id'];
$customer_id=$_POST['customer_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$ghbooking_description=$_POST['ghbooking_description'];
$ghbooking_date=$_POST['ghbooking_date'];
$ghbooking_status=$_POST['ghbooking_status'];

$guest_house_booking_id=$_POST['guest_house_booking_id'];

$sql="update guest_house_booking set guest_house_id='$guest_house_id',customer_id='$customer_id',from_date='$from_date',to_date='$to_date',ghbooking_description='$ghbooking_description',ghbooking_date='$ghbooking_date',ghbooking_status='$ghbooking_status' where guest_house_booking_id='$guest_house_booking_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="guest_house_booking_view.php";
</script>
