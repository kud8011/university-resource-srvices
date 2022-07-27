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
                                        <h4 class="page-title">Customer Details Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Customer Details </h4>
                                            <div class="general-label">
<form action="customer_details_insert.php" method="post" name="customer_details" id="formID">
  <div align="center">
    <table width="559" border="0">
      <tr>
        <td width="235" height="73">Customer Full Name </td>
        <td width="314"><input name="customer_fullname" type="text" class="validate[required,custom[onlyLetter]]" id="customer_fullname"></td>
      </tr>
      <tr>
        <td height="126">Customer Address</td>
        <td><textarea name="customer_address" class="validate[required,custom[onlyLetter]]" id="customer_address"></textarea></td>
      </tr>
      <tr>
        <td height="59">Customer City </td>
        <td><select name="customer_city" class="validate[required,custom[onlyLetter]]" id="customer_city">
          <option>Dharwad</option>
          <option>Hubli</option>
          <option>Bangalore</option>
          <option>Mangalore</option>
          <option>Haveri</option>
        </select></td>
      </tr>
      <tr>
        <td height="86">Customer Contact No </td>
        <td><input name="customer_contact_no" type="text" class="validate[required,custom[mobile]]" id="customer_contact_no"></td>
      </tr>
      <tr>
        <td height="87">Customer Email Id </td>
        <td><input name="customer_email_id" type="text" class="validate[required,custom[email]]" id="customer_email_id"></td>
      </tr>
      <tr>
        <td height="78" colspan="2"><div align="center">
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
