<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Export To CSV </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Export To CSV </li>
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
                                            <label>Client:</label>
                                            <select class="form-control" id="clientName" name="clientName" required="">
                                                <option value="All" selected="All">All</option>
                                                <option value="Pontil_Timika">Major Drilling Indonesia Timika</option>
                                                <option value="Redpath_Timika">Redpath Timika</option>
                                                <!-- <option value="Pontil_Sumbawa">Pontil Sumbawa</option> -->
                                                <!-- <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
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
                                    <div class="col-md-1">
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Dept:</label>
                                            <select class="form-control" id="dept" name="dept" required="">
                                                <option value="" disabled="" selected="">Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Bank Name:</label>
                                            <select class="form-control" id="bank" name="bank" required="">
                                                <option value="" selected="" disabled="">Pilih</option>
                                                <option value="MANDIRI">MANDIRI</option>
                                                <option value="BNI">BNI</option>
                                                <option value="EXCPT">EXCEPT BNI/MANDIRI</option>
                                                <!-- <option value="BRI">BRI</option> -->
                                                <!-- <option value="Pontil_Sumbawa">Pontil Sumbawa</option> -->
                                                <!-- <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Data Print:</label>
                                            <select class="form-control" id="dataprint" name="dataprint" required="">
                                                <option value="" selected="" disabled="">Pilih</option>
                                                <option value="Nama_File">Nama File</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn bg-b2 font-weight-bold">
                                            Display Data
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
                    <h3 class="card-title  ">View Invoice Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead class="bg-b2">
                                <tr>
                                    <th>Bio ID</th>
                                    <th>Name</th>
                                    <th>Bank Account Number</th>
                                    <th>Bank Account Name</th>
                                    <th>Bank Name</th>
                                    <th>Client Name</th>
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