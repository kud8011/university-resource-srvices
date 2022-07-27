<?php
include('../dbconnect/dbconn.php');
$bus_booking_id=$_REQUEST['bus_booking_id'];

 $sql="delete from bus_booking where bus_booking_id='$bus_booking_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="bus_booking_view.php";
</script>

