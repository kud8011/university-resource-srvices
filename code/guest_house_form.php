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
                                        <h4 class="page-title">Guest House Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Guest House </h4>
                                            <div class="general-label">
<form action="guest_house_insert.php" method="post" enctype="multipart/form-data" name="guest_house" id="formID">
  <table width="646" border="0" align="center">
    <tr>
      <td width="223" height="76">Guest House Name </td>
      <td width="413"><input name="guest_house_name" type="text" class="validate[required,custom[onlyLetter]]" id="guest_house_name"></td>
    </tr>
    <tr>
      <td height="74">Total no of rooms </td>
      <td><input name="total_no_of_rooms" type="text" class="validate[required,custom[onlyNumber]]" id="total_no_of_rooms"></td>
    </tr>
    <tr>
      <td height="127">Description</td>
      <td><textarea name="description" class="validate[required]" id="description"></textarea></td>
    </tr>
    <tr>
      <td height="46">Location</td>
      <td><input name="location" type="text" class="validate[required,custom[onlyLetter]]" id="location"></td>
    </tr>
    <tr>
      <td height="49">Contact No </td>
      <td><input name="contact_no" type="text" class="validate[required,custom[mobile]]" id="contact_no"></td>
    </tr>
    <tr>
      <td height="48">Email Id </td>
      <td><input name="email_id" type="text" class="validate[required,custom[email]]" id="email_id"></td>
    </tr>
	<tr>
      <td height="57">Image</td>
      <td><input name="image" type="file" class="validate[required]" id="image"></td>
    </tr>
    <tr>
      <td height="78" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset"  class="btn btn-danger" value="Reset">
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


