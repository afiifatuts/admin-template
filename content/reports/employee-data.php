<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-b2">Employee Data </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active text-b2l">Employee Data </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content ">
        <div class="container ">
            <!-- SELECT2 EXAMPLE -->
            <div class=" card card-default ">
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <select class="form-control" id="agesMax" name="agesMax" required="">
                                                <option value="55" selected="">All Ages</option>
                                                <script type="text/javascript">
                                                    var age = 17;
                                                    for (var i = age; i <= 55; i++) {
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Position:</label>
                                            <input class="form-control" type="text" id="searchByPosition" name="searchByPosition" placeholder="Position" width="100px">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>City Name:</label>
                                            <input class="form-control" type="text" id="searchByCity" name="searchByCity" placeholder="City Name" width="100px">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Employee Name:</label>
                                            <input class="form-control" type="text" id="searchByName" name="searchByName" placeholder="Employee Name" width="100px">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>No KTP:</label>
                                            <input class="form-control" type="text" id="searchByIdNo" name="searchByIdNo" placeholder="No KTP" width="100px">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn bg-b2 font-weight-bold">
                                            <i class="fas fa-sync-alt"></i> View
                                        </button>
                                        <button class="btn btn-warning ml-2 font-weight-bold">
                                            <i class="fas fa-print"></i> Print
                                        </button>
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
        <div class="container">
            <!-- SELECT2 EXAMPLE -->
            <div class=" card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title text-b2 ">View Employee Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 139px;">Biodata Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 118px;">Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Address</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">City</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">Contact No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 176px;">Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 176px;">CV Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" align="center">Edit</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" align="center">Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2017080515</td>
                                    <td>Sony Wijaya</td>
                                    <td>None</td>
                                    <td>Jakarta</td>
                                    <td> +62 856 905 879</td>
                                    <td>Accounting</td>
                                    <td></td>
                                    <td><a href="" class="btn bg-b2" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="" class="btn bg-b2"><i class="fas fa-print"></i></a></td>
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



    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="col-12 ">
                <div class="card card-secondary card-tabs">
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
                                    </tbody>
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
                                    </tbody>
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
                                    </tbody>
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
                                    </tbody>
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
                                    <tbody>
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
                                    </tbody>
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
                                    </tbody>
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


<div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2 bg-b text-white">
                <h4 class="modal-title">Edit Biodata</h4>
                <button type="button" class="close btn ml-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-md-5">
                <form method="post" class="my_detail">
                    <div class="form-group">
                        <label class="control-label" for="biodataId">Id</label>
                        <input class="form-control" type="text" id="biodataId" name="biodataId" placeholder="Id" readonly="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="fullName">Name</label>
                        <code id="fullNameErr" class="errMsg"><span>*</span></code>
                        <input class="form-control" type="text" id="fullName" name="fullName" placeholder="Nama Karyawan">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="gender">Gender</label>
                        <code id="genderErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="gender" name="gender" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="birthPlace">Birth Place</label>
                        <!-- <span> : Wajib Diisi</span></code> -->
                        <code id="birthPlaceErr" class="errMsg"><span>*</span></code>
                        <input class="form-control" type="text" id="birthPlace" name="birthPlace" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="birthDay">Birth Date</label>
                        <code id="birthDayErr" class="errMsg"><span>*</span></code>
                        <input class="form-control" type="date" id="birthDay" name="birthDay" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pointOfHire">Point Of Hire</label>
                        <code id="pointOfHireErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="pointOfHire" name="pointOfHire" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="L">Local</option>
                            <option value="NL">Non Local</option>
                            <option value="NP">Non Papua</option>
                            <option value="PO">Papua Others</option>
                            <option value="PO">Papua 7 Ethnic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nationality">Nationality</label>
                        <code id="nationalityErr" class="errMsg"><span>*</span></code>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Warga Negara" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="etnics">Etnics</label>
                        <code id="etnicsErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="etnics" name="etnics" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="Jawa">Jawa</option>
                            <option value="Sunda">Sunda</option>
                            <option value="Melayu">Melayu</option>
                            <option value="Menado">Menado</option>
                            <option value="Batak">Batak</option>
                            <option value="Toraja">Toraja</option>
                            <option value="Papua">Papua</option>
                            <option value="Padang">Padang</option>
                            <option value="Lain">Lain-Lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idNo">Id No</label>
                        <code id="idNoErr" class="errMsg"><span>*</span></code>
                        <input type="text" class="form-control" id="idNo" name="idNo" placeholder="Nomor KTP" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idAddress">Id Address</label>
                        <code id="idAddressErr" class="errMsg"><span>*</span></code>
                        <input type="text" class="form-control" id="idAddress" name="idAddress" placeholder="Alamat KTP" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="currentAddress">NPWP Address</label>
                        <code id="currentAddressErr" class="errMsg"><span>*</span></code>
                        <input type="text" class="form-control" id="currentAddress" name="currentAddress" placeholder="Alamat Sekarang" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="cityAddress">City</label>
                        <select class="form-control" id="cityAddress" name="cityAddress" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="npwpNo">Taxpayer No</label>
                        <input type="text" class="form-control" id="npwpNo" name="npwpNo" placeholder="Nomor NPWP" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="npwpNo">BPJS No</label>
                        <input type="text" class="form-control" id="bpjsNo" name="bpjsNo" placeholder="Nomor BPJS" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="livingStatus">Living Status</label>
                        <code id="livingStatusErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="livingStatus" name="livingStatus" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="Milik Pribadi">Milik Pribadi</option>
                            <option value="Milik Orang Tua">Milik Orang Tua</option>
                            <option value="Rumah Kontrakan">Rumah Kontrakan</option>
                            <option value="Indekost">Indekost</option>
                            <option value="None">None</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="birthPlace">Religion</label>
                        <code id="religionErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="religion" name="religion" required="">
                            <option value="" disabled="" selected="">Pilih</option>
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
                        <label class="control-label" for="driveLicence">Driving License</label>
                        <input type="text" class="form-control" id="driveLicence" name="driveLicence" placeholder="A,B,C,..">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="maritalStatus">Status</label>
                        <code id="maritalStatusErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="maritalStatus" name="maritalStatus" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="TK0">TK-0</option>
                            <option value="TK1">TK-1</option>
                            <option value="TK2">TK-2</option>
                            <option value="TK3">TK-3</option>
                            <option value="K0">K-0</option>
                            <option value="K1">K-1</option>
                            <option value="K2">K-2</option>
                            <option value="K3">K-3</option>
                            <option value="Lain">Lain-Lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="groupPosition">Group Position</label>
                        <code id="groupPositionErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="groupPosition" name="groupPosition" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="groupPosition">Position</label>
                        <code id="appliedPositionErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="appliedPosition" name="appliedPosition" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="cvDate">CV Date</label>
                        <code id="cvDateErr" class="errMsg"><span>*</span></code>
                        <input type="Date" class="form-control" id="cvDate" name="cvDate" placeholder="Tanggal CV" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="height">Height</label>
                        <code id="heightErr" class="errMsg"><span>*</span></code>
                        <input type="number" class="form-control" id="height" name="height" min="0" placeholder="Tinggi Badan" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="weight">Weight</label>
                        <code id="weightErr" class="errMsg"><span>*</span></code>
                        <input type="number" class="form-control" id="weight" name="weight" min="0" placeholder="Berat Badan" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="colorBlindness">Color Blindness</label>
                        <code id="colorBlindnessErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="colorBlindness" name="colorBlindness">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="bloodType">Blood Type</label>
                        <code id="bloodTypeErr" class="errMsg"><span>*</span></code>
                        <select class="form-control" id="bloodType" name="bloodType" required="">
                            <option value="" disabled="" selected="">Pilih</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                            <option value="None">None</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="emailAddress">Email</label>
                        <code id="emailAddressErr" class="errMsg"><span>*</span></code>
                        <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Alamat Email" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="telpNo">Phone No</label>
                        <code id="telpNoErr" class="errMsg"><span>*</span></code>
                        <input type="text" class="form-control" id="telpNo" name="telpNo" placeholder="Nomor Telepon" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="cellNo">Celular No</label>
                        <code id="cellNoErr" class="errMsg"><span>*</span></code>
                        <input type="text" class="form-control" id="cellNo" name="cellNo" placeholder="Nomor HP" required="">
                    </div>
                    <div class="form-group">
                        <!-- <label class="control-label" for="rowIdx">Index</label> -->
                        <input class="form-control" type="hidden" id="rowIdx" name="rowIdx" value="" readonly="">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary ">Save</button>
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