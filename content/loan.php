<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Loan</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Loan</li>
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
                    <h3 class="card-title  ">Add Loan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Internal ID <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Internal ID" disabled />
                            </div>
                            <div class="form-group">
                                <label>Client Name <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Client Name" disabled />
                            </div>
                            <div class="form-group">
                                <label>Month Begin<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="monthBegin" name="monthBegin" required="">
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
                            <div class="form-group">
                                <label>Loan Amount<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Loan Amount" />
                            </div>
                            <div class="form-group">
                                <label>Living Status<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" value="0" disabled />
                            </div>

                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Full Name" disabled />
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" disabled />
                            </div>
                            <div class="form-group">
                                <label>Year Begin<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="yearBegin" name="yearBegin" required="">
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
                            <div class="form-group">
                                <label>Number Of Month<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="numberOfMonths" name="numberOfMonths" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" class="form-control" placeholder="Remarks">
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#biodataModal">Select Internal Id</button>
                                <button class="btn btn-warning">Save</button>
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
                        <table id="loanTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Loan Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Biodata Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Client Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Month Begin</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Year Begin</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Loan Amount</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Number Of Month</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Amount Per Month</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Remarks</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Print</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2017060004</td>
                                    <td>80007028A</td>
                                    <td>Affandi Yudo Wicaksono</td>
                                    <td>Redpath_Timika</td>
                                    <td> 2021-01-14</td>
                                    <td>01</td>
                                    <td>2021</td>
                                    <td>1600000.00/td>
                                    <td>3</td>
                                    <td> 533333.33</td>
                                    <td> Tiket</td>
                                    <td> <button type="button" class="btn btn-warning">
                                            <i class="fa fa-print"></i>
                                        </button></td>
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

<div class="modal custom-modal fade" id="biodataModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2">
                <h4 class="modal-title m-3"> Debt Of Burden</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <div class="">
                    <table id="biodataTable" class="table table-bordered table-hover">
                        <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Internal ID</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Full Name</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Client Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>80007028A</td>
                                <td>Affandi Yudo Wicaksono</td>
                                <td>Redpath_Timika</td>
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
            $('#loanTable').DataTable({
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