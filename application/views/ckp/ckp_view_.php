  <div class="row" style="margin:20px">
    <?php
    if($ckp_row>0){
      $nama = $this->session->userdata('nama');
      $nipbaru = $this->session->userdata('nipbaru');
      $jabatan = $this->session->userdata('lvl');
      $seksi = $pegawai->nm_org;
      $gelar_b = $pegawai->gelar_belakang;
      $seksi_id = $pegawai->id_org;
      $satker_id = $satker->id_satker;
      $satker_n = $satker->nm_satker;
      $so='';
      $jb='';
        if(strcmp(substr($satker_id,2,1),'7')==0){
          if(strcmp($seksi_id,'1')==0){
            $so =$seksi.' '.$satker_n;
              if(strcmp($jabatan,'3')==0){
                $jb ='Kepala '.$seksi;
              }else if(strcmp($jabatan,'4')==0){
                $jb ='Staf '.$seksi;
              }
          }else{
            if(strcmp($seksi_id,'0')==0){
              $so ='BPS '.$satker_n;
              $jb ='Kepala BPS '.$satker_n;
            }elseif(strcmp($seksi_id,'7')==0){
              $so ='BPS '.$satker_n;
              $jb ='Koordinator Statistik Kecamatan';
            }else{
              $so =$seksi.' BPS '.$satker_n;
              if(strcmp($jabatan,'3')==0){
                $jb ='Kepala '.$seksi;
              }else if(strcmp($jabatan,'4')==0){
                $jb ='Staf '.$seksi;
              }
            }
          }
        }else{
          if(strcmp($seksi_id,'1')==0){
            $so =$seksi.' BPS '.$satker_n;
            if(strcmp($jabatan,'3')==0){
              $jb ='Kepala '.$seksi;
            }else if(strcmp($jabatan,'4')==0){
              $jb ='Staf '.$seksi;
            }
          }else{
            if(strcmp($seksi_id,'0')==0){
              $so ='BPS '.$satker_n;
              $jb ='Kepala BPS '.$satker_n;
            }elseif(strcmp($seksi_id,'7')==0){
              $so ='BPS Kab. '.$satker_n;
              $jb ='Koordinator Statistik Kecamatan';
            }else{
              $so =$seksi.' BPS '.$satker_n;
              if(strcmp($jabatan,'3')==0){
                $jb ='Kepala '.$seksi;
              }else if(strcmp($jabatan,'4')==0){
                $jb ='Staf '.$seksi;
              }
            }
          }
        }
    ?>
    <table cellspacing="0" width="100%" style="margin-bottom:20px;" >
      <tr>
        <td align="left">
          <button class="btn btn-primary noborder" onclick="printx()">Cetak</button>
          <button class="btn btn-success noborder" onclick="download()">Excel</button>
        </td>
        <td align="right">
          <div class="form-group">
             <label for="sel1">Pilih Bulan:</label>
             <select class="form-control" id="selectMonth" style="width:250px; align: right">
             <?php
              $array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
              $no=0;
              if($m==''){
                $m=date("m");
              }
              foreach ($array_bulan as $row) {
                $no++;
                if($no==$m){
              ?>
                    <option value='<?php echo $no; ?>' selected><?php echo $row; ?></option>
              <?php }else{ ?>
                    <option value='<?php echo $no; ?>'><?php echo $row; ?></option>
              <?php } } ?>
              </select>
           </div>
         </td>
       </tr>
     </table>
    <div id="ckp">
    <table cellspacing="0" width="100%" style="margin-bottom:20px;">
      <tr width="100%">
        <td colspan="10" style="text-align:center; font-size:16px; font-weight:bold">CAPAIAN KINERJA PEGAWAI TAHUN <?php echo date("Y"); ?></td>
      </tr>
    </table>
    <table cellspacing="0" style="margin-bottom:20px;" width="100%">
      <tr>
        <td width="150px">Satuan Organisasi</td>
        <td style="width:20px; text-align:center">:</td>
        <td><?php echo $so; ?></td>
        <?php
          $kuantitas = 0.5*$av_percentage->av_percentage;
          $kualitas = 0.5*$av_kualitas->av_kualitas;
          $ckp_final = $kualitas+$kuantitas;
        ?>
      </tr>
      <tr>
        <td>Nama</td>
        <td style="width:20px; text-align:center">:</td>
        <?php if($gelar_b=="") {?>
          <td><?php echo $nama; ?></td>
        <?php }else { ?>
          <td><?php echo $nama.', '.$gelar_b; ?></td>
        <?php } ?>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td style="width:20px; text-align:center">:</td>
        <td><?php echo $jb; ?></td>
      </tr>
      <tr>
        <td>Periode</td>
        <td style="width:20px; text-align:center">:</td>
        <td id="periode"><?php echo $periode; ?></td>
      </tr>
    </table>
    <table cellspacing="0" width="100%" class="ckp" style="margin-bottom:20px;border-collapse: collapse;" border="1">
      <thead>
      <tr style="text-align:center">
        <th rowspan="2" >No</th>
        <th rowspan="2" >Uraian Kegiatan</th>
        <th rowspan="2" width="100px">Satuan</th>
        <th colspan="3" >Kuantitas</th>
        <th rowspan="2" width="70px">Tingkat Kualitas</th>
        <th rowspan="2" width="70px">Kode Butir Kegiatan</th>
        <th rowspan="2" width="70px">Angka Kredit</th>
        <th rowspan="2" width="100px">Keterangan</th>
      </tr>
      <tr>
        <th width="70px">Target</th>
        <th width="70px">Realisasi</th>
        <th width="70px">%</th>
      </tr>
      </thead>
      <tfoot>
      <tr>
        <th colspan="7" style="text-align:center; padding-right:10px">JUMLAH</th>
        <th></th>
        <th><?php echo number_format($sum_ak->sum_ak, 2, '.', ' '); ?></th>
        <th></th>
      </tr>
      <tr>
        <th colspan="5" style="text-align:center; padding-right:10px">RATA-RATA KEGIATAN</th>
        <th><?php echo number_format($av_percentage->av_percentage, 2, '.', ' '); ?></th>
        <th><?php echo number_format($av_kualitas->av_kualitas, 2, '.', ' '); ?></th>
        <th colspan="3" bgcolor="#707070"></th>
      </tr>
      <tr>
        <th colspan="5">CAPAIAN KINERJA PEGAWAI (CKP)</th>
        <th colspan="2"><?php echo number_format($ckp_final, 2, '.', ' '); ?></th>
        <th colspan="3" bgcolor="#707070"></th>
      </tr>
      </tfoot>
      <tbody>
      <tr style="text-align:center">
        <td>(1)</td>
        <td>(2)</td>
        <td>(3)</td>
        <td>(4)</td>
        <td>(5)</td>
        <td>(6)</td>
        <td>(7)</td>
        <td>(8)</td>
        <td>(9)</td>
        <td>(10)</td>
      </tr>
      <tr>
        <td colspan="10" style="text-align: left; font-weight:bold; padding-left:5px">UTAMA</td>
      </tr>
        <?php
        if($ckp_row>0){
        $no=0;
        foreach ($ckp as $row) {
          $no++; ?>
      <tr style="text-align:center">
        <td ><?php echo $no; ?></td>
        <td style="text-align: left; padding-left:5px"><?php echo $row->nm_keg; ?></td>
        <td><?php echo $row->satuan; ?></td>
        <td><?php echo $row->target; ?></td>
        <td><?php echo $row->realisasi; ?></td>
        <td><?php echo number_format($row->persentase, 0, '.', ' '); ?></td>
        <td><?php echo $row->kualitas; ?></td>
        <td></td>
        <td><?php echo '-'; ?></td>
        <td></td>
      </tr>
      <?php }
    }else{?>
      <tr style="text-align:center">
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="text-align:center">
        <td>2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="10" style="text-align: left; font-weight:bold; padding-left:5px">TAMBAHAN</td>
      </tr>
      <?php
      if($ckpt_row>0){
      $no=0;
      foreach ($ckpt as $row) {
        $no++; ?>
        <!-- <tr style="text-align:center">
          <td><?php echo $no; ?></td>
          <td style="text-align: left; padding-left:5px"><?php echo $row->n_keg; ?></td>
          <td><?php echo $row->satuan; ?></td>
          <td><?php echo $row->target; ?></td>
          <td><?php echo $row->realisasi; ?></td>
          <td><?php echo number_format($row->persentase, 0, '.', ' '); ?></td>
          <td><?php echo $row->kualitas; ?></td>
          <td>kode_butir</td>
          <td><?php echo number_format($row->ak, 3, '.', ' '); ?></td>
          <td>keterangan</td>
        </tr> -->
        <tr style="text-align:center">
        <td ><?php echo $no; ?></td>
        <td style="text-align: left; padding-left:5px"><?php echo $row->nm_keg; ?></td>
        <td><?php echo $row->satuan; ?></td>
        <td><?php echo $row->target; ?></td>
        <td><?php echo $row->realisasi; ?></td>
        <td><?php echo number_format($row->persentase, 0, '.', ' '); ?></td>
        <td><?php echo $row->kualitas; ?></td>
        <td></td>
        <td><?php echo '-'; ?></td>
        <td></td>
      </tr>
    <?php }
  }else{?>
    <tr style="text-align:center">
      <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style="text-align:center">
      <td>2</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    </tbody>
    </table>
    <?php } ?>

      <table cellspacing="0" width="100%">
        <tr>
          <td colspan="2">Penilaian Kinerja</td>
        </tr>
        <tr>
          <td colspan="2">Tanggal : <?php echo $penilaian_k; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="50%" style="text-align:center">Pegawai Yang Dinilai</td>
          <td width="50%" style="text-align:center">Pejabat Penilai</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr style="margin-top:50px">
          <?php if($gelar_b=="") {?>
            <td width="50%" style="text-align:center"><?php echo $nama; ?></td>
          <?php }else{ ?>
            <td width="50%" style="text-align:center"><?php echo $nama.', '.$gelar_b; ?></td>
          <?php } ?>
          <td width="50%" style="text-align:center"><?php echo $penilai->gelar_depan.' '. $penilai->nama.', '.$penilai->gelar_belakang; ?></td>
        </tr>
        <tr style="margin-top:50px">
          <td width="50%" style="text-align:center">NIP. <?php echo $nipbaru; ?></td>
          <td width="50%" style="text-align:center">NIP. <?php echo $penilai->nipbaru; ?></td>
        </tr>
      </table>
    </div>
      <?php }else{ ?>
        <div class="form-group" align="right">
           <label for="selectMonth">Tampilkan CKP Bulan:</label>
           <select class="form-control" id="selectMonth" style="width:250px; align: right">
           <?php
            $array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
            $no=0;
            if($m==''){
              $m=date("m");
            }
            foreach ($array_bulan as $row) {
              $no++;
              if($no==$m){
            ?>
                  <option value='<?php echo $no; ?>' selected><?php echo $row; ?></option>
            <?php }else{ ?>
                  <option value='<?php echo $no; ?>'><?php echo $row; ?></option>
            <?php } } ?>
            </select>
         </div>
        <div class="alert alert-warning">
          Maaf realisasi capaian kinerja untuk <strong>Bulan <?php echo $bln; ?></strong> belum tersedia. <a href="<?=base_url();?>ckp/entri_ckp_realisasi">Klik disini</a> untuk membuat CKP Realisasi!
        </div>
      <?php } ?>
  </div>

    <script type="text/javascript">
      $("#selectMonth").change(function(event) {
        window.location.href = "<?=base_url();?>detil-realisasi-capaian-kinerja-pegawai/"+$('#selectMonth').val();
      });
      function download(){
        window.location.href = "<?=base_url();?>unduh-realisasi-capaian-kinerja-pegawai/"+$('#selectMonth').val();
      }
    </script>
    <script type="text/javascript">
    function printx(){
      // var divToPrint=document.getElementById('ckp');
      // var newWin=window.open('','Print-Window');
      // newWin.document.open();
      // newWin.document.write('<html><head></head><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
      // newWin.document.close();

      // setTimeout(function(){newWin.close();},10);

      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById('ckp').innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
    </script>
