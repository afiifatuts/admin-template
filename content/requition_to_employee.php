<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biodata Activation</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Biodata Activation</li>
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
                    <h3 class="card-title  ">Add Biodata Master</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>RTE Number <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="RTE Number" required="" autofocus="" />
                            </div>
                            <div class="form-group">
                                <label>Date(Month) Required<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Labour Source <sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;" required>
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Ex FTC During Lapse Time Break">Ex FTC During Lapse Time Break</option>
                                    <option value="Ex Daily Worker">Ex Daily Worker</option>
                                    <option value="New Daily Worker">New Daily Worker</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departement<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;" required>
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Exploration">Exploration</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Company Employing The Labour<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;" required>
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Sangati Soerya Sejahtera">PT Sangati Soerya Sejahtera</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-dark"> Save </button>
                            </div>

                        </div>
                        <!-- /.col -->
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
                <div class="card-header text-center">
                    <h3 class="card-title  ">Biodata Activation</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" placeholder="Fill name and hit enter">
                        </div>

                        <div class="col-12">
                            <table id="eduTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Rate Per Day</th>
                                        <th>Total Labour</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Total Date</th>
                                        <th>Work Location</th>
                                        <th>Remarks</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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






</div>
<!-- /.content-wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(function() {
            $('#eduTable').DataTable({
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