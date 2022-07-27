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
                                        <h4 class="page-title">Form Elements</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Input Sizes</h4>
                                            <p class="text-muted mb-4 font-14">Set heights using classes like 
                                                <code class="highlighter-rouge">id="example-input-large"</code> and 
                                                <code class="highlighter-rouge">id="example-input-sm"</code>.
                                            </p>
                                            <div class="general-label">
                                                <form role="form" class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label" for="example-input-small">Small</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                        </div>
                                                        <div class="col-sm-10 ml-auto input-group input-group-sm mt-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label" for="example-input-normal">Normal</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                        </div>
                                                        <div class="col-sm-10 ml-auto input-group mt-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-normal">Normal</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Normal" aria-describedby="inputGroup-sizing-sm">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label" for="example-input-large">Large</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                        </div>
                                                        <div class="col-sm-10 ml-auto input-group input-group-lg mt-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">Grid Sizes</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" placeholder=".col-sm-4">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group row">
                                                        <div class="col-sm-5 offset-sm-2">
                                                            <input type="text" class="form-control" placeholder=".col-sm-5">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 offset-sm-2">
                                                            <input type="text" class="form-control" placeholder=".col-sm-6">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group row">
                                                        <div class="col-sm-9 offset-sm-2">
                                                            <input type="text" class="form-control" placeholder=".col-sm-9">
                                                        </div>
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