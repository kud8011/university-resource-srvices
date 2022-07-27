<?php
include('../dbconnect/dbconn.php');
$playground_id=$_REQUEST['playground_id'];

 $sql="delete from playground where playground_id='$playground_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="playground_view.php";
</script>

