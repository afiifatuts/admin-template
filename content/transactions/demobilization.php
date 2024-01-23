<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Demobilization </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Demobilization</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">Demobilization</h3>
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
                                <input type="text" class="form-control" placeholder="Position" disabled />
                            </div>
                            <div class="form-group">
                                <label>Demob Site<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="demobSite" name="demobSite" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Banyuwangi">Banyuwangi </option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Martabe">Martabe</option>
                                    <option value="Papua">Papua </option>
                                    <option value="Sumbawa">Sumbawa</option>
                                    <option value="Yogyakarta">Yogyakarta</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Demob Date<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" placeholder="Nomor HP" />
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee Name <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Employee Name" disabled />
                            </div>
                            <div class="form-group">
                                <label>Client Name <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Client Name" disabled />
                            </div>
                            <div class="form-group">
                                <label>Demob Status<sup class="text-danger">*</sup></label>
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
                            <div class="form-group">
                                <label>Remarks<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Remarks" />
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <input type="button" class="btn btn-warning" id="addBiodata" name="addBiodata" data-toggle="modal" data-target="#contractModal" value="Add">
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
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">View Demobilization Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Biodata Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Full Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Client Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Demob Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Demob Site</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Demob Status</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Remarks</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Action</th>
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
        });
    });
</script>