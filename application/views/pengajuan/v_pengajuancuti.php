    <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i>
        PENGAJUAN CUTI
      </h1>
      <?php echo $this->session->flashdata('message');?>
    </section><br>
 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Formulir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('Welcome/AddPengajuanCuti'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputnip">NIP</label>
                  <input type="text" name="nip" class="form-control" id="exampleInputnip" placeholder="NIP">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama">NAMA</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputnama" placeholder="Nama">
                </div>
                
                  <input type="hidden" name="alasan" class="form-control" id="exampleInputalasan" placeholder="Alasan">
                <div class="form-group">
                  <label for="exampleInputjenis_cuti">Jenis Cuti</label>
                        <br><select id="exampleInputjenis_cuti" name="jenis_cuti" class="form-control">
                        <option value="Cuti Tahunan">Cuti Tahunan</option>
                        <option value="Cuti Besar">Cuti Besar</option>
                        <option value="Cuti Sakit">Cuti Sakit</option>
                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                        <option value="Cuti Karena Alasan Penting ">Cuti Karena Alasan Penting </option>
                        <option value="Cuti Diluar Tanggungan Negara">Cuti Diluar Tanggungan Negara</option>
                      </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputtgl_mulai">Tanggal Mulai</label>
                  <input type="date" name="tgl_mulai" class="form-control" id="exampleInputtgl_mulai" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputtgl_akhir">Tanggal Akhir</label>
                  <input type="date" name="tgl_akhir" class="form-control" id="exampleInputtgl_akhir" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputalasan">Alamat Selama Menjalankan Cuti</label>
                  <input type="text" name="alamat_selama_cuti" class="form-control" id="exampleInputalamat_selama_cuti" placeholder="Alamat">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputpersetujuan">Persetujuan</label>
                  <input type="text" name="persetujuan" class="form-control"  value="Menunggu Persetujuan" disabled>
                  <input type="text" name="persetujuan" class="form-control"  value="Menunggu Persetujuan" hidden>
                </div> -->
                
                <div class="form-group">
                  <label for="exampleInputjenis_cuti">persetujuan</label>
                        <br><select id="exampleInputpersetujuan" name="persetujuan" class="form-control">
                        <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                      </select>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" value="Simpan" class="btn btn-info pull-right">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
</section>