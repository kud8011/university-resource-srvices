

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
                                        <h4 class="page-title"><strong></strong>Hall Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Hall Booking Details </h4>
                                            <div class="general-label">
<?php
 include('../dbconnect/dbconn.php');
 $hall_booking_id=$_REQUEST['hall_booking_id'];
 $sql="select * from hall_booking where hall_booking_id='$hall_booking_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>

<form action="hall_booking_update.php" method="post" name="hall_booking" id="formID">
<input type="hidden" name="hall_booking_id" value="<?php echo $row['hall_booking_id'];?>">
  <p align="center">Hall Booking</p>
  <table width="459" border="1" align="center">
    <tr>
      <td width="276" height="63">Hall Name </td>
	  <td width="333"><select name="hall_id" id="hall_id" class="validate[required]">
        <option value="">Select</option>
        <?php
		  include('../dbconnect/dbconn.php');
 
 $sql="select * from hall";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row['hall_id']?>"><?php echo $row['hall_name']?></option>
        <?php
 }
?>
      </select></td>
          </tr>
    <tr>
      <td height="71">Customer Full Name </td>
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
      <td>From Date </td>
      <td><input name="from_date" type="date" id="from_date" class="form-control validate[required,custom[date]]" value="<?php echo $row['from_date'];?>"></td>
    </tr>
    <tr>
      <td>To Date </td>
      <td><input name="to_date" type="date" id="to_date" class="form-control validate[required,custom[date]]" value="<?php echo $row['to_date'];?>"></td>
    </tr>
    <tr>
      <td>Booking Description </td>
      <td><textarea name="booking_description" id="booking_description" class="form-control validate[required]" value="<?php echo $row['booking_description'];?>"></textarea>      </td>
    </tr>
    <tr>
      <td>Booking Date </td>
      <td><input name="booking_date" type="date" id="booking_date" class="form-control validate[required,custom[date]]" value="<?php echo $row['booking_date'];?>"></td>
    </tr>
    <tr>
      <td>Booking Status </td>
      <td><input name="booking_status" type="text" id="booking_status" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['booking_status'];?>"></td>
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

