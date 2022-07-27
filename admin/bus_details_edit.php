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
                                        <h4 class="page-title"><strong></strong>Bus Details Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Bus Details </h4>
                                            <div class="general-label">
<?php
 include('../dbconnect/dbconn.php');
 $bus_id=$_REQUEST['bus_id'];
 $sql="select * from bus_details where bus_id='$bus_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>

<form action="bus_details_update.php" method="post" enctype="multipart/form-data" name="form1">
<input type="hidden" name="bus_id" value="<?php echo $row['bus_id'];?>">
  <div align="center">
    <p>Bus Details</p>
    <table width="508" border="1">
      <tr>
        <td width="244">Bus No</td>
        <td width="248"><input name="bus_no" type="text" class="form-control validate[required,custom[onlyNumber]]" id="bus_no" value="<?php echo $row['bus_no'];?>"></td>
      </tr>
      <tr>
        <td>No of seats </td>
        <td><input name="no_of_seats" type="text" class="form-control validate[required,custom[onlyNumber]]" id="no_of_seats" value="<?php echo $row['no_of_seats'];?>"></td>
      </tr>
      <tr>
        <td>From route </td>
        <td><input name="from_route" type="text" class="form-control validate[required,custom[onlyLetter]]" id="from_route" value="<?php echo $row['from_route'];?>"></td>
      </tr>
      <tr>
        <td>Go route </td>
        <td><input name="go_route" type="text" class="form-control validate[required,custom[onlyLetter]]" id="go_route" value="<?php echo $row['go_route'];?>"></td>
      </tr>
      <tr>
        <td>Bus Fare </td>
        <td><input name="bus_fare" type="text" class="form-control validate[required,custom[onlyNumber]]" id="bus_fare" value="<?php echo $row['bus_fare'];?>"></td>
      </tr>
      <tr>
        <td>Contact No </td>
        <td><input name="contact_no" type="text" class="form-control validate[required,custom[onlyNumber]]" id="contact_no" value="<?php echo $row['contact_no'];?>"></td>
      </tr>
      <tr>
        <td>Email Id </td>
        <td><input name="email_id" type="text" class="form-control validate[required,custom[Email]]" id="email_id" value="<?php echo $row['email_id'];?>"></td>
      </tr>
      <tr>
        <td> Bus Image</td>
        <td><input name="bus_image" type="file" class="form-control validate[required,custom[Image]]" id="bus_image" value="<?php echo $row['bus_image'];?>"></td>
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
