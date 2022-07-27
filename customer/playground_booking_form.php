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
                                        <h4 class="page-title">Playground Booking Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Playground Booking </h4>
                                            <div class="general-label">
<form action="playground_booking_insert.php" method="post" name="playground_booking" id="formID">
  <div align="center">
    <table width="695" border="0">
      <tr>
        <td width="323" height="50">Playground Name </td>
		<td width="362"><select name="playground_id" id="playground_id" class="validate[required]">
        <option value="">Select</option>
        <?php
		  include('../dbconnect/dbconn.php');
 
 $sql="select * from playground";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
        <option value="<?php echo $row['playground_id']?>"><?php echo $row['playground_name']?></option>
        <?php
 }
?>
      </select></td>
      </tr>
      <tr>
        <td height="52">Customer FullName </td>
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
        <td height="54">From Date </td>
        <td><input name="from_date" type="date" class="validate[required,custom[date]]" id="from_date"></td>
      </tr>
      <tr>
        <td height="63">To Date </td>
        <td><input name="to_date" type="date" class="validate[required,custom[date]]" id="to_date"></td>
      </tr>
      <tr>
        <td height="130">Booking Description </td>
        <td><textarea name="pgbooking_description" class="validate[required,custom[onlyLetter]]" id="pgbooking_description"></textarea></td>
      </tr>
      <tr>
        <td height="55">Booking Date </td>
        <td><input name="pgbooking_date" type="date" class="validate[required,custom[date]]" id="pgbooking_date"></td>
      </tr>
      <tr>
        <td height="58">Booking Status </td>
        <td><input type="text" name="pgbooking_status" class="validate[required,custom[onlyLetter]]" id="pgbooking_status"></td>
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
