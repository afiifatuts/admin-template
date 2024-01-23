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
                                <label>Internal Id <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Id Internal" required autofocus />
                            </div>
                            <div class="form-group">
                                <label>Eksternal Id <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Id External" />
                            </div>
                            <div class="form-group">
                                <label>Payroll Group <sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="payrollGroup" name="payrollGroup" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                    <option value="I">I</option>
                                    <option value="J">J</option>
                                    <option value="K">K</option>
                                    <option value="L">L</option>
                                    <option value="M">M</option>
                                    <option value="N">N</option>
                                    <option value="O">O</option>
                                    <option value="P">P</option>
                                    <option value="T">T</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Pontil Jakarta">Pontil Jakarta</option>
                                    <option value="Expatriates">Expatriates</option>
                                    <option value="4500914848">4500914848</option>
                                    <option value="4500915134">4500915134</option>
                                    <option value="4500923313">4500923313</option>
                                    <option value="4500940448">4500940448</option>
                                    <option value="4500941687">4500941687</option>
                                    <option value="4500947118">4500947118</option>
                                    <option value="4500892861">4500892861</option>
                                    <option value="4500899155">4500899155</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Level<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="salaryLevel" name="salaryLevel" required="" disabled>
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
                                <label>Position Allowance<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Tunjangan Jabatan" value="0" />
                            </div>
                            <div class="form-group">
                                <label>Is Remote Allowance<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isRemoteLocation" name="isRemoteLocation" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Allowance Economy<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isAllowanceEconomy" name="isAllowanceEconomy" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Bonus Incentive<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isIncentiveBonus" name="isIncentiveBonus" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Production<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isProductionBonus" name="isProductionBonus" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Production<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isTravelBonus" name="isTravelBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Travel<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isTravelBonus" name="isTravelBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bank Name<sup class="text-danger">*</sup></label>
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
                                <label>Account No <sup class="text-danger">*</sup></label>
                                <input type="text" class="errMsg form-control" id="accountNo" name="accountNo" placeholder="Nomor Rekening" required="">
                            </div>

                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Nama Karyawan" disabled />
                            </div>
                            <div class="form-group">
                                <label>Client Name<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="ptName" name="ptName" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Placement<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="areaPenempatan" name="areaPenempatan" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                    <option value="Manado">Manado</option>
                                    <option value="NCC_Driver_LV">NCC_Driver_LV</option>
                                    <option value="NCC_Dump_Truck">NCC_Dump_Truck</option>
                                    <option value="NCC_Mill_Exp_Ori">NCC_Mill_Exp_Ori</option>
                                    <option value="NCC_Mill_Exp_Var2">NCC_Mill_Exp_Var2</option>
                                    <option value="NCC_Mill_Exp_Var3">NCC_Mill_Exp_Var3</option>
                                    <option value="NCC_Mill_Ex_Var1">NCC_Mill_Ex_Var1</option>
                                    <option value="NCC_Sumbawa">NCC_Sumbawa</option>
                                    <option value="NCC_Telehandler">NCC_Telehandler</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Samarinda">Samarinda</option>
                                    <option value="Sibolga">Sibolga</option>
                                    <option value="Sumbawa">Sumbawa</option>
                                    <option value="Timika">Timika</option>
                                    <!-- <option value="Jakarta">Jakarta</option>
              <option value="Papua">Papua</option>
              <option value="Sumbawa">Sumbawa</option>
              <option value="NCC_Sumbawa">NCC Sumbawa</option>
              <option value="Sibolga">Sibolga</option>
              <option value="Menado">Menado</option>
              <option value="Banyuwangi">Banyuwangi</option>
              <option value="Timika">Timika</option>
              <option value="Jambi">Jambi</option>
              <option value="Samarinda">Samarinda</option>
              <option value="Gorontalo">Gorontalo</option>
              <option value="lain-lain">Lain-Lain</option> -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Current Address<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" placeholder="Alamat Sekarang">
                            </div>
                            <div class="form-group">
                                <label>Basic Salary<sup class="text-danger">*</sup></label>
                                <input type="text" class="errMsg form-control currencyField" id="basicSalary" name="basicSalary" value="0" placeholder="Gaji Pokok" required="">
                            </div>
                            <div class="form-group">
                                <label>Housing & Transport Allowance<sup class="text-danger">*</sup></label>
                                <input type="text" class="errMsg form-control currencyField" id="housingAllowance" name="housingAllowance" value="0" placeholder="Tunjangan Transport & Tinggal" required="">
                            </div>
                            <div class="form-group">
                                <label>Is Shift Bonus<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isShiftBonus" name="isShiftBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Overtime Bonus<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isOTBonus" name="isOTBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Dev Incentive<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isIncentiveDevBonus" name="isIncentiveDevBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is CC Payment<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isIncentiveDevBonus" name="isIncentiveDevBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is Overtime<sup class="text-danger">*</sup></label>
                                <select class="errMsg form-control" id="isOTBonus" name="isOTBonus" required="">
                                    <option value="" disabled="" selected="">Pilih</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Account Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="errMsg form-control" id="accountName" name="accountName" placeholder="Nama Pemilik Rekening" required="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Save</button>
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