

    <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i>
        PENGAJUAN CUTI
      </h1>
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
            <form role="form" action="<?php echo site_url('Welcome/UpdatePengajuanPending'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputnip">NIP</label>
                  <input type="hidden" name="kd_cuti" value="<?php echo $detail['kd_cuti']; ?>">
                  <input type="hidden" name="tgl_mulai" value="<?php echo $detail['tgl_mulai']; ?>">
                  <input type="hidden" name="tgl_akhir" value="<?php echo $detail['tgl_akhir']; ?>">
                  <input type="hidden" name="alamat_selama_cuti" value="<?php echo $detail['alamat_selama_cuti']; ?>">
                  <input type="text" name="nip" class="form-control" id="exampleInputnip" placeholder="NIP" value="<?php echo $detail['nip']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama">NAMA</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputnama" placeholder="Nama" value="<?php echo $detail['nama']; ?>" >
                </div>
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
                  <label for="exampleInputalasan">Alasan</label>
                  <input type="text" name="alasan" class="form-control" id="exampleInputalasan" placeholder="Alasan" value="<?php echo $detail['alasan']; ?>">
                </div>
                  <input type="hidden" name="jenis_cuti" class="form-control" id="jenis_cuti" placeholder="jenis_cuti" value="<?php echo $detail['jenis_cuti']; ?>">
                           
                <div class="form-group">
                  <label for="exampleInputpersetujuan">persetujuan</label>
                        <br><select id="exampleInputpersetujuan" name="persetujuan" class="form-control" value="<?php echo $detail['persetujuan']; ?>">
                        <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Tidak Disetujui">Tidak Disetujui</option>
                      </select>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-info pull-right">
              </div>
            </form>
          </div>
          <!-- /.box -->
</section>