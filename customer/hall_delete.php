<?php
include('../dbconnect/dbconn.php');
$hall_id =$_REQUEST['hall_id'];

 $sql="delete from hall where hall_id='$hall_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="hall_view.php";
</script>

