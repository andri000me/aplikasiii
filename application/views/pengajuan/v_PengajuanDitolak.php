<section class="content">       
      <div class="box">
        <div class="col-xs">
                  <div class="box-header">
                    <h3 class="box-title">Tabel Data Cuti</h3>
                  </div>
                  <?php echo $this->session->flashdata('message');?>
      <div class="content">
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('Laporan/Cetak_Ditolak');?>"class="btn btn-warning">Cetak</a>
              <table colspan="2" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alasan</th>
                    <th>Persetujuan</th>
                    <th></th>
                </tr>
                </thead>
                               <?php
                              if(!empty($PengajuanDitolak))
                              {
                                foreach($PengajuanDitolak as $ReadDS)
                                {
                              ?>

                              <tr>
                                <td><?php echo $ReadDS->nip; ?></td>
                                <td><?php echo $ReadDS->nama; ?></td>
                                <td><?php echo $ReadDS->alasan; ?> </td>
                                <td><?php echo $ReadDS->persetujuan; ?> </td>
                                <td>
                                <a href="<?php echo site_url('Welcome/Pengajuan_Disetujui/'.$ReadDS->kd_cuti.'/view') ?>" class="btn btn-success">Beri Ijin</a>
                              </td>
                              </tr>
                              

                              <?php   
                                }
                              }
                              ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  
    </section><br>