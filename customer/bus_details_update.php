<?php


include('../dbconnect/dbconn.php');

$bus_no=$_POST['bus_no'];
$no_of_seats=$_POST['no_of_seats'];
$from_route=$_POST['from_route'];
$go_route=$_POST['go_route'];
$bus_fare=$_POST['bus_fare'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$bus_image=$_POST['bus_image'];
$bus_id=$_POST['bus_id'];

$sql="update bus_details set bus_no='$bus_no',no_of_seats='$no_of_seats',from_route='$from_route',go_route='$go_route',bus_fare='$bus_fare',contact_no='$contact_no',email_id='$email_id',bus_image='$bus_image' where bus_id='$bus_id'";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("updated....");
document.location="bus_details_view.php";
</script>
