<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Roster Check Id</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Roster Check Id</li>
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
                    <h3 class="card-title  ">Input Requirement</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="enhanced-results.html">
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <div id='client' class="form-group row">
                                    <label class="control-label col-md-1">Client Name</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="clientName" name="clientName" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="AMNT_Sumbawa">AMNT Sumbawa</option>
                                            <option value="MDI_Gorontalo">MDI Gorontalo</option>
                                            <option value="Pontil_Sumbawa">Pontil Sumbawa</option>
                                            <option value="Pontil_Timika">Pontil Timika</option>
                                            <option value="Redpath_Timika">Redpath Timika</option>
                                            <option value="Pontil_Sumbawa">Pontil Sumbawa</option>
                                            <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option>
                                            <option value="LCP_Sumbawa">LCP Sumbawa</option>
                                            <!-- <option value="Pontil_Banyuwangi">Pontil Banyuwangi</option>-->
                                        </select>
                                    </div>
                                    <label class="control-label col-md-1">Month Period</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="monthPeriod" name="monthPeriod" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
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
                                    <label class="control-label col-md-1">Year Period</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="yearPeriod" name="yearPeriod" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <script type="text/javascript">
                                                var dt = new Date();
                                                var startYear = dt.getFullYear();
                                                var endYear = startYear - 80;
                                                for (var i = startYear; i >= endYear; i--) {
                                                    document.write("<option value='" + i + "'>" + i + "</option>");
                                                }
                                            </script>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-2"><button class="btn btn-primary" id="closingStatus" type="button">View Data</button></label>
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
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">View Roster Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="rteTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Badge No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Employee Name </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Client Name </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Year Period</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Month Period</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Remarks</th>

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