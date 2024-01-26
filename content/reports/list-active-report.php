<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Active Report </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">List Active Report</li>
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
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div id='client' class="form-group">
                                <label class="control-label">CLIENT</label>
                                <select class="form-control" id="ptName" name="ptName" required="">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4" id="yearForm">
                            <div class="form-group">
                                <label class="control-label">YEAR</label>
                                <select class="form-control" id="yearPeriod" name="yearPeriod" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <script type="text/javascript">
                                        var dt = new Date();
                                        var startYear = dt.getFullYear();
                                        var endYear = startYear - 10;
                                        for (var i = startYear; i >= endYear; i--) {
                                            document.write("<option value='" + i + "'>" + i + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id='client' class="form-group">
                                <!-- <input type="hidden" id="sortby" name="sortby" value="Contract"> -->
                                <label class="control-label">SORT BY</label>
                                <select class="form-control" id="sortby" name="sortby" required="">
                                    <option value="All">List Active Payroll</option>
                                    <option value="Contract">Contract</option>
                                </select>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning" id="viewContractList" type="button"><i class="fa fa-refresh"></i>VIEW</button>
                        <button class="btn btn-warning" id="printContractList" type="button"><i class="fa fa-print"></i>PRINT</button>
                        <br>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.container-fluid -->


    <!-- Main content -->
    <div class="content">
        <div class="container">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">View List Active Report Data </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Aksi</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Payroll Group</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Badge Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Employee Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Date Of Birth</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Department</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Basic Salary</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Religion</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">NPWP Number</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Marital Status</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Employee Status</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Poin Of Hire/Origin</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Date Of Hire</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Contract Start</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Contract End</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Bank Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Account Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Account Number</th>
                                </tr>
                            </thead>
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