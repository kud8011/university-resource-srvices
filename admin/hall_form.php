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
                                        <h4 class="page-title">Hall Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Hall </h4>
                                            <div class="general-label">
<form action="hall_insert.php" method="post" enctype="multipart/form-data" name="hall" id="formID">
  <div align="center">
    <table width="586" border="0">
      <tr>
        <td width="223" height="57">Hall Name </td>
        <td width="353"><input name="hall_name" type="text" class="validate[required,custom[onlyLetter]]" id="hall_name"></td>
      </tr>
      <tr>
        <td height="127">Hall Description </td>
        <td><textarea name="hall_description" class="validate[required,custom[onlyLetter]]" id="hall_description"></textarea></td>
      </tr>
      <tr>
        <td height="61">Location</td>
        <td><input name="location" type="text" class="validate[required,custom[onlyLetter]]" id="location"></td>
      </tr>
      <tr>
        <td height="51">Contact No </td>
        <td><input name="contact_no" type="text" class="validate[required,custom[mobile]]" id="contact_no"></td>
      </tr>
      <tr>
        <td height="49">Email Id </td>
        <td><input name="email_id" type="text" class="validate[required,custom[email]]" id="email_id"></td>
      </tr>
      <tr>
        <td height="46">Capacity</td>
        <td><input name="capacity" type="text" class="validate[required,custom[onlyNumber]]" id="capacity"></td>
      </tr>
      <tr>
        <td height="59">Hall Images</td>
        <td><input name="hall_images" type="file" class="validate[required]" id="hall_images"></td>
      </tr>
      <tr>
        <td height="79">Hall Per Day Rate</td>
        <td><input name="hall_perday_rate" type="text" class="validate[required,custom[onlyNumber]]" id="hall_perday_rate"></td>
      </tr>
      <tr>
        <td height="73" colspan="2"><div align="center">
          <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset"  class="btn btn-danger" value="Reset">
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
