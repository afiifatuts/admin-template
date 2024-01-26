<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Imployee Income Tax Calculation </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Imployee Income Tax Calculation </li>
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
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Client:</label>

                                            <select class="form-control" id="clientName" name="clientName" required="">
                                                <option value="" disabled="" selected="">Pilih</option>
                                                <!-- <option value="Pontil_Timika">Pontil Timika</option> -->
                                                <!-- <option value="Redpath_Timika">Redpath Timika</option> -->
                                                <!-- <option value="Agincourt_Martabe">Agincourt Martabe</option> -->
                                                <!-- <option value="AMNT_Sumbawa">AMNT Sumbawa </option> -->
                                                <!-- <option value="AMNT_Sumbawa_Staff">Staff AMNT Sumbawa </option> -->
                                                <option value="AMNT_Sumbawa">AMNT Sumbawa</option>
                                                <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option>
                                                <!-- <option value="Machmahon_Sumbawa">Machmahon Sumbawa</option> -->
                                                <option value="LCP_Sumbawa">Lamurung Cipta Persada</option>
                                                <option value="Pontil_Sumbawa">Major Drilling Indonesia Sumbawa</option>
                                                <!-- <option value="Acset_Sumbawa">Acset Indonusa Sumbawa</option> -->
                                                <!-- <option value="Pontil_Banyuwangi">Pontil Banyuwangi</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
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
                                                    var endYear = startYear - 80;
                                                    for (var i = startYear; i >= endYear; i--) {
                                                        document.write("<option value='" + i + "'>" + i + "</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>Group:</label>

                                            <select class="form-control" id="monthPeriod" name="monthPeriod" required="">
                                                <option value="" disabled="" selected="">Select</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary font-weight-bold">
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
                            <thead>
                                <tr>
                                    <th>Bio Rec Id</th>
                                    <th>Client Name</th>
                                    <th>Emp Name</th>
                                    <th>Dept / Group</th>
                                    <th>Position</th>
                                    <th>Print</th>
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