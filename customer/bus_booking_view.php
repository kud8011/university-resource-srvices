
<?php include('meta_tag.php'); ?>
    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include('sidebar.php'); ?>
            <!-- Start right Content here -->

        

                   <?php include('topbar.php'); ?>

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                           <!--  <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                                <li class="breadcrumb-item active">Datatable</li>
                                            </ol> -->
                                        </div>
                                        <h4 class="page-title">Bus Booking</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <a href="bus_booking_form.php" class="btn btn-info">ADD</a><hr>
                                     
                                            <table id="datatable" class="table table-bordered">
                                                <thead>

  <tr>
    <th width="35" height="70">Sl No</th>
    <th width="43">Bus No </th>
    <th width="99">Customer Name </th>
	 <th width="99">Contact No </th>
    <th width="50">No Of Seats</th>
    <th width="111">Bus Booking Description</th>
    <th width="87">Bus Booking Date</th>
    <th width="87">Bus Booking Status</th>
    <th width="40">Edit</th>
    <th width="35">Delete</th>
  </tr>
    </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconn.php');
 $sl=1;
 $sql="select * from bus_booking bb,bus_details bd, customer_details cd where bb.bus_id=bd.bus_id and bb.customer_id=cd.customer_id";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
  ?>
  <tr>
    <td height="95">&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['bus_no'];?></td>
    <td>&nbsp;<?php echo $row['customer_fullname'];?></td>
	<td>&nbsp;<?php echo $row['customer_contact_no'];?></td>
    <td>&nbsp;<?php echo $row['no_of_seats'];?></td>
    <td>&nbsp;<?php echo $row['bus_booking_description'];?></td>
    <td>&nbsp;<?php echo $row['bus_booking_date'];?></td>
    <td>&nbsp;<?php echo $row['bus_booking_status'];?></td>
    <td><a href="bus_booking_edit.php?bus_booking_id=<?php echo $row['bus_booking_id'];?>" class="btn btn-primary">Edit</a></td>
    <td><a href="bus_booking_delete.php?bus_booking_id=<?php echo $row['bus_booking_id'];?>" class="btn btn-danger" onClick="return confirm('are you sure want to delete?')">Delete</a></td>
  </tr>
   <?php
  }
  ?>
 </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                       
            
                            
                            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->



       
        <?php include('footer.php'); ?>
    </body>
</html>
