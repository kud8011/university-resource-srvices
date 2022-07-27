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
                                        <h4 class="page-title">Bus Details Form Elements</h4>
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
<form action="bus_details_insert.php" enctype="multipart/form-data" method="post" id="formID">
  <div align="center">
    <table width="660" border="0">
      <tr>
        <td width="171" height="73">Bus No</td>
        <td width="479"><input name="bus_no" type="text" class="validate[required]" id="bus_no"></td>
      </tr>
      <tr>
        <td height="61">No of seats </td>
        <td><input name="no_of_seats" type="text" class="validate[required,custom[onlyNumber]]" id="no_of_seats"></td>
      </tr>
      <tr>
        <td height="65">From route </td>
        <td><input name="from_route" type="text" class="validate[required,custom[onlyLetter]]" id="from_route"></td>
      </tr>
      <tr>
        <td height="74">Go route </td>
        <td><input name="go_route" type="text" class="validate[required,custom[onlyLetter]]" id="go_route"></td>
      </tr>
      <tr>
        <td height="69">Bus Fare </td>
        <td><input name="bus_fare" type="text" class="validate[required,custom[onlyNumber]]" id="bus_fare"></td>
      </tr>
      <tr>
        <td height="57">Contact No </td>
        <td><input name="contact_no" type="text" class="validate[required,custom[mobile]]" id="contact_no"></td>
      </tr>
      <tr>
        <td height="67">Email Id </td>
        <td><input name="email_id" type="text" class="validate[required,custom[email]]" id="email_id"></td>
      </tr>
      <tr>
        <td height="71"> Bus Image</td>
        <td><input name="bus_image" type="file" class="validate[required]" id="bus_image"></td>
      </tr>
      <tr>
        <td height="81" colspan="2"><div align="center">
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
