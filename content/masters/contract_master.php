<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contract Master</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Contract Master</li>
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
                    <h3 class="card-title  ">Add Contract Master</h3>
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
                                <label>Contract No<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Contract No" />
                            </div>
                            <div class="form-group">
                                <label>Position<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Position" />
                            </div>
                            <div class="form-group">
                                <label>End Date<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" value="0" required />
                            </div>
                            <div class="form-group">
                                <label>Remarks<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="remarks" name="remarks" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Resignation">Resignation</option>
                                    <option value="Termination">Termination</option>
                                    <!-- <option value="Pass Away">Pass Away</option>
                <option value="Lay Off">Lay Off</option> -->
                                    <option value="Transfer To">Transfer To</option>
                                    <!-- <option value="Unfit Location">Unfit Location</option>
                <option value="Other">Other</option> -->
                                    <!-- <option value="None">None</option> -->
                                </select>
                            </div>

                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Full Name" disabled />
                            </div>
                            <div class="form-group">
                                <label>Departement<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="deptName" name="deptName" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Alimak">Alimak</option>
                                    <option value="All Area">All Area</option>
                                    <option value="Cat Rental">Cat Rental</option>
                                    <option value="Coorporate Communications">Coorporate Communications</option>
                                    <option value="Corrosion">Corrosion</option>
                                    <option value="CRC">CRC</option>
                                    <option value="DMLZ">DMLZ</option>
                                    <option value="Dry Season">Dry Season</option>
                                    <option value="Eksplorasi">Eksplorasi</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Engineering & PPnC">Engineering & PPnC</option>
                                    <option value="Environt">Environt</option>
                                    <option value="Facilities and Services">Facilities and Services</option>
                                    <option value="Facility">Facility</option>
                                    <option value="Fixed Plant">Fixed Plant</option>
                                    <option value="GA & Facility">GA & Facility</option>
                                    <option value="GBC # 1">GBC # 1</option>
                                    <option value="GBC # 2">GBC # 2</option>
                                    <option value="GBC # 3">GBC # 3</option>
                                    <option value="GBC Area I">GBC Area I</option>
                                    <option value="GBC Area II">GBC Area II</option>
                                    <option value="GBC Area III">GBC Area III</option>
                                    <option value="GBC Construction">GBC Construction</option>
                                    <option value="GBC Development">GBC Development</option>
                                    <option value="GBC I">GBC I</option>
                                    <option value="GBC II">GBC II</option>
                                    <option value="GBC III">GBC III</option>
                                    <option value="GBC Production">GBC Production</option>
                                    <option value="General Affair">General Affair</option>
                                    <option value="Govrel and Permitting">Govrel and Permitting</option>
                                    <option value="Helper GA">Helper GA</option>
                                    <option value="HSE">HSE</option>
                                    <option value="IT">IT</option>
                                    <option value="Kucing Liar">Kucing Liar</option>
                                    <option value="Linesman">Linesman</option>
                                    <option value="Lowland">Lowland</option>
                                    <option value="Maintenance">Maintenance</option>
                                    <option value="Man Haul">Man Haul</option>
                                    <option value="MCM">MCM</option>
                                    <option value="Mews">Mews</option>
                                    <option value="Mine Geology">Mine Geology</option>
                                    <option value="Minning Project">Minning Project</option>
                                    <option value="MP 72">MP 72</option>
                                    <option value="Mrc">Mrc</option>
                                    <option value="News">News</option>
                                    <option value="Office 66">Office 66</option>
                                    <option value="OHS and Training">OHS and Training</option>
                                    <option value="Operation">Operation</option>
                                    <option value="OSHE">OSHE</option>
                                    <option value="Palm Shop">Palm Shop</option>
                                    <option value="Parts">Parts</option>
                                    <option value="PGD">PGD</option>
                                    <option value="Planning">Planning</option>
                                    <option value="Plant">Plant</option>
                                    <option value="Pontil">Pontil</option>
                                    <option value="Port & Logistics">Port & Logistics</option>
                                    <option value="Portside">Portside</option>
                                    <option value="Power Plant">Power Plant</option>
                                    <option value="Process">Process</option>
                                    <option value="Process Maintenance">Process Maintenance</option>
                                    <option value="Processing Electric">Processing Electric</option>
                                    <option value="Processing Plan">Processing Plan</option>
                                    <option value="Production">Production</option>
                                    <option value="Project Development">Project Development</option>
                                    <option value="Raisebore">Raisebore</option>
                                    <option value="Safety">Safety</option>
                                    <option value="Safety and Training">Safety and Training</option>
                                    <option value="SCM">SCM</option>
                                    <option value="Service Account">Service Account</option>
                                    <option value="Shop Maintenance">Shop Maintenance</option>
                                    <option value="STCP">STCP</option>
                                    <option value="Support Office">Support Office</option>
                                    <option value="Surface">Surface</option>
                                    <option value="Training">Training</option>
                                    <option value="Underground">Underground</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Welder Plant">Welder Plant</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Start Date<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Client Name<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="ptName" name="ptName" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="Agincourt_Martabe">Agincourt Martabe</option>
                                    <option value="AMNT_Sumbawa_Staff">AMNT Sumbawa Staff </option>
                                    <option value="AMNT_Sumbawa">AMNT Sumbawa </option>
                                    <option value="Asih_Eka_Abadi">Asih Eka Abadi</option>
                                    <option value="Cipta_Kridatama">Cipta Kridatama</option>
                                    <option value="Eksplorasi_Nusa_Jaya">Eksplorasi Nusa Jaya</option>
                                    <option value="Indodrill">Indodrill</option>
                                    <option value="Kufpec_Jakarta">Kufpec Jakarta</option>
                                    <option value="MHE_Demag_Jakarta">MHE Demag Jakarta</option>
                                    <option value="Machmahon_Sumbawa">Machmahon Sumbawa</option>
                                    <option value="Petrosea_Timika">PETROSEA TIMIKA</option>
                                    <option value="Pontil_Timika">Pontil Timika</option>
                                    <option value="Pontil_Sumbawa">Pontil Sumbawa</option>
                                    <option value="Pontil_Jakarta">Pontil Jakarta</option>
                                    <option value="Pontil_Banyuwangi">Pontil Banyuwangi</option>
                                    <option value="LCP_Sumbawa">Lamurung Cipta Persada</option>
                                    <option value="Redpath_Timika">Redpath Timika</option>
                                    <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Detail Remarks<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" placeholder="Detail Remarks" />
                            </div>
                            <div class="form-group">
                                <label>Is Active<sup class="text-danger">*</sup></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="0" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Non Active
                                    </label>
                                </div>
                            </div>


                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#biodataModal">Select Internal Id</button>
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
                        <table id="loanTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Contract ID</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">External ID</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Full Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Client Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Department</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Contract No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Start Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">End Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Remarks</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 80px;">Delete</th>
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
                                    <td> <button type="button" class="btn btn-warning">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </td>
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