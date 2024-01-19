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
                        <table id="salaryMasterTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Table Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">External Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 16%;text-align: center;">Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Payroll Group</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Client</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Level</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 5%;text-align: center;">Basic Salary</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10%;text-align: center;">Pic Edit</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Edit Time</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2017060004</td>
                                    <td>80007028A</td>
                                    <td>Affandi Yudo Wicaksono</td>
                                    <td>A</td>
                                    <td>Redpath_Timika</td>
                                    <td>L1E</td>
                                    <td>7793900.00</td>
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

            <div class="d-flex justify-content-center  pt-2 bg-dark">
                <h4 class="modal-title m-3">Update Salary Level</h4>
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
                                <label class="col-form-label">Salary Level <span class="text-danger">*</span></label>
                                <select class="errMsg form-control" id="salaryLevel" name="salaryLevel" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="NP" data-basic='7097669.00'>NP</option>
                                    <option value="L1S" data-basic='7294826.00'>L1S</option>
                                    <option value="L2S" data-basic='7689141.00'>L2S</option>
                                    <option value="L3S" data-basic='8872086.00'>L3S</option>
                                    <option value="L4S" data-basic='10252188.00'>L4S</option>
                                    <option value="L1E" data-basic='7491983.00'>L1E</option>
                                    <option value="L2E" data-basic='8280613.00'>L2E</option>
                                    <option value="L3E" data-basic='9266401.00'>L3E</option>
                                    <option value="L4E" data-basic='10843660.00'>L4E</option>
                                    <option value="L5S" data-basic='25214072.00'>L5S</option>
                                    <option value="L6S" data-basic='32551974.00'>L6S</option>
                                    <option value="L7S" data-basic='49506860.00'>L7S</option>
                                    <option value="L5E" data-basic='30995016.00'>L5E</option>
                                    <option value="L6E" data-basic='36676406.00'>L6E</option>
                                    <option value="L7E" data-basic='55645070.00'>L7E</option>
                                    <option value="A5S" data-basic='28239744.00'>A5S</option>
                                    <option value="A5E" data-basic='34714420.00'>A5E</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">External ID <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Client Name</label>
                                <input class="form-control" type="text" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Basic Salary</label>
                                <input class="form-control" type="text" disabled>
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
            $('#salaryMasterTable').DataTable({
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



<!--START FORM DATA -->
<div class="col-md-12" id="is_transaction">
    <div class="tile bg-info">
        <h2>Input Closing</h2>
        <br />
        
    </div>
</div>
<!-- END FORM DATA -->