<?php
include('../dbconnect/dbconn.php');
$playground_booking_id=$_REQUEST['playground_booking_id'];

 $sql="delete from playground_booking where playground_booking_id='$playground_booking_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="playground_booking_view.php";
</script>

