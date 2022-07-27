<?php
include('../dbconnect/dbconn.php');
$bus_id=$_REQUEST['bus_id'];

 $sql="delete from bus_details where bus_id='$bus_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="bus_details_view.php";
</script>

