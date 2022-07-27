

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
                                        <h4 class="page-title"><strong></strong>Playground Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Playground Booking Details </h4>
                                            <div class="general-label">
<?php
 include('../dbconnect/dbconn.php');
 $playground_booking_id=$_REQUEST['playground_booking_id'];
 $sql="select * from playground_booking where playground_booking_id='$playground_booking_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>
<form action="playground_booking_update.php" method="post" name="playground_booking" id="playground_booking">
<input type="hidden" name="playground_booking_id" value="<?php echo $row['playground_booking_id'];?>">
  <div align="center">
    <p>Playground Booking</p>
    <table width="680" border="1">
      <tr>
        <td width="316">Playground Id </td>
        <td width="348"><input name="playground_id" type="text" id="playground_id" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['playground_id'];?>"></td>
      </tr>
      <tr>
        <td>Customer Id </td>
        <td><input name="customer_id" type="text" id="customer_id" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['customer_id'];?>"></td>
      </tr>
      <tr>
        <td>From Date </td>
        <td><input name="from_date" type="date" id="from_date" class="form-control validate[required,custom[Date]]" value="<?php echo $row['from_date'];?>"></td>
      </tr>
      <tr>
        <td>To Date </td>
        <td><input name="to_date" type="date" id="to_date" class="form-control validate[required,custom[Date]]" value="<?php echo $row['to_date'];?>"></td>
      </tr>
      <tr>
        <td>Booking Description </td>
        <td><textarea name="pgbooking_description" id="pgbooking_description" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['pgbooking_description'];?>"></textarea></td>
      </tr>
      <tr>
        <td>Booking Date </td>
        <td><input name="pgbooking_date" type="date" id="pgbooking_date" class="form-control validate[required,custom[Date]]" value="<?php echo $row['pgbooking_date'];?>"></td>
      </tr>
      <tr>
        <td>Booking Status </td>
        <td><input type="text" name="pgbooking_status" id="pgbooking_status" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['pgbooking_status'];?>"></td>
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

