


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
                                        <h4 class="page-title"><strong></strong>Playground Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Playground Details </h4>
                                            <div class="general-label">
<?php
 include('../dbconnect/dbconn.php');
 $playground_id=$_REQUEST['playground_id'];
 $sql="select * from playground where playground_id='$playground_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>
<form action="playground_update.php" method="post" enctype="multipart/form-data" name="playground" id="playground">
<input type="hidden" name="playground_id" value="<?php echo $row['playground_id'];?>">
  <div align="center">
    <p>Playground</p>
    <table width="463" border="1">
      <tr>
        <td width="216">Playground Name </td>
        <td width="231"><input name="playground_name" type="text" class="form-control validate[required,custom[onlyLetter]]" id="playground_name" value="<?php echo $row['playground_name'];?>"></td>
      </tr>
      <tr>
        <td>Playground Description</td>
        <td><textarea name="playground_description" id="playground_description" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['playground_description'];?>"></textarea></td>
      </tr>
      <tr>
        <td>Playground Location</td>
        <td><input name="playground_location" type="text" id="playground_location" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['playground_location'];?>"></td>
      </tr>
      <tr>
        <td>Capacity</td>
        <td><input name="capacity" type="text" id="capacity" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['capacity'];?>"></td>
      </tr>
      <tr>
        <td>Ground Image</td>
        <td><input name="ground_image" type="file" id="ground_image" class="form-control validate[required,custom[Image]]" value="<?php echo $row['ground_image'];?>"></td>
      </tr>
      <tr>
        <td>Contact No</td>
        <td><input name="contact_no" type="text" id="contact_no" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['contact_no'];?>"></td>
      </tr>
      <tr>
        <td>Email Id </td>
        <td><input name="email_id" type="text" id="email_id" class="form-control validate[required,custom[Email]]" value="<?php echo $row['email_id'];?>"></td>
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

