
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-list-alt"></i>
        <?php echo $title;?>
      </h1>
    </section>
<br>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
       <div class="row">
        <div class="col-md-5">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/logo_bpkp2.png');?>" alt="User profile picture">

              <h3 class="profile-username text-center" ><?php echo $DataPegawai ['nama']; ?></h3>

              <p class="text-muted text-center"></p>

              <ul class="list-group list-group-unbordered">
                <!-- <li class="list-group-item text-center">
                  <h3><?php echo $DataPegawai ['nama']; ?></h3> 
                </li> -->
                <li class="list-group-item">
                  <b>Pangkat<p class="pull-right"><?php echo $DataPegawai['pangkat'];?></p>
                
                <li class="list-group-item">
                  <b>Jabatan<p class="pull-right"><?php echo $DataPegawai['jabatan'];?></p>
                
                <li class="list-group-item">
                  <b>Unit Bidang<p class="pull-right"><?php echo $DataPegawai['unit_bidang'];?></p>
                
                <li class="list-group-item">
                  <b>Status Pegawai<p class="pull-right"><?php echo $DataPegawai['status_pegawai'];?></p>
                </li>
                                   </p>
                </li>
              </ul>

              <a href="<?php echo site_url('Welcome/DataPegawai');?>" class="btn btn-primary btn-block"><b>Oke</b></a>
            </div>
            <!-- /.box-body -->
          </div>

      <!-- /.box -->
         </div>
      </div>
    </section>
    <!-- /.content -->
  </div>