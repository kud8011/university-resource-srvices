                                                  
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
                                        <h4 class="page-title">Playground Booking </h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <a href="playground_booking_form.php" class="btn btn-info">ADD</a><hr>
                                     
                                            <table id="datatable" class="table table-bordered">
                                                <thead>

  <tr>
    <th width="35" height="70">Sl No</th>
    <th width="43">Playground name</th>
    <th width="99">Customer name</th>
    <th width="50">From Date</th>
    <th width="111">To Date</th>
    <th width="87">Booking Description</th>
	<th width="87">Booking Date</th>
	<th width="87">Booking Status</th>
    <th width="40">Edit</th>
    <th width="35">Delete</th>
  </tr>
    </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconn.php');
 $sl=1;
 $sql="select * from playground_booking pb,playground p,customer_details cd where pb.playground_id=p.playground_id and pb.customer_id=cd.customer_id";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
  ?>
  <tr>
    <td height="95">&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['playground_name'];?></td>
    <td>&nbsp;<?php echo $row['customer_fullname'];?></td>
    <td>&nbsp;<?php echo $row['from_date'];?></td>
    <td>&nbsp;<?php echo $row['to_date'];?></td>
    <td>&nbsp;<?php echo $row['pgbooking_description'];?></td>
	<td>&nbsp;<?php echo $row['pgbooking_date'];?></td>
	<td>&nbsp;<?php echo $row['pgbooking_status'];?></td>
    <td><a href="playground_booking_edit.php?playground_booking_id=<?php echo $row['playground_booking_id'];?>" class="btn btn-primary">Edit</a></td>
    <td><a href="playground_booking_delete.php?playground_booking_id=<?php echo $row['playground_booking_id'];?>" class="btn btn-danger" onClick="return confirm('are you sure want to delete?')">Delete</a></td>
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