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
            <form role="form" action="<?php echo site_url('Welcome/UpdatePengajuanCuti'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputnip">NIP</label>
                   <input type="hidden" name="id_cuti" class="form-control" id="exampleInputid_cuti" value="<?php echo $detail['id_cuti']; ?>">
                  <input type="text" name="nip" class="form-control" id="exampleInputnip" placeholder="NIP" value="<?php echo $detail['nip']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama">NAMA</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputnama" placeholder="Nama" value="<?php echo $detail['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputtgl_pengajuan">Tanggal Pengajuan</label>
                  <input type="date" name="tgl_pengajuan" class="form-control" id="exampleInputtgl_pengajuan" value="<?php echo $detail['tgl_pengajuan']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputtgl_mulai">Tanggal Mulai</label>
                  <input type="date" name="tgl_mulai" class="form-control" id="exampleInputtgl_mulai" value="<?php echo $detail['tgl_mulai']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputtgl_akhir">Tanggal Akhir</label>
                  <input type="date" name="tgl_akhir" class="form-control" id="exampleInputtgl_akhir" value="<?php echo $detail['tgl_akhir']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputjenis_cuti">Jenis Cuti</label>
                        <br><select id="exampleInputjenis_cuti" name="jenis_cuti" value="<?php echo $detail['jenis_cuti']; ?>">
                        <option value="Cuti Tahunan">Cuti Tahunan</option>
                        <option value="Cuti Bersama">Cuti Bersama</option>
                        <option value="Cuti Sakit">Cuti Sakit</option>
                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                        <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                        <option value="Cuti Di Luar Tanggungan Negara">Cuti Di Luar Tanggungan Negara</option>
                      </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputalasan">Alasan</label>
                  <input type="alasan" name="alasan" class="form-control" id="exampleInputalasan" placeholder="Alasan" value="<?php echo $detail['alasan']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputpersetujuan">Persetujuan</label>
                  <br><select id="exampleInputpersetujuan" name="persetujuan" value="<?php echo $detail['persetujuan']; ?>">
                        <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Ditolak">Ditolak</option>
                      </select>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" value="Simpan" class="btn btn-info pull-right">Selesai</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
</section>