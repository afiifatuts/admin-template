<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bank Account</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Bank Account</li>
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
                            <div class="col-md-10 offset-md-1">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label>Client:</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">

                                            <select class="errMsg form-control" id="ptName" name="ptName" required="">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <button class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
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
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-12">
                        <table id="salaryTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Table Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">External Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 16%;text-align: center;">Name</th>
                                    <!-- <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Payroll Group</th> -->
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Client</th>
                                    <!-- <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Level</th> -->
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;text-align: center;">Basic Salary</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;text-align: center;">Bank Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 16%;text-align: center;">Account Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="text-align: center;">Account No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;text-align: center;">Pic Edit</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 16%;text-align: center;">Edit Time</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2017060004</td>
                                    <td>80007028A</td>
                                    <td>Affandi Yudo Wicaksono</td>
                                    <td>Redpath_Timika</td>
                                    <td>7793900.00</td>
                                    <td>CIMB NIAGA</td>
                                    <td>AFFANDI YUDO WICAKSO</td>
                                    <td>761595770700</td>
                                    <td> dian.puspitasari</td>
                                    <td> 2019-05-06 08:23:08</td>
                                    <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                                            Edit
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
<!-- /.content-wrapper -->


<div class="modal custom-modal fade" id="modal-default">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center mx-5 pt-3 pb-3">
                <h4 class="modal-title m-3">Update Bank Accunt</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <form action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Payroll Group <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Account Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Client Name</label>
                                <input class="form-control" type="text" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Bank</label>
                                <select class="errMsg form-control" id="bankName" name="bankName" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BNI SYARIAH">BNI SYARIAH</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BRI SYARIAH">BRI SYARIAH</option>
                                    <option value="BTN">BTN</option>
                                    <option value="CIMB NIAGA">CIMB NIAGA</option>
                                    <option value="DANAMON">DANAMON</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                    <option value="MEGA">MEGA</option>
                                    <option value="MAYBANK">MAYBANK</option>
                                    <option value="PAPUA">PAPUA</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Account No</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="d-flex justify-content-center mx-5 pt-3 pb-3">
                <button type="button" class="btn btn-info">Save changes</button>
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
            $('#salaryTable').DataTable({
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