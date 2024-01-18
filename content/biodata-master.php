<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biodata Master</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Biodata Master</li>
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
                                <label>ID Card Number <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Nomor KTP 16 Digit" />
                            </div>
                            <div class="form-group">
                                <label>Place Of Birth <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir" />
                            </div>
                            <div class="form-group">
                                <label>Nationality <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Warga Negara" />
                            </div>
                            <div class="form-group">
                                <label>Ethnic<sup class="text-danger">*</sup></label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option>Jawa</option>
                                    <option>Sunda</option>
                                    <option>Melayu</option>
                                    <option>Manado</option>
                                    <option>Batak</option>
                                    <option>Toraja</option>
                                    <option>Papua</option>
                                    <option>Padang</option>
                                    <option>Lain-lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ID Card Address<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Alamat KTP" />
                            </div>
                            <div class="form-group">
                                <label>Living Status<sup class="text-danger">*</sup></label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option>Milik Pribadi</option>
                                    <option>Milik Orang Tua</option>
                                    <option>Rumah Kontrakan</option>
                                    <option>Indekost</option>
                                    <option>None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Driving License</label>
                                <input type="text" class="form-control" placeholder="A,B,C,..." />
                            </div>
                            <div class="form-group">
                                <label>Taxpayer No</label>
                                <input type="text" class="form-control" placeholder="Nomor NPWP" />
                            </div>
                            <div class="form-group">
                                <label>Group Position<sup class="text-danger">*</sup></label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Height<sup class="text-danger">*</sup></label>
                                <input type="number" class="form-control" placeholder="Tinggi Badan" />
                            </div>
                            <div class="form-group">
                                <label>Color Blindness<sup class="text-danger">*</sup></label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option>Ya</option>
                                    <option>Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Phone Number<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Nomor HP" />
                            </div>
                            <div class="form-group">
                                <label>Email<sup class="text-danger">*</sup></label>
                                <input type="email" class="form-control" placeholder="Alamat Email" />
                            </div>

                            <div class="form-group">
                                <label>CV Date<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" placeholder="Nomor HP" />
                            </div>
                            <div class="form-group">
                                <label>Date Of Hire<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" placeholder="Nomor HP" />
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" />
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth<sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Gender<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Current Address<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Alamat Sekarang">
                            </div>
                            <div class="form-group">
                                <label>Religion<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                    <option value="Lain">Lain-Lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Marital Status<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option value="TK0">TK-0</option>
                                    <option value="TK1">TK-1</option>
                                    <option value="TK2">TK-2</option>
                                    <option value="TK3">TK-3</option>
                                    <option value="K0">K-0</option>
                                    <option value="K1">K-1</option>
                                    <option value="K2">K-2</option>
                                    <option value="K3">K-3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>BPJS No</label>
                                <input type="text" class="form-control" placeholder="Nomor BPJS">
                            </div>
                            <div class="form-group">
                                <label>Position<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Weight<sup class="text-danger">*</sup></label>
                                <input type="number" class="form-control" placeholder="Tinggi Badan" />
                            </div>
                            <div class="form-group">
                                <label>Blood Type<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Telephone Number<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Nomor Telephone" />
                            </div>
                            <div class="form-group">
                                <label>Point Of Hire<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option value="L">Local</option>
                                    <option value="NL">Non Local</option>
                                    <option value="NP">Non Papua</option>
                                    <option value="PO">Papua Others</option>
                                    <option value="PO">Papua 7 Ethnic</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Staff / Non Staff<sup class="text-danger">*</sup></label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected" disabled>Pilih</option>
                                    <option value="0">Non Staff</option>
                                    <option value="1">Staff</option>
                                </select>
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
            <div class="col-12 ">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education" data-toggle="pill" href="#ed" role="tab" aria-controls="ed" aria-selected="true">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="training" data-toggle="pill" href="#tr" role="tab" aria-controls="tr" aria-selected="false">Trainings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience" data-toggle="pill" href="#ex" role="tab" aria-controls="ex" aria-selected="false">Experiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="family" data-toggle="pill" href="#fa" role="tab" aria-controls="fa" aria-selected="false">Family Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="language" data-toggle="pill" href="#la" role="tab" aria-controls="la" aria-selected="false">Languages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="organization" data-toggle="pill" href="#or" role="tab" aria-controls="or" aria-selected="false">Organizations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reference" data-toggle="pill" href="#re" role="tab" aria-controls="re" aria-selected="false">References</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="qualification" data-toggle="pill" href="#qa" role="tab" aria-controls="qa" aria-selected="false">Qualification</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="ed" role="tabpanel" aria-labelledby="education">
                                Education
                                <table id="eduTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Institution</th>
                                            <th>Major</th>
                                            <th>Year</th>
                                            <th>City</th>
                                            <th>Certificate</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tr" role="tabpanel" aria-labelledby="training">
                                Training
                                <table id="trTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Institution</th>
                                            <th>Major</th>
                                            <th>Year</th>
                                            <th>City</th>
                                            <th>Certificate</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="ex" role="tabpanel" aria-labelledby="experience">
                                Experiences
                                <table id="exTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Join Date</th>
                                            <th>Current</th>
                                            <th>End Of Working</th>
                                            <th>Basic Salary</th>
                                            <th>Allowance</th>
                                            <th>Job Desc</th>
                                            <th>Quit Reason</th>
                                            <th>Information</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>X</td>
                                            <td>X</td>
                                            <td>X</td>
                                            <td>X</td>
                                            <td>X</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="fa" role="tabpanel" aria-labelledby="family">
                                Family Data
                                <table id="faTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship</th>
                                            <th>Date Of Birth</th>
                                            <th>Education</th>
                                            <th>Occupation</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td>X</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="la" role="tabpanel" aria-labelledby="language">
                                Languages
                                <table id="laTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Langugae</th>
                                            <th>Writting</th>
                                            <th>Oral</th>
                                            <th>Information</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="or" role="tabpanel" aria-labelledby="organization">
                                Organizations
                                <table id="orTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Organizations</th>
                                            <th>Year</th>
                                            <th>Position</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="re" role="tabpanel" aria-labelledby="reference">
                                References
                                <table id="reTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship</th>
                                            <th>Address</th>
                                            <th>Contact No</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="qa" role="tabpanel" aria-labelledby="qualification">
                                Qualification
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                    Qualification
                                </button>
                                <table id="faTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Year Period</th>
                                            <th>Certificate</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet</td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->






</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center mx-5 ">
                <h4 class="modal-title">Add Qualification</h4>
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
            $('#eduTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    });
</script>