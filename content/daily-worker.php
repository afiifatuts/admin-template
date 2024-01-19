<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daily Workers</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Daily Workers</li>
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
                    <h3 class="card-title  ">Add Daily Workers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>RTE Number <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="RTE Number" disabled />
                            </div>
                            <div class="form-group">
                                <label>ID Card Number<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="16 Digit KTP Number" disabled />
                            </div>
                            <div class="form-group">
                                <label>Badge Number<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Badge Number" required />
                            </div>
                            <div class="form-group">
                                <label>BPJS Kesehatan<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" value="0" placeholder="No BPJS Kesehatan" required />
                            </div>
                            <div class="form-group">
                                <label>Start Date<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" value="0" required />
                            </div>
                            <div class="form-group">
                                <label>Work Day Amount/Hours<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" value="0" required disabled />
                            </div>
                            <div class="form-group">
                                <label>Year Period<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="yearPeriod" name="yearPeriod" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <script type="text/javascript">
                                        var dt = new Date();
                                        var currYear = dt.getFullYear();
                                        var currMonth = dt.getMonth();
                                        var currDay = dt.getDate();
                                        var tmpDate = new Date(currYear + 1, currMonth, currDay);
                                        var startYear = tmpDate.getFullYear();
                                        var endYear = startYear - 20;
                                        for (var i = startYear; i >= endYear; i--) {
                                            document.write("<option value='" + i + "'>" + i + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Full Name" data-toggle="modal" data-target="#biodataModal" />
                            </div>
                            <div class="form-group">
                                <label>Position<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Position" disabled />
                            </div>
                            <div class="form-group">
                                <label>Client Name<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="clientName" name="clientName" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Agincourt Resources">Agincourt Resources</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>BPJS Ketenagakerjaan<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="No BPJS Ketenagakerjaan" />
                            </div>
                            <div class="form-group">
                                <label>End Date<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>PLH Salary<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Input Salary" />
                            </div>
                            <div class="form-group">
                                <label>Month Period<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="monthPeriod" name="monthPeriod" required="">
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
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#rteModal">Add RTE</button>
                                <button class="btn btn-warning">Save</button>
                                <button class="btn btn-warning">Edit</button>
                            </div>
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
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-12">
                        <table id="dailyWorkerTable" class="table table-bordered table-hover" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Biodata Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">RTE Number</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">ID Card No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">BPJS Kesehatan </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">BPJS Ketenagakerjaan </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Badge No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Full Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Client Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Start Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">End Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Work Day Amount/ Hours</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">PLH Salary</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Year Period</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Month Period</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2017060004</td>
                                    <td>80007028A</td>
                                    <td>Zainul Muttaqin</td>
                                    <td>Asih_Eka_Abadi</td>
                                    <td>Malcon</td>
                                    <td> Malaria Control Labor</td>
                                    <td>LS VI/001/2012</td>
                                    <td>2019-01-25</td>
                                    <td>2019-07-31</td>
                                    <td> Other</td>
                                    <td> Other</td>
                                    <td> Other</td>
                                    <td> Other</td>
                                    <td> Other</td>
                                    <td> Other</td>
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

<div class="modal custom-modal fade" id="rteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2">
                <h4 class="modal-title m-3">Master RTE</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <div class="">
                    <table id="rteTable" class="table table-bordered table-hover">
                        <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">RTE ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>80007028A</td>
                            </tr>
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

<div class="modal custom-modal fade" id="biodataModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2">
                <h4 class="modal-title m-3">Master Daily Worker</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <div class="">
                    <table id="biodataTable" class="table table-bordered table-hover">
                        <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Full Name</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Id Card No</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A Ahmad Jayadilaga</td>
                                <td>9109012005860001</td>
                                <td>Helper 1-1 (PT)</td>
                            </tr>
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
            $('#rteTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(function() {
            $('#dailyWorkerTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        $(function() {
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