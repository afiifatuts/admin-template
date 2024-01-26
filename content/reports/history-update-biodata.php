<!--START FORM DATA -->
<div class="col-md-12" id="is_transaction">
    <div class="tile bg-info">
        <div class="tile-body">
            <form class="row is_header">
                <div class="form-group col-sm-12 col-md-2">
                    <label class="control-label">SITE</label>
                    <code id="siteErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="site" name="site" required="">
                        <option value="" disabled="" selected="">Pilih</option>
                        <option value="Timika">Timika</option>
                        <!-- <option value="Sumbawa">Sumbawa</option> -->
                    </select>
                </div>

                <div class="form-group col-sm-12 col-md-2">
                    <label class="control-label">CLIENT</label>
                    <code id="clientNameErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="clientName" name="clientName" required="">
                        <option value="All" selected="All">All</option>
                        <option value="Pontil_Timika">Major Drilling Indonesia Timika</option>
                        <option value="Redpath_Timika">Redpath Timika</option>
                        <!-- <option value="Pontil_Sumbawa">Pontil Sumbawa</option> -->
                        <!-- <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option> -->
                    </select>
                </div>

                <div class="form-group col-sm-12 col-md-1">
                    <label class="control-label">YEAR</label>
                    <code id="yearPeriodErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="yearPeriod" name="yearPeriod" required="">
                        <option value="" disabled="" selected="">Pilih</option>
                        <script type="text/javascript">
                            var dt = new Date();
                            var currYear = dt.getFullYear();
                            var currMonth = dt.getMonth();
                            var currDay = dt.getDate();
                            var tmpDate = new Date(currYear + 1, currMonth, currDay);
                            var startYear = tmpDate.getFullYear();
                            var endYear = startYear - 5;
                            for (var i = startYear; i >= endYear; i--) {
                                document.write("<option value='" + i + "'>" + i + "</option>");
                            }
                        </script>
                    </select>
                </div>

                <div class="form-group col-sm-12 col-md-1">
                    <label class="control-label">MONTH</label>
                    <code id="monthPeriodErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="monthPeriod" name="monthPeriod" required="">
                        <option value="" disabled="" selected="">Pilih</option>
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

                <div class="form-group col-sm-12 col-md-2 dept">
                    <label class="control-label">DEPT </label>
                    <code id="docKindErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="dept" name="dept" required="">
                        <option value="" disabled="" selected="">Pilih</option>
                    </select>
                </div>

                <div class="form-group col-sm-12 col-md-2 payrollGroup">
                    <label class="control-label" for="payrollGroup">GROUP</label>
                    <select class="form-control" id="payrollGroup" name="payrollGroup" required="">
                        <option value="" disabled="" selected="">Pilih</option>
                        <option value="All">All</option>
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
                    </select>
                </div>

                <div class="form-group col-sm-12 col-md-2 bank">
                    <label class="control-label">BANK NAME</label>
                    <code id="bankErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="bank" name="bank" required="">
                        <option value="" selected="" disabled="">Pilih</option>
                        <option value="MANDIRI">MANDIRI</option>
                        <option value="BNI">BNI</option>
                        <option value="EXCPT">EXCEPT BNI/MANDIRI</option>
                        <!-- <option value="BRI">BRI</option> -->
                        <!-- <option value="Pontil_Sumbawa">Pontil Sumbawa</option> -->
                        <!-- <option value="Trakindo_Sumbawa">Trakindo Sumbawa</option> -->
                    </select>
                </div>

                <div class="form-group col-sm-12 col-md-2">
                    <label class="control-label" for="dataprint">DATA PRINT</label>
                    <code id="docKindErr" class="errMsg"><span> : Required</span></code>
                    <select class="form-control" id="dataprint" name="dataprint" required="">
                        <option value="" selected="" disabled="">Pilih</option>
                        <option value="Nama_File">Nama File</option>
                    </select>
                </div>

                <div class="form-group col-md-12 align-self-end">
                    <button class="btn btn-warning btnProcessPanel" type="button" id="viewCsv" name="viewCsv">
                        <span class="fa fa-list"></span> DATA DISPLAY
                    </button>
                    <button class="btn btn-warning btnProcessPanel" type="button" id="printToFile" name="printToFile">
                        <span class="fa fa-print"></span> DATA PRINT
                    </button>
                    <button class="btn btn-warning print" type="button" id="print" name="print">
                        <span class="fa fa-print"></span> PRINT
                    </button>
                    <br>
                    <h3><code id="dataProses" class="backTransparent"><span></span></code></h3>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END FORM DATA -->