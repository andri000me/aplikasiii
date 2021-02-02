<section class="content">       
      <div class="box">
        <div class="col-xs">
                  <div class="box-header">
                    <h3 class="box-title">Tabel Data Cuti Yang Disetujui</h3>
                  </div>
                  <?php echo $this->session->flashdata('message');?>
      <div class="content">
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('Laporan/Cetak_Disetujui');?>"class="btn btn-warning">Cetak</a>
              <table colspan="2" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal cuti</th>
                    <th>Jumlah Hari</th>
                    <th>Persetujuan</th>
                    
                    <th></th>
                </tr>
                </thead>
                               <?php
                              if(!empty($PengajuanDisetujui))
                              {
                                foreach($PengajuanDisetujui as $ReadDS)
                                {
                              ?>

                              <tr>
                                <td><?php echo $ReadDS->nip; ?></td>
                                <td><?php echo $ReadDS->nama; ?></td>
                                <td><?php echo $ReadDS->tgl_mulai, " s/d ", $ReadDS->tgl_akhir; ?></td>
                                <td><?php
                                $birdth = new Datetime($ReadDS->tgl_mulai);
                                $today = new DateTime($ReadDS->tgl_akhir);
                                $y = $today->diff($birdth)->y;
                                $d = $today->diff($birdth)->d;

                                echo $d;

                                ?></td>
                                <td><?php echo $ReadDS->persetujuan; ?> </td>
                                <td>
                                <a href="<?php echo site_url('Welcome/DeleteDataCuti/'.$ReadDS->kd_cuti) ?>" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
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