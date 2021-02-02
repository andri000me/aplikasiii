

    <section class="content-header">
      <h1>
      	<i class="fa fa-book"></i>
        DATA PEGAWAI Bidang P3JFA
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
					<th>Tempat Lahir</th>
				
					<th></th>
                </tr>

                <?php
					if(!empty($DataP3JFA))
					{
						foreach($DataP3JFA as $ReadDS)
						{
					?>

					<tr>
						<td><?php echo $ReadDS->nip; ?></td>
						<td><?php echo $ReadDS->gelar_awal,
						" ",		   $ReadDS->nama,
						" ",		   $ReadDS->gelar_akhir; ?></td>
						<td><?php echo $ReadDS->tempat_lahir; ?></td>
						<td>
							<a href="<?php echo site_url('Welcome/DataPegawai/'.$ReadDS->nip.'/view') ?>" class="btn btn-info" ><i class="fa fa-edit"+>Update</i></a>
							<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
							<a href="<?php echo site_url('Welcome/DetailPegawai/'.$ReadDS->nip.'/view') ?>" class="btn btn-success">Detail</a>
						</td>
					</tr>

					<div class="modal modal-danger fade" id="modal-danger">
			          <div class="modal-dialog">
			            <div class="modal-content">
			              <div class="modal-header">
			                <button href="<?php echo site_url('Welcome/DeleteDataPegawai/'.$ReadDS->nip) ?>" type="button" class="close" data-dismiss="modal" aria-label="Close">
			                  <span aria-hidden="true">&times;</span></button>
			                <h4 class="modal-title">HAPUS DATA</h4>
			              </div>
			              <div class="modal-body">
							<p>Apakah anda yakin ingin menghapus??&hellip;</p>
			              </div>
			              <div class="modal-footer">
			                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
			                <a href="<?php echo site_url('Welcome/DeleteDataPegawai/'.$ReadDS->nip) ?>" type="button" class="btn btn-outline"  >Yakin</a>
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
      </div>
    </section>
    <!-- /.content -->