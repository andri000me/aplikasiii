
	<section class="content-header">
      <h1>
        <i class="fa fa-book"></i>
        DATA Pengajuan Cuti
      </h1><br>
      <?php echo $this->session->flashdata('message');?>
<!-- templet -->
<!-- /.row -->
</section><br>
   
 <section class="content">       
      <div class="box">
        <div class="col-xs">
                  <div class="box-header">
                    <h3 class="box-title">Tabel Data Cuti</h3>
                  </div>
      <div class="content">
      <a href="<?php echo site_url('Admin/VPengajuanCuti'); ?>" class="btn btn-lg btn-info pull-lefth">Pengajuan Cuti</a>


            <!-- /.box-header -->
            <div class="box-body">
              <table colspan="2" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Lamanya Cuti</th>
                    <th>Tanggal</th>
                    <th>Jenis Cuti</th>
                    <th>Alasan</th>
                    <th>Persetujuan</th>
                    <th></th>
                </tr>
                </thead>
                               <?php
                              if(!empty($PengajuanCuti))
                              {
                                foreach($PengajuanCuti as $ReadDS)
                                {
                              ?>

                              <tr>
                                <td><?php echo $ReadDS->nip; ?></td>
                                <td><?php echo $ReadDS->nama; ?></td>
                                <td><?php echo $ReadDS->tgl_pengajuan; ?></td>
                                 <td><?php 
                                $lama = $ReadDS->tgl_akhir-($ReadDS->tgl_mulai);
                                echo $lama;  ?></td>
                                <td><?php echo $ReadDS->tgl_mulai,'  ', 's/d', '  ',$ReadDS->tgl_akhir; ?></td>
                                <td><?php echo $ReadDS->jenis_cuti; ?></td>
                                <td><?php echo $ReadDS->alasan; ?></td>
                                <td><?php echo $ReadDS->persetujuan; ?></td>
                                <td>                                
                                  <a href="<?php echo site_url('Admin/PengajuanCuti/'.$ReadDS->id_cuti.'/view') ?>" class="btn btn-info" ><i class="fa fa-edit"+></i></a>
                                  <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-trash"></i></a>
                                  <a href="<?php echo site_url('Admin/PengajuanCuti/'.$ReadDS->id_cuti.'/view') ?>" class="btn btn-success">Detail</a>
                                </td>
                              </tr>

                              <div class="modal modal-danger fade" id="modal-danger">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">HAPUS DATA</h4>
                                        </div>
                                        <div class="modal-body">
                                  <p>Apakah anda yakin ingin menghapus??&hellip;</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                          <a type="button" class="btn btn-outline" href="<?php echo site_url('Admin/DeletePengajuanCuti/'.$ReadDS->id_cuti) ?>" type="button" class="btn btn-outline">Yakin</a>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>

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