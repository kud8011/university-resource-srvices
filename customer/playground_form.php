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
                                        <h4 class="page-title">Playground  Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Playground  </h4>
                                            <div class="general-label">
<form action="playground_insert.php" method="post" enctype="multipart/form-data" name="playground" id="formID">
  <div align="center">
    <table width="562" border="0">
      <tr>
        <td width="233" height="88">Playground Name </td>
        <td width="319"><input name="playground_name" type="text" class="validate[required,custom[onlyLetter]]" id="playground_name"></td>
      </tr>
      <tr>
        <td height="123">Playground Description</td>
        <td><textarea name="playground_description" class="validate[required,custom[onlyLetter]]" id="playground_description"></textarea></td>
      </tr>
      <tr>
        <td height="70">Playground Location</td>
        <td><input name="playground_location" type="text" class="validate[required,custom[onlyLetter]]" id="playground_location"></td>
      </tr>
      <tr>
        <td height="58">Capacity</td>
        <td><input name="capacity" type="text" class="validate[required,custom[onlyNumber]]" id="capacity"></td>
      </tr>
      <tr>
        <td height="67">Ground Image</td>
        <td><input name="ground_image" type="file" class="validate[required]" id="ground_image"></td>
      </tr>
      <tr>
        <td height="51">Contact No</td>
        <td><input name="contact_no" type="text" class="validate[required,custom[mobile]]" id="contact_no"></td>
      </tr>
      <tr>
        <td height="62">Email Id </td>
        <td><input name="email_id" type="text" class="validate[required,custom[email]]" id="email_id"></td>
      </tr>
      <tr>
        <td height="80" colspan="2"><div align="center">
          <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset"  class="btn btn-danger" value="Reset">
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
