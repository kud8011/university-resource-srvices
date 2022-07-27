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
                                        <h4 class="page-title">Guest House Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Guest House Booking </h4>
                                            <div class="general-label">
<form action="guest_house_booking_insert.php" method="post" name="guest_house_booking" id="formID">
  <div align="center">
    <table width="553" border="0">
      <tr>
        <td width="253" height="56">Guest House Name </td>
		 <td width="290"><select name="guest_house_id" id="guest_house_id" class="validate[required]">
        <option value="">Select</option>
        <?php
		  include('../dbconnect/dbconn.php');
 
 $sql="select * from guest_house";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row['guest_house_id']?>"><?php echo $row['guest_house_name']?></option>
        <?php
 }
?>
      </select></td>
      </tr>
      <tr>
        <td height="65">Customer FullName </td>
		 <td><select name="customer_id" id="customer_id" class="validate[required]">
        <option value="">Select</option>
        <?php
		  include('../dbconnect/dbconn.php');
 
 $sql="select * from customer_details";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row['customer_id']?>"><?php echo $row['customer_fullname']?></option>
        <?php
 }
?>
      </select></td>
      </tr>
      <tr>
        <td height="57">From Date</td>
        <td><input name="from_date" type="date" class="validate[required,custom[date]]" id="from_date"></td>
      </tr>
      <tr>
        <td height="64">To Date </td>
        <td><input name="to_date" type="date" class="validate[required,custom[date]]" id="to_date"></td>
      </tr>
      <tr>
        <td height="128">Booking Description</td>
        <td><textarea name="ghbooking_description" class="validate[required]" id="ghbooking_description"></textarea></td>
      </tr>
      <tr>
        <td height="60">Booking Date </td>
        <td><input name="ghbooking_date" type="date" class="validate[required,custom[date]]" id="ghbooking_date"></td>
      </tr>
      <tr>
        <td height="68">Booking Status </td>
        <td><input name="ghbooking_status" type="text" class="validate[required,custom[onlyLetter]]" id="ghbooking_status"></td>
      </tr>
      <tr>
        <td height="76" colspan="2"><div align="center">
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

