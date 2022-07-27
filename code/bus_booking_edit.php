<?php include('meta_tag.php'); ?>



    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

         <?php include('sidebar.php'); ?>

            <!-- Start right Content here -->

                    <!-- Top Bar Start -->
                   <?php include('topbar.php'); ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active">Form Elements</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title"><strong></strong>Bus Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Bus Booking Details </h4>
                                            <div class="general-label">
<?php
  include('../dbconnect/dbconn.php');
  $bus_booking_id=$_REQUEST['bus_booking_id'];
 $sql="select * from bus_booking where bus_booking_id='$bus_booking_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>
<form action="bus_booking_update.php" method="post" name="bus_booking" id="formID">
<input type="hidden" name="bus_booking_id" value="<?php echo $row['bus_booking_id'];?>">
  <p align="center">Bus Booking</p>
  <table width="440" border="1" align="center">
    <tr>
      <td width="240" height="79">Bus No</td>
	  <td width="337"><select name="bus_id" id="bus_id" class="validate[required]">
        <option value="">Select</option>
        <?php
		  include('../dbconnect/dbconn.php');
 
 $sql="select * from bus_details";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row['bus_id']?>"><?php echo $row['bus_no']?></option>
        <?php
 }
?>
      </select></td>
	  </tr>
    <tr>
      <td height="77">Customer FullName</td>
	  <td><select name="customer_id" id="customer_id" class="validate[required]">
        <option value="">Select</option>
        <?php
		  include('../dbconnect/dbconn.php');
 
 $sql="select * from customer_details";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row['customer_id']?>"><?php echo $row['customer_fullname']?></option>
        <?php
 }
?>
      </select></td>
    </tr>
    <tr>
      <td>No of seats </td>
      <td><input name="no_of_seats" type="text" class="form-control validate[required,custom[onlyNumber]]" id="no_of_seats" value="<?php echo $row['no_of_seats'];?>"></td>
    </tr>
    <tr>
      <td> Booking Description </td>
      <td><textarea name="bus_booking_description" class="form-control validate[required]" id="bus_booking_description" value="<?php echo $row['bus_booking_description'];?>"></textarea></td>
    </tr>
    <tr>
      <td>Bus Booking Date </td>
      <td><input name="bus_booking_date" type="date" class="form-control validate[required,custom[date]]" id="bus_booking_date" value="<?php echo $row['bus_booking_date'];?>"></td>
    </tr>
    <tr>
      <td>Bus Booking Status </td>
      <td><input name="bus_booking_status" type="text" class="form-control validate[required,custom[onlyLetter]]" id="bus_booking_status" value="<?php echo $row['bus_booking_status'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger" value="Reset">
      </div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p>&nbsp;  </p>
</form>
</div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                            
                            </div> <!-- end row -->                             

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
 <?php include('footer.php'); ?>
 <?php include('val.php'); ?>
