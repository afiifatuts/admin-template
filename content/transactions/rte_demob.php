<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">RTE Demob </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">RTE Demob</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
        <div class="container">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">RTE Demob</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Biodata ID <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Biodata ID" disabled />
                            </div>
                            <div class="form-group">
                                <label>Position <sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="demobStatus" name="demobStatus" required="">

                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Active">Active</option>
                                    <option value="Blacklist">Blacklist </option>
                                    <option value="Contract Completion">Contract Completion </option>
                                    <option value="Resignation">Resignation</option>
                                    <option value="Termination">Termination</option>
                                    <option value="Unfit Location">Unfit Location</option>
                                    <option value="Transfer To">Transfer To</option>
                                    <option value="Lay Off">Lay Off</option>
                                    <option value="Standby">Standby</option>
                                    <option value="Passed Away">Passed Away</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>RTE ID <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="RTE ID" disabled />
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <input type="button" class="btn btn-warning" id="addBiodata" name="addBiodata" data-toggle="modal" data-target="#biodataModal" value="Add">
                            <input type="button" class="btn btn-warning" id="saveDemob" name="saveDemob" value="Save">
                            <input type="button" class="btn btn-warning" id="editPlh" name="editPlh" value="Edit">
                        </div>
                    </div>
                    <!-- /.row -->

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
        <div class="container">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">View RTE Demob Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Biodata Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">RTE Number</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Demob Status</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>

                        </table>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->







</div>
<!-- /.content-wrapper -->



<div class="modal custom-modal fade" id="biodataModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2 bg-primary">
                <h4 class="modal-title m-3"> Master Demobilization</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <div class="">
                    <table id="biodataTable" class="table table-bordered table-hover">
                        <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Biodata ID</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">RTE ID</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>

            </div>
            <div class="d-flex justify-content-center mx-5 pt-3 pb-3">
                <button type="button" class="btn btn-primary">Choose</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->





<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(function() {
            $('#timesheetTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('#biodataTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });


    });
</script>