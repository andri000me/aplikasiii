  <section class="content-header">
      <h1>
        <i class="fa fa-book"></i>
        DATA Pengajuan Cuti
      </h1>

  <section class="content">
        <div class="col-xs">
                  <div class="box-header">
                    <a href="<?php echo site_url('Welcome/VPengajuanCuti'); ?>" class="btn btn-lg btn-info pull-lefth">Pengajuan Cuti</a>
                  </div>
                </div>

      <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>Pending</h3>
              <?php echo $Count;?>

              <p>Data Cuti Pending</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-person-add"></i> -->
            </div>
            <a href="<?php echo site_url('Welcome/Pengajuan_Pending'); ?>" class="small-box-footer">Cek Disini <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Disetujui</h3>
              <?php echo $CountDisetujui;?>
              <p>Data Cuti Disetujui</p>
            </div>
            <div class="icon">
              <i class="ion ion-add"></i>
            </div>
            <a href="<?php echo site_url('Welcome/Pengajuan_Disetujui'); ?>" class="small-box-footer">Cek Disini <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Ditolak</h3>
              <?php echo $CountTidakDisetujui;?>

              <p>Data Cuti Tidak Disetujui</p>
            </div>
            <div class="icon">
              <i class="ion ion-add"></i>
            </div>
            <a href="<?php echo site_url('Welcome/Pengajuan_Ditolak'); ?>" class="small-box-footer">Cek Disini <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

</section>

 