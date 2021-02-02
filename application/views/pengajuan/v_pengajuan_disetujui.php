
 <section class="content">       
      <div class="box">
        <div class="col-xs">
                  <div class="box-header">
                    <h3 class="box-title">Tabel Data Cuti</h3>
                  </div>
                  <?php echo $this->session->flashdata('message');?>
      <div class="content">
      <a href="<?php echo site_url('Welcome/VPengajuanCuti'); ?>" class="btn btn-lg btn-info pull-lefth">Pengajuan Cuti</a>


            <!-- /.box-header -->
            <div class="box-body">
              <table colspan="2" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Persetujuan</th>
                    <th></th>
                </tr>
                </thead>
                               <?php
                              if(!empty($Disetujui))
                              {
                                foreach($Disetujui as $ReadDS)
                                {
                              ?>

                              <tr>
                                <td><?php echo $ReadDS->nip; ?></td>
                                <td><?php echo $ReadDS->nama; ?></td>
                                <td><?php echo $ReadDS->persetujuan; ?> </td>
                                <!-- // if ($p = 'Disetujui') {
                                //    echo '<span class="label label-success">Disetujui</span>';
                                //  }else ($p = 'Ditolak') {
                                //    echo '<span class="label label-danger">Ditolak</span>';
                                //  }elseif{
                                //   echo '<span class="label label-warning">Menunggu Persetujuan</span>';
                                //  } -->
                             

                                                                  ?></td>
                                }
                                }
                                }
                                <td>                                
                                  <a href="<?php echo site_url('Welcome/PengajuanCuti/'.$ReadDS->id_cuti.'/view') ?>" class="btn btn-success">Persetujuan</a>
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