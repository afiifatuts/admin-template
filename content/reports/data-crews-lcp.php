<?php include 'partial/topbar.php'; ?>
<?php include 'partial/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Crews LCP </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Data Crews LCP </li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class=" float-sm-right mt-lg-3">
                        <button class="btn btn-primary font-weight-bold rounded-pill"> <span class="fa fa-list"></span> View</button>
                        <button class="btn btn-warning font-weight-bold rounded-pill"> <i class="fas fa-print"></i> Print</button>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card card-default">
                <div class="card-header text-center">
                    <h3 class="card-title  ">View Invoice Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-md-12">
                        <table id="timesheetTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 118px;">Badge Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 139px;">Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Place Of Birth</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Date Of Birth</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 139px;">Id Card Number</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 118px;">Address</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">NPWP Number</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Marital Status</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Basic Salary</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Bank Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Account Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169px;">Account Number</th>
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
<!-- /.content-wrapper -->



<div class="modal custom-modal fade" id="inputInvoiceSangati">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2 bg-b text-white">
                <h4 class="modal-title m-3"> Input Invoice Sangati</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <form action="http://localhost/belajar/hris-acc/reports/CR_Invoice_Client/storeInvoice" method="post">
                    <div class="modal-body" style="background:#fff;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Invoice Date</label>
                                    <input type="date" required name="invoice_date" id="invoice_date_sangati" class="form-control" placeholder="Invoice Date" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Client Name </label>
                                    <select class="errMsg form-control" required name="client_name" id="client_name_sangati">
                                        <option value="">- Pilih -</option>
                                        <option value="LCP_Sumbawa"> PT. LAMURUNG CIPTA PERSADA </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Year </label>
                                    <select class="errMsg form-control" required name="year_periode" id="year_periode_sangati">
                                        <option value=""> - Pilih -</option>
                                        <option value='2021'>2021</option>
                                        <option value='2022'>2022</option>
                                        <option value='2023'>2023</option>
                                        <option value='2024'>2024</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Month</label>
                                    <select class="errMsg form-control" required name="month_periode" id="month_periode_sangati">
                                        <option value=""> - Pilih -</option>
                                        <option value='01'>01</option>
                                        <option value='02'>02</option>
                                        <option value='03'>03</option>
                                        <option value='04'>04</option>
                                        <option value='05'>05</option>
                                        <option value='06'>06</option>
                                        <option value='07'>07</option>
                                        <option value='08'>08</option>
                                        <option value='09'>09</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                <label for="">Candidates</label>
                                <input type="number" name="candidate" required id="candidate_sangati" class="form-control"
                                    placeholder="Candidates" aria-describedby="helpId">
                            </div> -->
                                <div class="form-group">
                                    <label class="control-label">VAT </label>
                                    <input class="errMsg form-control" required type="text" name="vat" placeholder="VAT" id="vat_sangati">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Contract No</label>
                                    <input type="text" name="contract_no" id="contract_no_sangati" class="form-control" placeholder="Contract No" required aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Invoice No.</label>
                                    <input type="text" name="invoice_no" id="invoice_no_sangati" class="form-control" placeholder="Invoice No" required aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Service No.</label>
                                    <input type="text" name="service_no" id="service_no_sangati" class="form-control" placeholder="Service No" required aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Cost Center</label>
                                    <input type="text" name="cost_center" id="cost_center_sangati" class="form-control" placeholder="Cost Center" aria-describedby="helpId">
                                </div>
                                <!-- <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" name="amount" required id="amount_sangati" class="form-control" placeholder="Amount"
                                    aria-describedby="helpId">
                            </div> -->
                                <div class="form-group">
                                    <label class="control-label">Payroll Group</label>
                                    <select class="form-control" required name="payroll_group" id="payroll_group_sangati">
                                        <option value="ALL">ALL</option>
                                        <option value="MIX">MIX</option>
                                        <option value="B">B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body p-0" style="background:#fff;border-top:1px solid #ddd">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="table_multiple">
                                <thead>
                                    <tr>
                                        <th style="width:65%;">Description</th>
                                        <th style="width:30%;">Amount</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea name="description[]" id="description" rows="3" required placeholder="Misal : Tagihan atas pencarian kandidat tenaga kerja" class="form-control"></textarea>
                                        </td>
                                        <td>
                                            <input type="number" name="amount[]" class="form-control" required placeholder="Amount" id="amount[]">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm" id="tambah_form" onclick="tambah(1)"><i class="fa fa-plus"></i> Form</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-body" style="background:#fff;">
                        <div class="form-group">
                            <label class="control-label">Remarks </label>
                            <textarea class="errMsg form-control" placeholder="Remarks" rows="5" name="remarks" id="remarks_sangati"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal custom-modal fade" id="inputInvoice">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2 bg-y text-white">
                <h4 class="modal-title m-3"> Input Invoice Client</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <div class="container">
                    <div class="tile-body">
                        <div class="form-group row">
                            <label class="control-label col-md-2">Type Form </label>
                            <div class="col-md-4">
                                <select class="form-control" id="type_invoice" name="type_invoice">
                                    <option value="Invoice_Client">Invoice Client</option>
                                    <option value="Claim_Client">Payment Claim</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Invoice Date </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="date" placeholder="Invoice Date" id="invoice_date">
                            </div>
                            <label class="control-label col-md-2">Invoice No</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="text" placeholder="Invoice No" id="invoice_no">
                                <input class="errMsg form-control col-md-12" type="hidden" id="status" value="NS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Client Name </label>
                            <div class="col-md-4">
                                <select class="errMsg form-control col-md-12" id="client_name">
                                    <option value="">- Pilih -</option>
                                    <option value="LCP_Sumbawa"> PT. AMMAN MINERAL NUSA TENGGARA </option>
                                </select>
                            </div>
                            <label class="control-label col-md-2">Contract No</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="text" placeholder="Contract No" id="contract_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Year </label>
                            <div class="col-md-4">
                                <select class="errMsg form-control col-md-12" id="year">
                                    <option value=""> - Pilih -</option>
                                    <option value='2021'>2021</option>
                                    <option value='2022'>2022</option>
                                    <option value='2023'>2023</option>
                                    <option value='2024'>2024</option>
                                </select>
                                <!-- <input class="errMsg form-control col-md-12" type="text" placeholder="Year" id="year"> -->
                            </div>
                            <label class="control-label col-md-2">Month</label>
                            <div class="col-md-4">
                                <select class="errMsg form-control col-md-12" id="month">
                                    <option value=""> - Pilih -</option>
                                    <option value='01'>01</option>
                                    <option value='02'>02</option>
                                    <option value='03'>03</option>
                                    <option value='04'>04</option>
                                    <option value='05'>05</option>
                                    <option value='06'>06</option>
                                    <option value='07'>07</option>
                                    <option value='08'>08</option>
                                    <option value='09'>09</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                </select>
                                <!-- <input class="errMsg form-control col-md-12" type="text" placeholder="Month" id="month"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Bonus </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Bonus" id="bonus">
                            </div>
                            <label class="control-label col-md-2">MCU</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="MCU" id="mcu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Meal </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Meal" id="meal">
                            </div>
                            <label class="control-label col-md-2">Accomodations</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Accomodations" id="accomodations">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">PPE</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="PPE" id="ppe">
                            </div>
                            <label class="control-label col-md-2">Transport - Mob Demob </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Transport - Mob Demob" id="transport">
                            </div>
                            <!-- <label class="control-label col-md-2">PPE</label>
                                <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="PPE" id="ppe">
                                </div> -->
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">VAT </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="text" placeholder="VAT" id="vat">
                            </div>
                            <label class="control-label col-md-2">Payroll Group</label>
                            <div class="col-md-4">
                                <select class="form-control" name="payrollGroup" id="payrollGroup">
                                    <option value="ALL">ALL</option>
                                    <option value="MIX">MIX</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Eksplorasi Camp </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Remote Camp" id="st_remote">
                            </div>
                            <label class="control-label col-md-2">Regional Camp </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Regional Camp" id="st_regional">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label">Remarks </label>
                            <textarea class="errMsg form-control" placeholder="Remarks" rows="5" id="remarks"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-primary" data-dismiss="modal" value="Save" id="saveInvoiceLcpNs">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal custom-modal fade" id="updateInvoice">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-center pt-2 pb-2 bg-b text-white">
                <h4 class="modal-title m-3"> Input Invoice Client</h4>
                <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%">
                <div class="container">
                    <div class="tile-body">
                        <div class="form-group row">
                            <label class="control-label col-md-2">Type Form </label>
                            <div class="col-md-4">
                                <select class="form-control" id="type_invoice" name="type_invoice">
                                    <option value="Invoice_Client">Invoice Client</option>
                                    <option value="Claim_Client">Payment Claim</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Invoice Date </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="date" placeholder="Invoice Date" id="invoice_date">
                            </div>
                            <label class="control-label col-md-2">Invoice No</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="text" placeholder="Invoice No" id="invoice_no">
                                <input class="errMsg form-control col-md-12" type="hidden" id="status" value="NS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Client Name </label>
                            <div class="col-md-4">
                                <select class="errMsg form-control col-md-12" id="client_name">
                                    <option value="">- Pilih -</option>
                                    <option value="LCP_Sumbawa"> PT. AMMAN MINERAL NUSA TENGGARA </option>
                                </select>
                            </div>
                            <label class="control-label col-md-2">Contract No</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="text" placeholder="Contract No" id="contract_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Year </label>
                            <div class="col-md-4">
                                <select class="errMsg form-control col-md-12" id="year">
                                    <option value=""> - Pilih -</option>
                                    <option value='2021'>2021</option>
                                    <option value='2022'>2022</option>
                                    <option value='2023'>2023</option>
                                    <option value='2024'>2024</option>
                                </select>
                                <!-- <input class="errMsg form-control col-md-12" type="text" placeholder="Year" id="year"> -->
                            </div>
                            <label class="control-label col-md-2">Month</label>
                            <div class="col-md-4">
                                <select class="errMsg form-control col-md-12" id="month">
                                    <option value=""> - Pilih -</option>
                                    <option value='01'>01</option>
                                    <option value='02'>02</option>
                                    <option value='03'>03</option>
                                    <option value='04'>04</option>
                                    <option value='05'>05</option>
                                    <option value='06'>06</option>
                                    <option value='07'>07</option>
                                    <option value='08'>08</option>
                                    <option value='09'>09</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                </select>
                                <!-- <input class="errMsg form-control col-md-12" type="text" placeholder="Month" id="month"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Bonus </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Bonus" id="bonus">
                            </div>
                            <label class="control-label col-md-2">MCU</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="MCU" id="mcu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Meal </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Meal" id="meal">
                            </div>
                            <label class="control-label col-md-2">Accomodations</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Accomodations" id="accomodations">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">PPE</label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="PPE" id="ppe">
                            </div>
                            <label class="control-label col-md-2">Transport - Mob Demob </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Transport - Mob Demob" id="transport">
                            </div>
                            <!-- <label class="control-label col-md-2">PPE</label>
                                <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="PPE" id="ppe">
                                </div> -->
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">VAT </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="text" placeholder="VAT" id="vat">
                            </div>
                            <label class="control-label col-md-2">Payroll Group</label>
                            <div class="col-md-4">
                                <select class="form-control" name="payrollGroup" id="payrollGroup">
                                    <option value="ALL">ALL</option>
                                    <option value="MIX">MIX</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Eksplorasi Camp </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Remote Camp" id="st_remote">
                            </div>
                            <label class="control-label col-md-2">Regional Camp </label>
                            <div class="col-md-4">
                                <input class="errMsg form-control col-md-12" type="number" placeholder="Regional Camp" id="st_regional">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label">Remarks </label>
                            <textarea class="errMsg form-control" placeholder="Remarks" rows="5" id="remarks"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-primary" data-dismiss="modal" value="Save" id="saveInvoiceLcpNs">
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

    /** Form Client */
    $('#table_multiple tbody').on('click', '.delete-row', function() {
        var rowCount = $('#table_multiple >tbody >tr').length;
        $(this).parent().parent().remove();
        $('#tambah_form').attr('onclick', `tambah(${rowCount-1})`);
    });

    function tambah(i) {
        $("#table_multiple").append(`<tr>
            <td>
                <textarea name="description[]" id="description" rows="3" 
                placeholder="Misal : Tagihan atas pencarian kandidat tenaga kerja" required class="form-control"></textarea>
            </td>
            <td>
                <input type="number" name="amount[]" class="form-control" required placeholder="Amount" id="amount[]">
            </td>
			<td>
				<a href="javascript:void(0)" 
				class="btn btn-danger delete-row btn-sm" data-id="${i+1}">
				<i class="fa fa-times"></i></a>
			</td>
		</tr>`).children(':last');
        $('#tambah_form').attr('onclick', `tambah(${i+1})`);
    }
</script>