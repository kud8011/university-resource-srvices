


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
                                        <h4 class="page-title"><strong></strong>Hall Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Hall Details </h4>
                                            <div class="general-label">
<?php
 include('../dbconnect/dbconn.php');
 $hall_id=$_REQUEST['hall_id'];
 $sql="select * from hall where hall_id='$hall_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>
<form action="hall_update.php" method="post" enctype="multipart/form-data" name="hall" id="hall">
<input type="hidden" name="hall_id" value="<?php echo $row['hall_id'];?>">
  <div align="center">
    <p>Hall </p>
    <table width="434" border="1">
      <tr>
        <td width="170">Hall Name </td>
        <td width="248"><input name="hall_name" type="text" id="hall_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['hall_name'];?>"></td>
      </tr>
      <tr>
        <td>Hall Description </td>
        <td><textarea name="hall_description" id="hall_description" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['hall_description'];?>"></textarea></td>
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
        <td>Capacity</td>
        <td><input name="capacity" type="text" id="capacity" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['capacity'];?>"></td>
      </tr>
      <tr>
        <td>Hall Images</td>
        <td><input name="hall_images" type="file" id="hall_images" class="form-control validate[required,custom[Image]]" value="<?php echo $row['hall_images'];?>"></td>
      </tr>
      <tr>
        <td>Hall Per Day Rate</td>
        <td><input name="hall_perday_rate" type="text" id="hall_perday_rate" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['hall_perday_rate'];?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger" value="Reset">
</div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
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

