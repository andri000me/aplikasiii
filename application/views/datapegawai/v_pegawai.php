    <section class="content-header">
      <h1>
      	<i class="fa fa-book"></i>
        DATA PEGAWAI
        <?php echo $this->session->flashdata('message');?>
      </h1><br>

      <a href="<?php echo site_url('Pegawai/BidangTU');?>"class="btn btn-lg bg-navy">TU</a>
      <a href="<?php echo site_url('Pegawai/BidangP2E');?>"class="btn btn-lg bg-navy">P2E</a>
      <a href="<?php echo site_url('Pegawai/BidangP3KT');?>"class="btn btn-lg bg-navy">P3KT</a>
      <a href="<?php echo site_url('Pegawai/BidangP3JFA');?>"class="btn btn-lg bg-navy">P3JFA</a>
    </section>
    
<!-- templet -->
<!-- /.row -->

 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            
            	<a href="<?php echo site_url('Welcome/tambahdatapegawai'); ?>" class="btn btn-info pull-lefth">Tambah</a>

              <div class="box-tools">
              	
                <div class="input-group input-group-sm" style="width: 250px;">
                
                  
                  <div class="input-group-btn">
                    
                  </div>
                </div>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive padding-1" > 
              <table class="table table-hover">
                <tr>
                   <th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Pangkat</th>
					<th>Jabatan</th>
					<th>Unit Bidang</th>
					<th></th>
                </tr>

                <?php
					if(!empty($DataPegawai))
					{
						foreach($DataPegawai as $ReadDS)
						{
					?>

					<tr>
						<td><?php echo $ReadDS->nip; ?></td>
						<td><?php echo $ReadDS->gelar_awal,
						" ",		   $ReadDS->nama,
						" ",		   $ReadDS->gelar_akhir; ?></td>
						<td><?php echo $ReadDS->alamat; ?></td>
						<td><?php echo $ReadDS->pangkat; ?></td>
						<td><?php echo $ReadDS->jabatan; ?></td>
						<td><?php echo $ReadDS->unit_bidang; ?></td>
						<td>
							<a href="<?php echo site_url('Welcome/DataPegawai/'.$ReadDS->nip.'/view') ?>" class="btn btn-info" ><i class="fa fa-edit"+>Update</i></a>
							<a href="<?php echo site_url('Welcome/DeleteDataPegawai/'.$ReadDS->nip) ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
							<a href="<?php echo site_url('Welcome/DetailPegawai/'.$ReadDS->nip.'/view') ?>" class="btn btn-success">Detail</a>
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
      </div>
    </section>
    <!-- /.content -->