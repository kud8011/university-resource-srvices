<?php
include('../dbconnect/dbconn.php');
$customer_id=$_REQUEST['customer_id'];

 $sql="delete from customer_details where customer_id='$customer_id'";
mysqli_query($conn,$sql);

?>
<script>
alert("deleted...");
document.location="customer_details_view.php";
</script>

