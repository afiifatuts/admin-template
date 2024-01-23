<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Timesheet Import</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Timesheet Import</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">Timesheet</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Timesheet  -->
                    <form action="enhanced-results.html">
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <div id='client' class="form-group row">

                                    <label class="control-label col-md-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </label>

                                </div>
                            </div>
                            <div class="col-md-12 offset-md-1">
                                <div id='client' class="form-group row">
                                    <label class="control-label col-md-2">
                                        <button class="btn btn-primary" id="closingStatus" type="button">Timesheet Upload</button>
                                    </label>
                                    <label class="control-label col-md-2">
                                        <button class="btn btn-success" id="closingStatus" type="button">Timesheet Template</button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">Allowance</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Timesheet  -->
                    <form action="enhanced-results.html">
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <div id='client' class="form-group row">

                                    <label class="control-label col-md-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </label>

                                </div>
                            </div>
                            <div class="col-md-12 offset-md-1">
                                <div id='client' class="form-group row">
                                    <label class="control-label col-md-2">
                                        <button class="btn btn-primary" id="closingStatus" type="button">Allowance Upload</button>
                                    </label>
                                    <label class="control-label col-md-2">
                                        <button class="btn btn-success" id="closingStatus" type="button">Allowance Template</button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->



</div>