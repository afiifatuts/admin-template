<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Closing Payroll</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Clossing Payroll</li>
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
                    <h3 class="card-title  ">Input Clossing</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="enhanced-results.html">
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <div id='client' class="form-group row">
                                    <label class="control-label col-md-1">CLIENT</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="iptName" name="ptName" required="">
                                        </select>
                                    </div>
                                    <label class="control-label col-md-1">Year</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="iyear" name="iyear" required="">
                                            <option value="Pilih">Year Closing</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-1">Month</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="imonth" name="ptName" required="">
                                            <option value="Pilih">Month Closing</option>
                                            <option value="12">12</option>
                                            <option value="11">11</option>
                                            <option value="10">10</option>
                                            <option value="09">09</option>
                                            <option value="08">08</option>
                                            <option value="07">07</option>
                                            <option value="06">06</option>
                                            <option value="05">05</option>
                                            <option value="04">04</option>
                                            <option value="03">03</option>
                                            <option value="02">02</option>
                                            <option value="01">01</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-2"><button class="btn btn-primary" id="closingStatus" type="button">Closing</button></label>
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
                    <h3 class="card-title  ">View Clossing</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <div id='client' class="form-group row">
                            <label class="control-label col-md-1">CLIENT</label>
                            <div class="col-md-4">
                                <select class="form-control" id="iptName" name="ptName" required="">
                                </select>
                            </div>
                            <label class="control-label col-md-2"><button class="btn btn-primary" id="closingStatus" type="button">Closing</button></label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <table id="rteTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Client Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;">Tahun</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;">Bulan</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;">Status</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 15%;">Action</th>
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