                                                  
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
                                        <h4 class="page-title">Playground </h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <a href="playground_form.php" class="btn btn-info">ADD</a><hr>
                                     
                                            <table id="datatable" class="table table-bordered">
                                                <thead>

  <tr>
    <th width="35" height="70">Sl No</th>
    <th width="43">Playground Name</th>
    <th width="99">Playground Description</th>
    <th width="50">Playground Location</th>
    <th width="111">Capacity</th>
    <th width="87">Ground Image</th>
	<th width="87">Contact No</th>
	<th width="87">Email Id</th>
    <th width="40">Edit</th>
    <th width="35">Delete</th>
  </tr>
    </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconn.php');
 $sl=1;
 $sql="select * from playground";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
  ?>
  <tr>
    <td height="95">&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['playground_name'];?></td>
    <td>&nbsp;<?php echo $row['playground_description'];?></td>
    <td>&nbsp;<?php echo $row['playground_location'];?></td>
    <td>&nbsp;<?php echo $row['capacity'];?></td>
    <td>&nbsp;<img src="../images/<?php echo $row['ground_image'];?>" width="100" height="200"></td>
	<td>&nbsp;<?php echo $row['contact_no'];?></td>
	<td>&nbsp;<?php echo $row['email_id'];?></td>
    <td><a href="playground_edit.php?playground_id=<?php echo $row['playground_id'];?>" class="btn btn-primary">Edit</a></td>
    <td><a href="playground_delete.php?playground_id=<?php echo $row['playground_id'];?>" class="btn btn-danger" onClick="return confirm('are you sure want to delete?')">Delete</a></td>
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