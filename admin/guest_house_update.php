<?php


include('../dbconnect/dbconn.php');

$guest_house_name=$_POST['guest_house_name'];
$total_no_of_rooms=$_POST['total_no_of_rooms'];
$description=$_POST['description'];
$location=$_POST['location'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$image=$_POST['image'];

$guest_house_id=$_POST['guest_house_id'];

$sql="update guest_house set guest_house_name='$guest_house_name',total_no_of_rooms='$total_no_of_rooms',description='$description',location='$location',contact_no='$contact_no',email_id='$email_id',image='$image' where guest_house_id='$guest_house_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="guest_house_view.php";
</script>
