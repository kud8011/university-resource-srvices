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
                                        <h4 class="page-title"><strong></strong>Guest House Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Guest House Booking Details </h4>
                                            <div class="general-label">

<?php
 include('../dbconnect/dbconn.php');
 $guest_house_booking_id=$_REQUEST['guest_house_booking_id'];
 $sql="select * from guest_house_booking where guest_house_booking_id='$guest_house_booking_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>
<form action="guest_house_booking_update.php" method="post" name="guest_house_booking" id="guest_house_booking">
<input type="hidden" name="guest_house_booking_id" value="<?php echo $row['guest_house_booking_id'];?>">
  <div align="center">
    <p>Guest House Booking</p>
    <table width="519" border="1">
      <tr>
        <td width="275">Guest House Id </td>
        <td width="228"><input name="guest_house_id" type="text" class="form-control validate[required,custom[onlyNumber]]" id="guest_house_id" value="<?php echo $row['guest_house_id'];?>"></td>
      </tr>
      <tr>
        <td>Customer Id </td>
        <td><input name="customer_id" type="text" id="customer_id" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['customer_id'];?>"></td>
      </tr>
      <tr>
        <td>From Date</td>
        <td><input name="from_date" type="date" id="from_date" class="form-control validate[required,custom[Date]]" value="<?php echo $row['from_date'];?>"></td>
      </tr>
      <tr>
        <td>To Date </td>
        <td><input name="to_date" type="date" id="to_date" class="form-control validate[required,custom[Date]]" value="<?php echo $row['to_date'];?>"></td>
      </tr>
      <tr>
        <td>Booking Description</td>
        <td><textarea name="ghbooking_description" id="ghbooking_description" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['ghbooking_description'];?>"></textarea></td>
      </tr>
      <tr>
        <td>Booking Date </td>
        <td><input name="ghbooking_date" type="date" id="ghbooking_date" class="form-control validate[required,custom[Date]]" value="<?php echo $row['ghbooking_date'];?>"></td>
      </tr>
      <tr>
        <td>Booking Status </td>
        <td><input name="ghbooking_status" type="text" id="ghbooking_status" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['ghbooking_status'];?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger" value="Reset">
        </div></td>
      </tr>
    </table>
    <p>&nbsp;    </p>
  </div>
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

