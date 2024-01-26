<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-b2">Contract Bonus </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Contract Bonus </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content ">
        <div class="container ">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default ">
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Client:</label>
                                            <select class="form-control" id="site" name="site" required="">
                                                <option value="" disabled="" selected="">Pilih</option>
                                                <option value="Timika">Timika</option>
                                                <!-- <option value="Sumbawa">Sumbawa</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Year:</label>
                                            <select class="form-control" id="yearPeriod" name="yearPeriod" required="">
                                                <option value="" disabled="" selected="">Select</option>
                                                <script type="text/javascript">
                                                    var dt = new Date();
                                                    var currYear = dt.getFullYear();
                                                    var currMonth = dt.getMonth();
                                                    var currDay = dt.getDate();
                                                    var tmpDate = new Date(currYear + 1, currMonth, currDay);
                                                    var startYear = tmpDate.getFullYear();
                                                    var endYear = startYear - 5;
                                                    for (var i = startYear; i >= endYear; i--) {
                                                        document.write("<option value='" + i + "'>" + i + "</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Month:</label>
                                            <select class="form-control" id="monthPeriod" name="monthPeriod" required="">
                                                <option value="" disabled="" selected="">Select</option>
                                                <script type="text/javascript">
                                                    var tMonth = 1;
                                                    for (var i = tMonth; i <= 12; i++) {
                                                        if (i < 10) {
                                                            document.write("<option value='0" + i + "'>0" + i + "</option>");
                                                        } else {
                                                            document.write("<option value='" + i + "'>" + i + "</option>");
                                                        }
                                                    }
                                                </script>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn bg-b2 font-weight-bold">
                                            <i class="fa fa-refresh"></i> Display Data
                                        </button>
                                        <button class="btn btn-warning ml-2 font-weight-bold">
                                            <i class="fas fa-print"></i> Print
                                        </button>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </form>
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
                    <h3 class="card-title text-b2 ">View Invoice Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead >
                                <tr>
                                    <th>NO</th>
                                    <th>Name</th>
                                    <th>ID Number</th>
                                    <th>Grade / Level</th>
                                    <th>BASIC</th>
                                    <th>Start Contract</th>
                                    <th>End Contract</th>
                                    <th>Contract Period</th>
                                    <th>Bank Code</th>
                                    <th>Bank Account</th>
                                    <th>Account On Behalf Of</th>
                                    <th>Account Number</th>
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