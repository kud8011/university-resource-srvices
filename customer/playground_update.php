<?php


include('../dbconnect/dbconn.php');

$playground_name=$_POST['playground_name'];
$playground_description=$_POST['playground_description'];
$playground_location=$_POST['playground_location'];
$capacity=$_POST['capacity'];
$ground_image=$_POST['ground_image'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];

$playground_id=$_POST['playground_id'];

$sql="update playground set playground_name='$playground_name',playground_description='$playground_description',playground_location='$playground_location',capacity='$capacity',ground_image='$ground_image',contact_no='$contact_no',email_id='$email_id' where playground_id='$playground_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="playground_view.php";
</script>
