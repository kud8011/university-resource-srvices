<?php
include('../dbconnect/dbconn.php');
$guest_house_booking_id=$_REQUEST['guest_house_booking_id'];

 $sql="delete from guest_house_booking where guest_house_booking_id='$guest_house_booking_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="guest_house_booking_view.php";
</script>

