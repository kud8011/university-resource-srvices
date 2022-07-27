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
                                        <h4 class="page-title"><strong></strong>Customer Details Form Elements</h4>
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

<?php
 include('../dbconnect/dbconn.php');
 $customer_id=$_REQUEST['customer_id'];
 $sql="select * from customer_details where customer_id='$customer_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 
 ?>

<form action="customer_details_update.php" method="post" name="customer_details" id="formID">
<input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>">
  <div align="center">
    <p>Customer Details</p>
    <table width="442" border="1">
      <tr>
        <td width="206">Customer Full Name </td>
        <td width="220"><input name="customer_fullname" type="text" class="form-control validate[required,custom[onlyLetter]]"  id="customer_fullname" value="<?php echo $row['customer_fullname']; ?>"></td>
      </tr>
      <tr>
        <td>Customer Address</td>
        <td><textarea name="customer_address" id="customer_address" class="form-control validate[required]" value="<?php echo $row['customer_address']; ?>"></textarea></td>
      </tr>
      <tr>
        <td>Customer City </td>
        <td><select name="customer_city" id="customer_city" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['customer_city']; ?>">
          <option>Select</option>
		  <option>Dharwad</option>
          <option>Hubli</option>
          <option>Bangalore</option>
          <option>Mangalore</option>
          <option>Haveri</option>
        </select></td>
      </tr>
      <tr>
        <td>Customer Contact No </td>
        <td><input name="customer_contact_no" type="text" id="customer_contact_no" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['customer_contact_no']; ?>"></td>
      </tr>
      <tr>
        <td>Customer Email Id </td>
        <td><input name="customer_email_id" type="text" id="customer_email_id" class="form-control validate[required,custom[Email]]" value="<?php echo $row['customer_email_id']; ?>"></td>
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

