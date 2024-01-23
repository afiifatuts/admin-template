<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Timesheet Process </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Timesheet Process</li>
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
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="enhanced-results.html">
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <div class="row">
                                    <div class="col-3">
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
                                    <div class="col-2">
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
                                    <div class="col-1">
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
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>OT OFF:</label>

                                            <select class="form-control" id="otInOffCount" name="otInOffCount" required="">
                                                <option value="7">7 Jam Pertama</option>
                                                <option value="8">8 Jam Pertama</option>
                                                <option value="9">9 Jam Pertama</option>
                                                <option value="10">10 Jam Pertama</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label>Start:</label>
                                            <select class="form-control" id="startDate" name="startDate" required="">
                                                <!-- <option value="" disabled="" selected="">Pilih</option> -->
                                                <script type="text/javascript">
                                                    var tDay = 1;
                                                    for (var i = tDay; i <= 31; i++) {
                                                        document.write("<option value='" + i + "'>" + i + "</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label">Helath BPJS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label">JHT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label">JP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label">JKK-JKM</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label">END CONTRACT</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="btn btn-warning">Roster Process</div>
                                    <div class="btn btn-warning ml-2">Display Data</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="btn btn-warning"> Process ID</div>
                                    <div class="btn btn-warning ml-2">Cancel ID</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="" id="" placeholder="Badge No">
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
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">View Roster Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Slip Id</th>
                                    <th>Client Name</th>
                                    <!-- <th>Badge No</th> -->
                                    <th>Emp Name</th>
                                    <th>Dept</th>
                                    <th>Position</th>
                                    <th>Update</th>
                                    <th>Print</th>
                                    <th>Process</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023100059</td>
                                    <td>Cipta_Kridatama_Jambi</td>
                                    <td>Anggi Julian</td>
                                    <td>GA & FACILITY</td>
                                    <td>Loundry (CK)</td>
                                    <td><a href="" class="btn btn-warning" data-toggle="modal" data-target="#biodataModal"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="" class="btn btn-warning"><i class="fas fa-print"></i></a></td>
                                    <td><a href="" class="btn btn-warning"><i class="fas fa-circle-notch"></i></a></td>
                                </tr>

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
                <h4 class="modal-title m-3"> Debt Of Burden</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <form>
                    <div class="form-group">
                        <label for="slipId">Slip ID</label>
                        <input type="text" class="form-control" id="slipId" placeholder="Slip Id" disabled>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" disabled>
                    </div>
                    <div class="form-group">
                        <label for="adjustmentIn">Adjustment In</label>
                        <input type="text" class="form-control" value="0.00" id="adjustmentIn">
                    </div>
                    <div class="form-group">
                        <label for="adjustmentOut">Adjustment Out</label>
                        <input type="text" class="form-control" value="0.00" id="adjustmentOut">
                    </div>
                    <div class="form-group">
                        <label for="contractBonus">Contract Bonus</label>
                        <input type="text" class="form-control" value="0.00" id="contractBonus" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nightShift">Night Shift</label>
                        <input type="text" class="form-control" placeholder="Night Shift" id="nightShift">
                    </div>
                    <div class="form-group">
                        <label for="thr">THR</label>
                        <input type="text" class="form-control" value="0.00" id="thr" disabled>
                    </div>
                    <div class="form-group">
                        <label for="deptValue">Dept Value</label>
                        <input type="text" class="form-control" value="0.00" id="deptValue">
                    </div>
                    <div class="form-group">
                        <label for="deptInfo">Dept Info</label>
                        <input type="text" class="form-control" placeholder="Keterangan Beban Hutang" id="deptInfo">
                    </div>

                </form>

            </div>
            <div class="d-flex justify-content-center mx-5 pt-3 pb-3">
                <button type="button" class="btn btn-primary">Save</button>
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
        });
    });
</script>