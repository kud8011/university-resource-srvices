<?php


include('../dbconnect/dbconn.php');

$customer_fullname=$_POST['customer_fullname'];
$customer_address=$_POST['customer_address'];
$customer_city=$_POST['customer_city'];
$customer_contact_no=$_POST['customer_contact_no'];
$customer_email_id=$_POST['customer_email_id'];

$customer_id=$_POST['customer_id'];

$sql="update customer_details set customer_fullname='$customer_fullname',customer_address='$customer_address',customer_city='$customer_city',customer_contact_no='$customer_contact_no',customer_email_id='$customer_email_id' where customer_id='$customer_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="customer_details_view.php";
</script>
