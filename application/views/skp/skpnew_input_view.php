
        <div class="d-flex justify-content-between">
            <h4 class="at mb-5">Input SKP</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Form SKP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Input SKP</li>
                </ol>
            </nav>
        </div>
        <div class="px-3">
            <div class="row bg-white p-3 mb-5">
                <div class="col-md-2 text-center">
                    <img src="<?=base_url();?>assets/images/circle.png" alt="..." class="rounded-circle" style="width: 90px;height: 90px;">
                </div>
                <div class="col-md-10">
                    <h5 class="mb-4 fs"><?php echo $this->session->userdata('nama_lengkap'); ?> </h5>
                    <div class="d-flex flex-row">
                        <div class="d-flex flex-column subs mr-5">
                            <label class="mb-3 fs">Nip</label>
                            <label>1191266308221119</label>
                        </div>
                        <div class="d-flex flex-column subs mr-5">
                            <label class="mb-3 fs">Pangkat/Golongan</label>
                            <label>Penata Tk. I, III/d</label>
                        </div>
                        <div class="d-flex flex-column subs mr-5">
                            <label class="mb-3 fs">Jabatan</label>
                            <label>Kepala Sub Bidang Aplikasi</label>
                        </div>
                        <div class="d-flex flex-column subs mr-5">
                            <label class="mb-3 fs">Unit Kerja</label>
                            <label>Pusat Data & Informasi Obat & Makanan</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#home">
                    	<label>Step 1</label>
                    	<div class="d-flex justify-content-between">
                    		<h5>Periode & Pejabat Penilai</h5>
                    		<img src="assets/images/checklist.png" style="width: 20px;height: 20px;">
                    	</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">
                    	<label>Step 2</label>
                    	<div class="d-flex justify-content-between">
                			<h5>Kegiatan Tugas Jabatan</h5>
                    		<img src="assets/images/checklist.png" style="width: 20px;height: 20px;">
                    	</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#menu2">
                    	<label>Step 3</label>
                    	<div class="d-flex justify-content-between">
                    		<h5>Konfirmasi</h5>
                    		<!-- <img src="assets/images/checklist.png" style="width: 20px;height: 20px;"> -->
                    	</div>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="p-5 tab-pane fade"><br>
                    <h5 class="mb-4">Masukan Periode SKP & Pejabat Penilai</h5>
                    <hr class="mb-5">
                    <form>
                    	<div class="form-group row">
                            <h6 class="col-sm-4 fs">Periode SKP</h6>
                            <h6 class="col-sm-1 fs">:</h6>
                            <div class="col-sm-7">
                            	<div class="d-flex flex-row">
	                                <div class="input-group date w-50">
	                                    <input type="text" class="form-control" placeholder="Periode Awal">
	                                    <img src="<?=base_url();?>assets/images/date.png" class="img-d">
	                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                                </div>
	                                <label class="mx-2 mt-2">S.d</label>
	                                <div class="input-group date w-50">
	                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                                    <input type="text" class="form-control" placeholder="31 Desember 2020">
	                                    <img src="<?=base_url();?>assets/images/date.png" class="img-d">
	                                </div>	                            		
                            	</div>
                                <label class="ln">Pemilihan tanggal periode SKP menggunakan tanggal hari kerja</label>
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <h6 class="col-sm-4 fs">Pejabat Penilai</h6>
                            <h6 class="col-sm-1 fs">:</h6>
                            <div class="col-sm-7">
                                <select class="chosen-select">
                                    <option value="0" disabled selected>Cari Nama atau NIP</option>
                                    <option value="1">Pegawai 1</option>
                                    <option value="2">Pegawai 2</option>
                                    <option value="2">Pegawai 3</option>
                                </select>                                
                                <div class="custom-control form-control-lg custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                    <label class="custom-control-label" for="customCheck2">Pejabat penilai sekaligus pelaksana tugas (PLT)</label>
                                </div>
                                <input type="text" class="form-control mt-2" id="colFormLabelLg" placeholder="Nama Jabatan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-sm-4 fs">Atasan Pejabat Penilai</h6>
                            <h6 class="col-sm-1 fs">:</h6>
                            <div class="col-sm-7">
                                <select class="chosen-select">
                                    <option value="0" disabled selected>Cari Nama atau NIP</option>
                                    <option value="1">Pegawai 1</option>
                                    <option value="2">Pegawai 2</option>
                                    <option value="2">Pegawai 3</option>
                                </select>
                                <div class="custom-control form-control-lg custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                    <label class="custom-control-label" for="customCheck2">Atasan Pejabat penilai sekaligus pelaksana tugas (PLT)</label>
                                </div>
                                <input type="text" class="form-control mt-2" id="colFormLabelLg" placeholder="Nama Jabatan">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                        	<div class="ml-auto">
	                            <input type="submit" name="" value="Kembali" class="btn button-main bg-dark">
	                            <input type="submit" name="" value="Simpan Sebagai Draft" class="btn button-main bg-primary">
	                            <input type="submit" name="" value="Lanjut" class="btn button-main">
                            </div>
                        </div>
                    </form> 

                </div>
                <div id="menu1" class="p-5 tab-pane fade"><br>
                	<h5 class="fs">Masukan Target Kegiatan Tugas Jabatan</h5>
                    <h6 class="red1 mt-4 m-0"><i>Untuk Mempermudah proses input bisa menggunakan format :</i> <label class="upl">Format</label>||<label class="upl">Upload</label></h6>
                    <h6 class="yell1 mb-4">Untuk melihat INDIKATOR KEGIATAN PILIH MENU ( Indikator / Indikator Kegiatan )</h6>
                    <table class="table table-bordered table-striped table-responsive tb1">
                    	<thead>
                    		<tr>
                    			<td rowspan="2" style="min-width: 70px;">No</td>
                    			<td rowspan="2">Indikator Kegiatan</td>
                    			<td rowspan="2" style="min-width: 180px;">Kegiatan Tugas Jabatan</td>
                    			<td rowspan="2" style="min-width: 70px;">SAK</td>
                    			<td rowspan="2" style="min-width: 70px;">AK</td>
                    			<td colspan="14">Target SKP</td>
                    		</tr>
                    		<tr>
                    			<td>Kuant TW 1</td>
                    			<td>Kuant TW 2</td>
                    			<td>Kuant TW 3</td>
                    			<td>Kuant TW 4</td>
                    			<td>Kual / Mutu</td>
                    			<td>Total Kuant</td>
                    			<td>Waktu TW 1</td>
                    			<td>Waktu TW 2</td>
                    			<td>Waktu TW 3</td>
                    			<td>Waktu TW 4</td>
                    			<td>Total Waktu</td>
                    			<td>Biaya</td>
                    			<td><button class="btn btn-success" id="plus">+</button></td>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td><input type="text" name="" value="1" class="form-control"></td>
                    			<td></td>
                    			<td><input type="text" name="" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><input type="text" name="" value="0" class="form-control"></td>
                    			<td><button class="btn btn-danger minus" onclick="minus(this)">-</button></td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
                <div id="menu2" class="p-5 tab-pane active"><br>
                    <h5>Kegiatan Tugas Jabatan</h5>
                    <div class="d-flex flex-row">
                    	<h6 class="w-25">Periode SKP</h6>
                    	<div class="d-flex flex-row w-75">
                    		<label class="mr-1">:</label>                    		
                    		<label>01 Jan 2020 - 31 Mar 2020</label>                    		
                    	</div>
                    </div>
                    <div class="d-flex flex-row">
                    	<h6 class="w-25">Pejabat Penilai</h6>
                    	<div class="d-flex flex-row w-75">
                    		<label class="mr-1">:</label>                    		
                    		<label>Bias Tiaradini, A.Md</label>                    		
                    	</div>
                    </div>
                    <div class="d-flex flex-row">
                    	<h6 class="w-25">Atasan Pejabat Penilai</h6>
                    	<div class="d-flex flex-row w-75">
                    		<label class="mr-1">:</label>                    		
                    		<label>Siti Asjifah Abdoellah, S.Si,Apt,MMed.Sc</label>                    		
                    	</div>
                    </div>
                    <div class="d-flex flex-row">
                    	<h6 class="w-25">Kegiatan Tugas Jabatan</h6>
                    	<div class="d-flex flex-row w-75">
                    		<label class="mr-1"></label>                    		
                    		<label></label>                    		
                    	</div>
                    </div>
                    <h6 class="mt-5 mb-3">Tugas Utama</h6>
                    <table class="table table-bordered table-striped table-responsive mb-5">
                    	<thead>
                    		<tr>
                    			<td rowspan="2" style="vertical-align : middle;">No</td>
                    			<td rowspan="2" style="vertical-align : middle;">Indikator Kegiatan</td>
                    			<td rowspan="2" style="min-width: 150px;vertical-align : middle;">Kegiatan Tugas Jabatan</td>
                    			<td rowspan="2" style="vertical-align : middle;">SAK</td>
                    			<td rowspan="2" style="vertical-align : middle;">AK</td>
                    			<td colspan="13">Target SKP</td>
                    		</tr>
                    		<tr>
                    			<td>Kuant TW 1</td>
                    			<td>Kuant TW 2</td>
                    			<td>Kuant TW 3</td>
                    			<td>Kuant TW 4</td>
                    			<td style="min-width: 80px;">Kual / Mutu</td>
                    			<td>Waktu TW 1</td>
                    			<td style="min-width: 80px;">Waktu TW 2</td>
                    			<td style="min-width: 80px;">Waktu TW 3</td>
                    			<td style="min-width: 80px;">Waktu TW 4</td>
                    			<td>Total Waktu</td>
                    			<td>Biaya</td>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td>1</td>
                    			<td></td>
                    			<td>Berenang</td>
                    			<td>0</td>
                    			<td>0</td>
                    			<td>30</td>
                    			<td>10</td>
                    			<td>20</td>
                    			<td>40</td>
                    			<td>140</td>
                    			<td>Analisis</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>1.500.000</td>
                    		</tr>
                    		<tr>
                    			<td>2</td>
                    			<td></td>
                    			<td>Berlari</td>
                    			<td>0</td>
                    			<td>0</td>
                    			<td>30</td>
                    			<td>10</td>
                    			<td>20</td>
                    			<td>40</td>
                    			<td>140</td>
                    			<td>Analisis</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>1.500.000</td>
                    		</tr>
                    		<tr>
                    			<td>3</td>
                    			<td></td>
                    			<td>Lompat Indah</td>
                    			<td>0</td>
                    			<td>0</td>
                    			<td>30</td>
                    			<td>10</td>
                    			<td>20</td>
                    			<td>40</td>
                    			<td>140</td>
                    			<td>Analisis</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>1.500.000</td>
                    		</tr>
                    		<tr>
                    			<td>4</td>
                    			<td></td>
                    			<td>Lompat Jauh</td>
                    			<td>0</td>
                    			<td>0</td>
                    			<td>30</td>
                    			<td>10</td>
                    			<td>20</td>
                    			<td>40</td>
                    			<td>140</td>
                    			<td>Analisis</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>3 Bulan</td>
                    			<td>1.500.000</td>
                    		</tr>
                    	</tbody>
                    </table>      
                    <div class="d-flex flex-row">
                    	<div class="ml-auto">
                            <input type="submit" name="" value="Kembali" class="btn button-main bg-dark">
                            <input type="submit" name="" value="Simpan Sebagai Draft" class="btn button-main bg-primary">
                            <input type="submit" name="" value="Lanjut" class="btn button-main">
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.20/dataRender/datetime.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?=base_url();?>assets/js/chosen.jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.chosen-select').chosen({ width: "100%" });

        $('.input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
        $('#plus').click(function() {
        	$('.tb1 tbody tr:last').after('<tr><td><input type="text" name="" value="1" class="form-control"></td> <td></td> <td><input type="text" name="" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><input type="text" name="" value="0" class="form-control"></td> <td><button class="btn btn-danger" onclick="minus(this)">-</button></td> </tr>');        	
      	});
    });    

    function minus(ini){
	   	$(ini).parent().parent().remove();  	
    }
    </script>