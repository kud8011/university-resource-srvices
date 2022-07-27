
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
                                        <h4 class="page-title"><strong></strong>Guest Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Guest House Details </h4>
                                            <div class="general-label">
<?php
 include('../dbconnect/dbconn.php');
 $guest_house_id=$_REQUEST['guest_house_id'];
 $sql="select * from guest_house where guest_house_id='$guest_house_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>

<form action="guest_house_update.php" method="post" enctype="multipart/form-data" name="guest_house" id="formID">
<input type="hidden" name="guest_house_id" value="<?php echo $row['guest_house_id'];?>">
  <p align="center">Guest House</p>
  <table width="472" border="1" align="center">
    <tr>
      <td width="219">Guest House Name </td>
      <td width="237"><input name="guest_house_name" type="text" id="guest_house_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['guest_house_name'];?>"></td>
    </tr>
    <tr>
      <td>Total no of rooms </td>
      <td><input name="total_no_of_rooms" type="text" class="form-control validate[required,custom[onlyNumber]]" id="total_no_of_rooms" value="<?php echo $row['total_no_of_rooms'];?>"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" id="description" class="form-control validate[required]" value="<?php echo $row['description'];?>"></textarea></td>
    </tr>
    <tr>
      <td>Location</td>
      <td><input name="location" type="text" id="location" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['location'];?>"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id" class="form-control validate[required,custom[Email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
	<tr>
      <td>Image</td>
      <td><input name="image" type="file" id="image" class="form-control validate[required]" value="<?php echo $row['image'];?>"></td>
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

