<?php

include('../dbconnect/dbconn.php');


$guest_house_name=$_POST['guest_house_name'];
$total_no_of_rooms=$_POST['total_no_of_rooms'];
$description=$_POST['description'];
$location=$_POST['location'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];

$image=$_FILES['image']['name'];
$tmp_location=$_FILES['image']['tmp_name'];
$target="../images/".$image;
move_uploaded_file($tmp_location,$target);

 $sql="insert into guest_house values(null,'$guest_house_name','$total_no_of_rooms','$description','$location','$contact_no','$email_id','$image')";
mysqli_query($conn,$sql);

?>


<script language="javascript1.2">
alert("inserted....");
document.location="guest_house_view.php";
</script>