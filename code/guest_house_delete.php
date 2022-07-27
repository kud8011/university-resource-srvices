<?php
include('../dbconnect/dbconn.php');
$guest_house_id=$_REQUEST['guest_house_id'];

 $sql="delete from guest_house where guest_house_id='$guest_house_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="guest_house_view.php";
</script>

